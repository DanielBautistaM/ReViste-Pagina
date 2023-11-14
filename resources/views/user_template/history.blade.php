@extends('user_template.layouts.user_profile_template')

@section('profilecontent')
    Ordenes Aprobadas - Los productos llegaran muy pronto!

    @if (count($approved_orders) > 0)
        <table class="table">
            <tr>
                <th>Nombre del Producto</th>
                <th>Cantidad</th>
                <th>Precio Total</th>
            </tr>
            @foreach($approved_orders as $order)
                <tr>
                    <td>
                        {{-- Verificar si el producto está presente --}}
                        @if ($order->product)
                            {{ $order->product->product_name }}
                        @else
                            Producto no disponible
                        @endif
                    </td>
                    <td> {{ $order->quantity }} </td>
                    <td>{{ $order->total_price }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <p>No hay órdenes aprobadas en el historial.</p>
    @endif
@endsection
