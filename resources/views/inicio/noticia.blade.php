@extends('layouts.plantilla')

@section('title', 'Noticias')

@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link  text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')

    <div class="row">
        <div class="col-2 offset-5 p-4">
            <h2 class="titulo">Noticias</h2>
            <hr class="line-title">
        </div>
    </div>
    <div class="container-3">
        @php $cant = 0; @endphp
        @php $grid = 0; @endphp
        @foreach ($not as $noticias)
            @php $cant = $cant+1; @endphp



            <?php $imgs = explode(',', $noticias->imagenes);
            
            $var = count($imgs); ?>

            <div class="row pb-4 card-3">
                <div class="col-6 pb-1" style="padding-right: 1px;">
                    <h1 class="subtitulo mb-0" >{{ $noticias->titulo }}</h1>
                    <div class="vermaa">
                    
                    Actualización : {{ $noticias->updated_at->format('d/m/Y') }}
                    
                    </div>
                    <br>
                    <div>
                        <p class="nuevaa">
                            {!! Str::limit($noticias->contenido, 800, '...') !!}
                        </p>
                    </div>
                    <div class="row">
                        @if (strlen($noticias->contenido) > 800)
                            <div class="col-3">
                                <button type="button" class="ctn"
                                    data-toggle="modal"data-target="#myModal<?php echo $cant; ?>">Ver más</button>
                                <div class="modal fade bd-example-modal-lg" id="myModal<?php echo $cant; ?>" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            {{-- contenido --}}
                                            {{-- TITULO MODAL --}}
                                            <div class="modal-header">
                                                <header style="" class="subtitulo h2">
                                                    {{ $noticias->titulo }}</header>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            {{-- ************* --}}
                                            <div class="modal-body">

                                                <div class="col-auto">
                                                    <div class="row"> 
                                                        {{-- CUERPO MODAL --}}
                                                        <div class="col-md-8">
                                                            <div>
                                                                <p class="nuevaa" style="background-color: #FAFAFA">
                                                                    {!! $noticias->contenido !!}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        {{-- ************ --}}
                                                        {{-- IMAGEN MODAL --}}
                                                        <div class="col">
                                                            @if ($var > 1)
                                                                <section class="splide"
                                                                    data-splide='{
                                                                            "type":"loop",
                                                                            "perPage":3,
                                                                            "arrows":true,
                                                                            "autoplay":true,
                                                                            "pagination":false,
                                                                            "height":"40rem",
                                                                            "direction":"ttb"}'>
                                                                    <div class="splide__track">
                                                                        <ul class="splide__list">
                                                                            @foreach ($imgs as $img)
                                                                                <li class="splide__slide">
                                                                                    <img src="../storage/images/noticias/<?php echo $img; ?>"
                                                                                        alt="">
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </section>
                                                            @else
                                                                <div class="dos">
                                                                    <img style="max-width: 100%;
                                                                        max-height: 100%;"
                                                                        src="../storage/images/noticias/{{ $noticias->imagenes }}"
                                                                        alt="">
                                                                </div>
                                                            @endif
                                                        </div>
                                                        {{-- ************ --}}
                                                    </div>
                                                </div>


                                            </div>
                                            {{-- /contenido --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($noticias->adjunto)
                            <div class="col-3">
                                <div class="contenedor-textos2">
                                    <a class="cta" href="{{ $noticias->adjunto }}"target="_blank">Ver adjunto</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div id="carouselExampleControls{{ $noticias->id }}" style="height: 500px" class="carousel slide col-6 noticia" data-ride="carousel">
                    <div class="carousel-inner">
                        @if ($var > 1)
                            <?php $porciones = explode(',', $noticias->imagenes); ?>
                            @for ($i = 0; $i < count($porciones); $i++)
                                <div class="{{ $i == 0 ? 'active' : '' }}  carousel-item">
                                    <img class="d-block w-100" src="../storage/images/noticias/{{ $porciones[$i] }}" class="pl-4">
                                </div>
                            @endfor
                            <a class="carousel-control-prev" href="#carouselExampleControls{{ $noticias->id }}" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls{{ $noticias->id }}" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        @else
                            <div class="carousel-item active">
                                <img class="img_noticia"src="../storage/images/noticias/{{ $noticias->imagenes }}"
                                    alt=""class="">
                            </div>
                        @endif
                    </div>
                </div>
                <span>
                    <hr>
                </span>

            </div>
        @endforeach



    </div>
    <br>
    <div class="row">
        <div class="col-auto mx-auto nadaa">

            {{-- {{ $not->links() }} --}}
        </div>
    </div>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/new.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/splider.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


@endsection
