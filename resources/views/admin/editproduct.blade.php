@extends('admin.layouts.template')

@section('page_title')
Editar Producto - ReViste
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Páginas</span> Añadir Productos</h4>
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Editar Producto</h5>
        </div>
        <div class="card-body">
            <form action="{{route('updateproduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$productinfo->id}}" name="id">

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_name">Nombre Producto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="product_name" name="product_name" value="{{$productinfo->product_name}}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="price">Precio Producto</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" name="price" value="{{$productinfo->price}}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="quantity">Cantidad Producto</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{$productinfo->quantity}}" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_short_des">Descripción corta Producto</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="product_short_des" id="product_short_des" cols="2" rows="2">{{$productinfo->product_short_des}}</textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_long_des">Descripción Larga Producto</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="product_long_des" id="product_long_des" cols="30" rows="10">{{$productinfo->product_long_des}}</textarea>
                    </div>
                </div>

               

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Actualizar Producto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
