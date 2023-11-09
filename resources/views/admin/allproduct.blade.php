@extends('admin.layouts.template')

@section('page_title')
    Todos los productos - ReViste
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paginas/</span> Todas los Productos</h4>
        @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        <div class="card">

            <h5 class="card-header">Todos los productos Disponibles</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Products</th>
                            <th>Imagen</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)



                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->product_name}}</td>
                            <td> 
                                <img style="width: 100px;" src="{{asset($product->product_img)}}" alt="">
                                <br>
                                <a href="{{route('editproductimg',$product->id)}}" class="btn btn-primary">Actualizar Imagen</a>

                            </td>
                            <td>{{$product->price}}</td>
                            <td>

                                <a href="{{route('editproduct', $product->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deleteproduct', $product->id)}}" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                    
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
