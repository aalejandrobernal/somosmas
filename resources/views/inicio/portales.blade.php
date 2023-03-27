@extends('layouts.plantilla')

@section('title', 'Portales')

@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')

    <section id="portales" class="p-2">

        <main class="container d-flex justify-content-center align-items-center p-4 pr-5 pl-5">
            <div class="row posicion">
                <div class="col-4">
                    <h2 class="titulo">Portales SGSST</h2>
                    <hr class="line-title">
                    <br>
                </div>

                <div class="col-12 texto">
                    <p>
                        Ingresa a tu portal!
                    </p>
                </div>

                    <div class="row pl-2 posicion">

                        @foreach ($portal as $portales)

                            <div class="col-4 pl-4 pb-4 posicion">
                                <article class="card h-100">
                                    <div class="card-body">
                                        <div class="d-flex mb-3 posicion">
                                            <a href="{{ route($portales->direccionamiento)}}">

                                                @if ($portales->imagen)

                                                <img src="{{ asset('images/logos/'.$portales->imagen) }}" alt="">

                                                @else

                                                <img src="{{asset('images/logos/Imagen_no_disponible.png')}}"  alt="">

                                                @endif

                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        @endforeach

                    </div>

            </div>
        </main>
    </section>

    @if (isset($_GET['somosmas']))
        <script type="text/javascript" src="{{ asset('js/alerta.js') }}"></script>
    @endif

@endsection
