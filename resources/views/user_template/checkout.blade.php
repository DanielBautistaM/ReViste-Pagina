@extends('user_template.layouts.template')
@section('main-content')
<h2>Checkout Pagina</h2>

<div class="row">
        <div class="col-8">
         <h3>EL producto sera enviado a -</h3>
         <p>Ciudad - {{$shipping_address->city_name}}</p>
         <p>Codigo Postal - {{$shipping_address->postal_code}}</p>
         <p>Numero de Telefono - {{$shipping_address->phone_numer}}</p>
          
        </div>

        <div class="col-4">
            <div class="box_main">
          <h2>Tus productos finales son</h2>  
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Nombre del Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                  
                    </tr>
                    @php
                        $total = 0;

                    @endphp 

                    @foreach($cart_items as $item)
                        <tr>
                            @php
                                $product_name= App\Models\Product::where('id', $item->product_id)->value('product_name');
                               
                            @endphp
                            <td>{{$product_name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>

                        </tr>

                        @php
                            $total = $total + $item->price;
                        @endphp    
                    
                    @endforeach

                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td>{{$total}}</td>

                        
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
  
    <form action="" method="POST">
        @csrf
        <input type="submit" value="Cancelar Orden" class="btn btn-danger mr-3">
        
    </form>
    <form action="{{route('placeorder')}}" method="POST">
        @csrf
        <input type="submit" value="Ordenar Productos" class="btn btn-primary mr-3">
        
    </form>
    </div>
@endsection()