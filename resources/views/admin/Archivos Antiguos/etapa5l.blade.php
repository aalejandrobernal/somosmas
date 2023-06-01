@extends('layouts.etapalibre')

@section('title', 'Portal Libre')

@section('content')

<section id="" class="container d-flex justify-content pt-5"> 
        <div class="col-6">
            <h4 class="subtitulo">Etapas 5 a la 9 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==2)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="etapa5">
        <div class="row">
            <div class="col-12">
                <p>
                    <br> 
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </section>

    <div class="container titulo">
        <div class="row">
            <div class="col-12 fs-2">
                <hr class="line-title-libre">
                Fases del sistema de gestión: {{ $etapas[4]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 5 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==5 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==5 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==5 && $evidencia->grupo==3)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa6">
        <div class="row">
            <div class="col-12">
                <p>
                    <br> 
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </section>

    <div class="container titulo">
        <div class="row">
            <div class="col-12 fs-2">
                <hr class="line-title-libre">
                Fases del sistema de gestión: {{ $etapas[5]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 6 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==6 && $evidencia->grupo==1)
                <button class="buton2_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa7">
        <div class="row">
            <div class="col-12">
                <p>
                    <br> 
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </section>

    <div class="container titulo">
        <div class="row">
            <div class="col-12 fs-2">
                <hr class="line-title-libre">
                Conservación de la documentación: {{ $etapas[6]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 7 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==7 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==7 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==7 && $evidencia->grupo==3)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa8">
        <div class="row">
            <div class="col-12">
                <p>
                    <br> 
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </section>

    <div class="container titulo">
        <div class="row">
            <div class="col-12 fs-2">
                <hr class="line-title-libre">
                Fases del sistema de gestión: {{ $etapas[7]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 8 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==3)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==8 && $evidencia->grupo==4)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div> 
        </div>
    </section>

    <section id="etapa9">
        <div class="row">
            <div class="col-12">
                <p>
                    <br> 
                    <br>
                    <br>
                </p>
            </div>
        </div>
    </section>

    <div class="container titulo">
        <div class="row">
            <div class="col-12 fs-2">
                <hr class="line-title-libre">
                Fases del sistema de gestión: {{ $etapas[8]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 9 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==9 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==9 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
        <hr>
            <h4 class="subtitulo">Etapas 5 a la 9 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==2)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
            <a href="{{route('admin.libre')}}" class="btn"><img src="{{asset('images/logos/libre.png')}}" alt="" width="120" height="100">Libre SGSST</a>
        </div>
    </section>

@endsection
