<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="user" content="{{ Auth::user() }}">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.icons-1.8.css')}}">
    <link rel="stylesheet" href="{{ asset('css/somosmas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splider-js.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper_noti.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min-5.2.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min-4.6.css')}}">
    <link rel="stylesheet" href="{{ asset('css/splide-skyblue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-9.0.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.icons-1.10.css')}}">
    <link rel="stylesheet" href="{{ asset('css/tooltip.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}"> --}}
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-dark sticky-top p-3"> 
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio.index') }}">
                <strong style="color: #FE3EB2">Somos</strong>Más</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tu SGSST</a>
                        <ul class="dropdown-menu bg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" style="" href="/inicio#formaciones">
                                    Programas De Formación</a></li>
                            <li><a class="dropdown-item" style="" href="/inicio#medicina">
                                    Medicina Preventiva</a></li>
                            <li><a class="dropdown-item" style="" href="/inicio#seguridadindustrial">
                                    Seguridad Industrial</a></li>
                            <li><a class="dropdown-item" style="" href="/inicio#seguridadvial">
                                    Seguridad Vial</a></li>
                            <li><a class="dropdown-item" style="" href="/inicio#avance">
                                    Avance Del SGSST</a></li>
                            <li><a class="dropdown-item" style="" href="{{ route('inicio.actividad') }}">
                                    Actividad Del Mes</a></li>
                            <li><a class="dropdown-item" style="" href="{{ route('inicio.portales') }}">
                                    Portales SGSST</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.cultura') }}">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.noticia') }}">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('inicio.galeria') }}">Galería de fotos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#redapoyo">Red De Apoyo</a>
                    </li>
                </ul>


                <div class="pr-2">

                    <a class="text-white" style="text-decoration: none">Bienvenido: <b>
                            {{ auth()->user()->nombre }}</b></a>

                </div>

                <div class="pr-0">
                    @if (auth()->user()->foto)
                    <img src="../images/fotos/{{auth()->user()->foto}}" alt="" class="usuario">
                    @else
                    <img src="{{asset('images/fotonone.jpeg')}}" class="usuario" alt="">
                    @endif
                </div>

                <li class="nav-link dropdown p-0">
                    <a id="menu_perfil" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                        <ul class="dropdown-menu bg mt-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item mr-3" style="" href="{{ route('inicio.editar_perfil') }}">
                            Mi Perfil</a></li>
                            @can('admin')
                            <li><a class="dropdown-item mr-3" style="" href="{{ route('admin') }}">
                                Administrador</a></li>
                            @endcan
                            <li><a class="dropdown-item" id="sesion" style="" href="{{ route('login.destroy') }}">
                            Cerrar Sesión</a></li>
                        </ul>
                </li>

            </div>

            <a href="https://api.whatsapp.com/send?phone=57{{ env('NUMBER_WHASTAPP') }}" class="bt-wsp"
                target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>

        </div>
    </nav> --}}
    <div id="app">
        <navbar></navbar>
        @yield('content')
        <footer-component></footer-component>
    </div>
    <script type="text/javascript">
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}",
            jsPermissions: {!! auth()->check()?auth()->user()->jsPermissions():null !!}
        }
    </script>
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/swiper.bundle.min.js') }}"></script>
    <script src="{{ asset('js/splide.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-5.1.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"> </script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/iconify.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script src="https://unpkg.com/vue"></script>
    
</body>


 



