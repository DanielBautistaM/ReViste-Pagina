<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){


        //$pending_orders = Order::where('status','pending')->latest()->get();
        $pending_orders = Order::with(['user', 'product'])->where('status', 'pending')->latest()->get();
        return view("admin.pendingorders",compact("pending_orders"));


    }
    public function checkedOrders()
    {
        $approved_orders = Order::with(['user', 'product'])->where('status', 'approved')->latest()->get();
        return view('admin.checkedorders', compact('approved_orders'));
    }

    public function approveOrder($id)
    {
        $order = Order::find($id);

        if ($order) {
            // Obtener el producto asociado a la orden
            $product = Product::find($order->product_id);

            if ($product) {
                // Restar la cantidad de la orden de la cantidad disponible del producto
                $newQuantity = $product->quantity - $order->quantity;
            
                // Verificar que la nueva cantidad no sea negativa
                $newQuantity = max(0, $newQuantity);
            
                // Actualizar la cantidad del producto
                $product->quantity = $newQuantity;
                $product->save();
            }

            // Actualizar el estado a 'approved'
            $order->status = 'approved';
            $order->save();

            // Puedes redirigir a la página de órdenes pendientes después de la aprobación
            return redirect()->route('checkedorder')->with('success', 'La orden ha sido aprobada exitosamente.');
        }

        // Si la orden no se encuentra
        return redirect()->route('pendingorder')->with('error', 'No se pudo encontrar la orden.');
    
    }


    public function cancelOrder($id)
    {
        $order = Order::find($id);
    
        if ($order) {
            // Eliminar la orden de la base de datos
            $order->delete();
            return redirect()->route('pendingorder')->with('success', 'La orden ha sido cancelada y eliminada exitosamente.');
        }
    
        return redirect()->route('pendingorder')->with('error', 'No se pudo encontrar la orden.');
    }


}
