@extends('admin.layouts.template')

@section("page_title")

Agregar Producto - ReViste

@endsection

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paginas</span> Añadir Productos</h4>
  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Añadir nuevo Producto</h5>
      <small class="text-muted float-end"> Añade Informacion</small>
    </div>
    <div class="card-body">
      <form action="" method="POST">
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre Producto</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="subcategory_name" name="category_name"
              placeholder="Pantalones" />
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Precio Producto</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="subcategory_name" name="category_name"
              placeholder="100.000" />
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Cantidad Producto</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="subcategory_name" name="category_name" placeholder="100" />
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Descripcion corta Producto</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="" id="" cols="2" rows="2"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Descripcion Larga Producto</label>
          <div class="col-sm-10">
            <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
          </div>
        </div>

        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Seleccionar Categoria</label>
          <div class="col-sm-10">
            <select class="form-select" id="category" name="category" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-default-name">Seleccionar Sub-Categoria</label>
            <div class="col-sm-10">
              <select class="form-select" id="category" name="category" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>

            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="basic-default-name">Subir Imagen Producto</label>
              <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" />
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
</div>

@endsection