@extends('admin.layouts.template')

@section('page_title')
Editar Imagen Producto - ReViste
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Páginas</span> Editar imagen Productos</h4>
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
          
         
        </div>
        <div class="card-body">
            <form action="{{ route('updateproductimg') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_name">Imagen Anterior</label>
                    <div class="col-sm-10">
                        <img src="{{asset($productinfo->product_img)}}" alt="">
                    </div>
                </div>

              <input type="hidden" value="{{$productinfo->id}}" name="id">

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_img">Subir Nueva Imagen Producto</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="product_img" name="product_img" />
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Actualizar Imagen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection