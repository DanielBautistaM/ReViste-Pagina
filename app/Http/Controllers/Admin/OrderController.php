<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
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
            // Actualizar el estado a 'approved'
            $order->status = 'approved';
            $order->save();

            // Puedes redirigir a la página de órdenes pendientes después de la aprobación
            return redirect()->route('checkedorder')->with('success', 'La orden ha sido aprobada exitosamente.');
        }

        // Si la orden no se encuentra
        return redirect()->route('pendingorder')->with('error', 'No se pudo encontrar la orden.');
    }



}
