@extends('admin.layouts.template')

@section("page_title")

Pending orders

@endsection

@section('content')

<div class="container my-5">
    <div class="card p-4">
        <div class="card-title"><h2>Ordenes Pendientes</h2> </div>
            <div class="card-body">
               
                <table class="table">
                    <tr>
                        <th>User Id</th>
                        <th>ShippingInfo</th>
                        <th>product</th>
                        <th>quantity</th>
                        <th>total</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    @foreach ($pending_orders as $order)
                    <tr>
                        <td>{{$order->userid}}</td>
                        <td>
                            <ul>
                                <li>Numero de Telefono - {{$order->shipping_phoneNumber}}</li>
                                <li>Ciudad - {{$order->shipping_city}}</li>
                                <li>Codigo Postal - {{$order->shipping_postalcode}}</li>

                            </ul>
                        </td>

                        <td>{{$order->product_id}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->total_price}}</td>
                        <td><a href="" class="btn btn-success">Aprobar</a></td>
                
                    </tr>

                    @endforeach
                </table>

            

            </div>
        </div>
    </div>


@endsection
