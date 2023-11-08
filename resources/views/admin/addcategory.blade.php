@extends('admin.layouts.template')

@section("page_title")

Agregar Categoria - ReViste

@endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y"> <h4 class="fw-bold py-3 mb-4"><span
    class="text-muted fw-light">Paginas</span> Añadir Categorias</h4>
  <div class="card mb-4"> <div class="card-header d-flex align-items-center justify-content-between"> <h5 class="mb-0">
    Añadir nueva Categoria</h5>
    <small class="text-muted float-end"> Añade Informacion</small>
    </div>
    <div class="card-body">

      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{  $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{route('storecategory')}}" method="POST">
        @csrf
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Nombre Categoria</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Pantalones" />
          </div>
        </div>

        <div class="row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Añadir Categoria</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

@endsection