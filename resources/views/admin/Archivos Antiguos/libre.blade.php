@extends('layouts.etapalibre')

@section('title', 'Portal Libre')

@section('content') 
<div style="background-color: rgb(201, 201, 201)">
    <main class="container d-flex p-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-8">
                        <h1 class="subtitulo" style="color: rgba(0, 0, 255, 0.816)">Sistema de gestión de seguridad
                            y salud en el trabajo.</h1>
                        <div style="">
                            <p class="nuevaa h3">
                                Desarrollamos nuestras actividades
                                pensando en el bienestar de las personas.</p>
                        </div>
                        <!-- <br>
                        <a href="#poldeseguridad" class="btn btn-outline-danger">Comencemos</a>
                        <br>
                        <br> -->
                    </div> 
                </div>
            </div>
        </div>
    </main>
</div>
    <section id="poldeseguridad" class="container d-flex justify-content">
        <div class="row">
            <div class="col-6 p-3">
                <p>
                    <br>
                    <br>
                    <hr>
                </p>
                <h4 class="subtitulo">Política de seguridad y salud en el trabajo</h4>
                <p>
                    "Desde la dirección de Liwa estamos comprometidos con la implementación, desarrollo, mejora continua y
                    cumplimiento legal del sistema de gestión de Seguridad y salud en el trabajo como en nuestra gestión
                    ambiental a través de la asignación de los diferentes recursos necesarios para tal fin; identificando y
                    gestionando los diferentes peligros y riesgos a los que se encuentran expuestos nuestros colaboradores
                    como los terceros al igual que los diferentes aspectos ambientales que se puedan generar durante el
                    desarrollo de nuestras diferentes actividades; vigilando no solo el cumplimiento legal de nuestros
                    procesos sino el de los terceros que hagan parte del desarrollo de nuestras actividades"
                </p>

                <h4 class="subtitulo">Objetivos del SGSST</h4>
                @foreach($objetivos as $objetivo)
                    <p><i class="bi bi-check-circle p-2"></i> {{ $objetivo->nombre }}</p> 
                @endforeach
            </div>
            
            <div class="col-6">
                <img class="logo_portal" src="{{ asset('images/logos/libre.png') }}" alt="">
            </div>

            <div class="col-6">
                <hr>
                <h4 class="subtitulo">Etapas 1 a la 4 del SGSST</h4>
                <p>
                @foreach($etapas as $index => $etapa)
                @if($etapa->grupo==1)
                    <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                    <br>
                @endif
                @endforeach
                </p>
            </div>
        </div>
    </section>

    <section id="etapa1">
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
                Fases del sistema de gestión: {{ $etapas[0]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>
    
    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 1 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>
            
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>    
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==3)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>    
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==4)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa2">
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
                Fases del sistema de gestión: {{ $etapas[1]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 2 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==3)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==4)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa3">
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
                Fases del sistema de gestión: {{ $etapas[2]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 3 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==2)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==3)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==4)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa4">
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
                Fases del sistema de gestión: {{ $etapas[3]->nombre }}
                <hr class="line-title-libre">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">Etapa: 4 <i class="bi bi-caret-right-square-fill"></i></p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==4 && $evidencia->grupo==1)
                <button class="buton_libre">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==4 && $evidencia->grupo==2)
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
            <h4>Etapas 1 a la 4 del SGSST</h4>
            <p class="et">
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==1)
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