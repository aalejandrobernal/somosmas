@extends('layouts.etapas')

@section('title', 'Portal Liwa')

@section('content')
    <div id="app">
        <etapa1_4></etapa1_4>
    </div>
    <script src="{{ asset('js/app.js') }}"> </script>
    

                

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
                <hr class="line-title">
                Fases del sistema de gestión: {{ $etapas[0]->nombre }}
                <hr class="line-title">
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
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>    
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==2)
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==3)
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>    
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==1 && $evidencia->grupo==4)
                <button class="buton">
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
                <hr class="line-title">
                Fases del sistema de gestión: {{ $etapas[1]->nombre }}
                <hr class="line-title">
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
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==2)
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==3)
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==2 && $evidencia->grupo==4)
                <button class="buton">
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
                <hr class="line-title">
                Fases del sistema de gestión: {{ $etapas[2]->nombre }}
                <hr class="line-title">
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
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==2)
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==3)
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==3 && $evidencia->grupo==4)
                <button class="buton">
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
                <hr class="line-title">
                Fases del sistema de gestión: {{ $etapas[3]->nombre }}
                <hr class="line-title">
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
                <button class="buton">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==4 && $evidencia->grupo==2)
                <button class="buton">
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
            <h4 class="subtitulo">Etapas 1 a la 4 del SGSST</h4>
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
            <a href="{{ route('admin.index') }}" class="btn"><img src="{{ asset('images/iconoliwa.png') }}" alt="" width="120" height="100">Liwa SGSST</a>
        </div>
    </section>
    
@endsection