@extends('admin.layouts.template')

@section('page_title')
Agregar Producto - ReViste
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Páginas</span> Añadir Productos</h4>
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Añadir nuevo Producto</h5>
            <small class="text-muted float-end">Añade Información</small>
        </div>
        <div class="card-body">
            <form action="{{ route('storeproduct') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_name">Nombre Producto</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Pantalones" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="price">Precio Producto</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="price" name="price" placeholder="100.000" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="quantity">Cantidad Producto</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="100" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_short_des">Descripción corta Producto</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="product_short_des" id="product_short_des" cols="2" rows="2"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_long_des">Descripción Larga Producto</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="product_long_des" id="product_long_des" cols="30" rows="10"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_category_id">Seleccionar Categoría</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="product_category_id" name="product_category_id" aria-label="Default select example">
                            <option selected>Selecciona La Categoría Del Producto</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_subcategory_id">Seleccionar Sub-Categoría</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="product_subcategory_id" name="product_subcategory_id" aria-label="Default select example">
                            <option selected>Selecciona La Sub-Categoría Del Producto</option>
                            @foreach($subcategories as $subcategory)
                            <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="product_img">Subir Imagen Producto</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="product_img" name="product_img" />
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Añadir Producto</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
