@extends('layouts.plantilla_portales')

@section('title')

@section('contenido')

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top p-3">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('admin.sunco') }}">Suncolombia</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" style="color: white" href="{{ route('admin.sunco') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Etapas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('admin.etapa5sunco') }}">Etapas 5 a la 9</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin.etapa10sunco') }}">Etapas 10 a la 14</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin.etapa15sunco') }}">Etapas 15 a la 19</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('admin.etapa20sunco') }}">Etapas 20 a la 22</a>
                            </li>
                        </ul>
                    </li>
                   
@endsection

</body> 