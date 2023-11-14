@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
ORdenes pendientes
@if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif


<table class="table"> 

<tr>

<th>Nombre del Producto</th>
<th>Price</th>
</tr>
    @foreach($pending_orders as $order)
    <tr>
    <td>

    {{ $order->product->product_name }}
    </td>
   

    <td> {{$order->total_price}}</td>
</tr>
    @endforeach


</table>



@endsection


