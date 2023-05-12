@extends('layouts.plantilla')

@section('title', 'Somos Más')

{{-- @section('content1')
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
@endsection --}}
 

@section('content')
        
        <router-view></router-view>
@endsection