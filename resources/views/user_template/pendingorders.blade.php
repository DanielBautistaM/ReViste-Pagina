@extends('user_template.layouts.user_profile_template')

@section('profilecontent')
    Órdenes Pendientes

    @if (count($pending_orders) > 0)
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <table class="table">
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            @foreach($pending_orders as $order)
                <tr>
                    <td>
                        {{-- Verificar si el producto está presente --}}
                        @if ($order->product)
                            {{ $order->product->product_name }}
                        @else
                            Producto no disponible
                        @endif
                    </td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->total_price }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No tienes órdenes pendientes.</p>
    @endif
@endsection
