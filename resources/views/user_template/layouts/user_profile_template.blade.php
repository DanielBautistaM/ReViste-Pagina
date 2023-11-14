
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
                <li>
                <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Cerrar Sesión
                        </a>
                    </li>
                </ul>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
        <div class="col-lg-8">
        
            <div class="box_main">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('profilecontent')
            </div>
        </div>
    </div>
</div>
@endsection