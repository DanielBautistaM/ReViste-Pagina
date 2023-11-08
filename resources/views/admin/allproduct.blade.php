@extends('admin.layouts.template')

@section('page_title')
    Todos los productos - ReViste
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Paginas/</span> Todas los Productos</h4>
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
                        <tr>
                            <td>1</td>
                            <td>jeans</td>
                            <td></td>
                            <td>100</td>
                            <td>

                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
