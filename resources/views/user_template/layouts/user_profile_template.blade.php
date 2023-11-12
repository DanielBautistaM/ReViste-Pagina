
@extends('user_template.layouts.template')
@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-log-4">
            <div class="box_main">
                <ul>

                <li> <a href="{{route('userprofile')}}">Dashboard</a></li>
                <li><a href="{{route('pendingorders')}}">Ordenes Pendientes</a></li>
                <li> <a href="{{route('history')}}">Historial</a></li>
                <li> <a href="">Cerrar Sesion</a></li>

                </ul>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="box_main">
                @yield('profilecontent')

            </div>
        </div>
    </div>
</div>
@endsection