@extends('user_template.layouts.template')
@section('main-content')
<h2>Dame tu direccion de envio</h2>
<div class="row">
    <div class="col-12">
        <div class="box_main">
            <form action="{{route('addshippingaddress')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="phone_numer">Numero de Telefono: </label>
                    <br>
                    <input type="text" class="phone_numer" name="phone_numer">
                </div>    

                <div class="form-group">
                    <label for="city_name">Ciudad/Municipio: </label>
                    <br>
                    <input type="text" class="city_name" name="city_name">
                </div>   

                <div class="form-group">
                    <label for="postal_code">Codigo Postal: </label>
                    <br>
                    <input type="text" class="postal_code" name="postal_code">
                </div>   

                <input type="submit" value="Next" class="btn btn-primary"> 
            </form>
        </div>   
    </div>
</div>                 
@endsection()