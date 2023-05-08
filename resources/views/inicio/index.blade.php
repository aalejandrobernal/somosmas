@extends('layouts.plantilla')

@section('title', 'Somos Más')

@section('content1')
    {{-- *********** menu desplegable *********************** --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Tu SGSST
        </a>
        <ul class="dropdown-menu bg" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" style="" href="#induccion">
                    Programa De Formacion</a></li>
            <li><a class="dropdown-item" style="" href="#medicina">
                    Medicina Preventiva</a></li>
            <li><a class="dropdown-item" style="" href="#seguridadindustrial">
                    Seguridad Industrial</a></li>
            <li><a class="dropdown-item" style="" href="#seguridadvial">
                    Seguridad Vial</a></li>
            <li><a class="dropdown-item" style="" href="#avance">
                    Avance Del SGSST</a></li>
            <li><a class="dropdown-item" style="" href="{{ route('inicio.actividad') }}">
                    Actividad Del Mes</a></li>
            <li><a class="dropdown-item" style="" href="{{ route('inicio.portales') }}">
                    Portales SGSST</a></li>
        </ul>
    </li>
    {{-- *********** fin  menu desplegable *********************** --}}
@endsection

@section('content')
    <div id="app">
        <banner/>
    </div>
    
    {{-- Contenido Principal --}}
<main class="container d-flex justify-content-center align-items-center p-5 pr-10">
        {{-- <div class="row"> --}}
            <div class="col-12">
                <div id="birthday">
                    <birthday/>
                </div>
            </div>
        {{-- </div> --}}
</main>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/new.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/splider.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



@endsection
