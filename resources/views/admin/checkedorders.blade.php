@extends('admin.layouts.template')

@section("page_title")
Checked orders
@endsection

@section('content')
<div class="container my-5">
    <div class="card p-4">
        <div class="card-title"><h2>Ordenes Checkeadas</h2></div>
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            <table class="table">
                <tr>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>ShippingInfo</th>
                    <th>product</th>
                    <th>quantity</th>
                    <th>total</th>
                    <th>status</th>
                </tr>
                
                @foreach ($approved_orders as $order)
                    <tr>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->user ? $order->user->name : 'Usuario no disponible' }}</td>
                        <td>
                            <ul>
                                <!-- Detalles de envío -->
                                <li>Numero de Telefono - {{ $order->shipping_phoneNumber }}</li>
                                <li>Ciudad - {{ $order->shipping_city }}</li>
                                <li>Direccion - {{ $order->shipping_postalcode }}</li>
                            </ul>
                        </td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->total_price }}</td>
        
                        

                            <td style="position: relative; text-align: center;">
                    @if($order->status === 'approved')
                        <div style="position: absolute; top: 20px; left: 50%; transform: translateX(-50%);">
                            <img src="{{ asset('home/images/check.png') }}" alt="Approved Image" style="width: 20px; height: 20px;">
                            <br>
                            <span style="color: green;">approved</span>
                        </div>
                    @else
                        {{ $order->status }}
                    @endif
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection
