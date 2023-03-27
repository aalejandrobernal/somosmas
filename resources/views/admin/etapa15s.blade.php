@extends('layouts.etapasunco')

@section('title', 'Portal Suncolombia')

@section('content')

<section id="" class="container d-flex justify-content pt-5">
        <div class="col-6">
            <h4 class="subtitulo">Etapas 15 a la 19 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==4)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="etapa15">
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
                <hr class="line-title-sunco">
                Fases del sistema de gestión: {{ $etapas[14]->nombre }}
                <hr class="line-title-sunco">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 15 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==1)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==2)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==3)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==15 && $evidencia->grupo==4)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa16">
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
                <hr class="line-title-sunco">
                Fases del sistema de gestión: {{ $etapas[15]->nombre }}
                <hr class="line-title-sunco">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 16 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==1)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==2)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==3)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==16 && $evidencia->grupo==4)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa17">
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
                <hr class="line-title-sunco">
                Fases del sistema de gestión: {{ $etapas[16]->nombre }}
                <hr class="line-title-sunco">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 17 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==17 && $evidencia->grupo==1)
                <button class="buton2_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==17 && $evidencia->grupo==2)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==17 && $evidencia->grupo==3)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa18">
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
                <hr class="line-title-sunco">
                Fases del sistema de gestión: {{ $etapas[17]->nombre }}
                <hr class="line-title-sunco">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-18">
                <p class="h6">
                    Etapa: 18 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==1)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==2)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==3)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==18 && $evidencia->grupo==4)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section id="etapa19">
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
                <hr class="line-title-sunco">
                Fases del sistema de gestión: {{ $etapas[18]->nombre }}
                <hr class="line-title-sunco">
            </div>
        </div>
    </div>

    <section class="container d-flex justify-content pt-4">
        <div class="row">
            <div class="col-12">
                <p class="h6">
                    Etapa: 19 <i class="bi bi-caret-right-square-fill"></i>
                </p>
                <br>
                <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                <br>
            </div>
            
            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==1)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==2)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==3)
                <button class="buton_sunco">
                    <a id="evidencia" href="{{ $evidencia->adjunto }}" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ $evidencia->nombre }}</span></a>
                </button>
                <p></p>
                @endif
                @endforeach
            </div>

            <div class="col-3">
                @foreach($evidencias as $evidencia)
                @if($evidencia->etapa_id==19 && $evidencia->grupo==4)
                <button class="buton_sunco">
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
            <h4 class="subtitulo">Etapas 15 a la 19 del SGSST</h4>
            <p>
            @foreach($etapas as $index => $etapa)
            @if($etapa->grupo==4)
                <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                <br> 
            @endif
            @endforeach
            </p>
        </div>
    </section>

    <section id="" class="container d-flex justify-content">
        <div class="col-6">
            <a href="{{route('admin.sunco')}}" class="btn"><img src="{{asset('images/logos/sunco.png')}}" alt="" width="120" height="100">SuncoEnergy SGSST</a>
        </div>
    </section>

@endsection
