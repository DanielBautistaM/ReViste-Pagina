


@extends('user_template.layouts.template')
@section('main-content')
<h2>Añadir al carrro Pagina</h2>
@if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

<div class="row">
    <div class="col-12">
        <div class="box_main">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Imagen del Producto</th>
                        <th>Nombre del Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Accion</th>
                    </tr>
                    @foreach($cart_items as $item)
                        <tr>
                            @php
                                $product_name= App\Models\Product::where('id', $item->product_id)
                                ->value('product_name');
                                $img= App\Models\Product::where('id', $item->product_id)
                                ->value('product_img');
                            @endphp
                            <td><img src="{{ asset($img) }}" style="height: 50px"></td>
                            <td>{{$product_name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>
                            <td><a href="" class="btn btn-warning">Eliminar</a></td>

                        </tr>


                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection()
