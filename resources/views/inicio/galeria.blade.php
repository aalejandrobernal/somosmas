@extends('layouts.plantilla')

@section('title', 'Galería de fotos')

@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')
    <div class="row">
        <div class="col-4 offset-4 p-4">
            <h2 class="titulo">Galería de fotos</h2>
            <hr class="line-title">
        </div>
    </div>
    <main class="container d-flex justify-content-center align-items-center p-5 pr-10">
        @php $cant = 0; @endphp
        <div class="carrusel-itemss">
            @foreach ($galeria as $galerias)
                @php $cant = $cant+1; @endphp
                <?php $imgs = explode(',', $galerias->imagenes); ?>
                <div class="carrusel-itemm">
                    <div class="card">
                        <div class="card_img">
                            <img src="../images/galeria1/{{ $foto[$cant - 1] }}"alt="">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ $galerias->titulo }}</h5>
                            <br>
                            <button type="button" class="ctn"data-toggle="modal"data-target="#myModal<?php echo $cant; ?>">
                                Ver fotos
                            </button>
                            <div class="vermaa" style="padding-top: 10%; padding-left:0%">
                                Actualización: {{ $galerias->updated_at->format('d/m/Y') }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade bd-example-modal-xl" id="myModal<?php echo $cant; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content justify-content-center" style="background-color:rgba(0,0,0,0);">
                            <!--div class="modal-header">
                                <header class="h2">
                                    {{ $galerias->titulo }}
                                </header>
                                <button type="button" class="close" data-dismiss="modal">
                                    &times;</button>
                            </div-->
                            <div style=" display:flex; justify-content:
                                center; align-items: center;
                                padding:20px; height: 800px;">
                                <div id="carouselExampleControls{{ $galerias->id }}"
                                    class="carousel slide col-6 noticia" data-ride="carousel">
                                    <div class="carousel-inner">
                                            <?php $porciones = explode(',', $galerias->imagenes); ?>
                                            @for ($i = 0; $i < count($porciones); $i++)
                                                <div class="{{ $i == 0 ? 'active' : '' }}  carousel-item">
                                                    <img class="d-block w-100"
                                                    src="../images/galeria1//{{ $imgs[$i] }}"
                                                    class="pl-4" style="max-height: 750px" alt="">
                                                </div>
                                            @endfor
                                            <a class="carousel-control-prev"
                                            href="#carouselExampleControls{{ $galerias->id }}"
                                                role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next"
                                                href="#carouselExampleControls{{ $galerias->id }}"
                                                 role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </main>




    <script src="{{ asset('js/swiper_galeria.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

@endsection
