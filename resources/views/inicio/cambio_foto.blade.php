@extends('layouts.plantilla')

@section('title', 'Mi Perfil')


@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')
<form action="{{ url('inicio/update-foto/')}}" class="" method="POST" enctype="multipart/form-data" id="formulario">
        @csrf
        @method('PUT')

        <div class="pt-3 col-4 offset-4">
            <h2 class="titulo">Cambio de Foto</h2>
            <hr class="line-title">
        </div>

        <div class="form-body2">

            <div class="single-input-item">
                <p class="caracteres">Recuerda: Solo se admiten formato .jpg .jpeg .png y peso igual o inferior a 150Kb</p>
            <label for="foto"></label>
                <input type="file" class="border border-gray-00 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white @error('foto') is-invalid @enderror" id="foto" name="foto">
                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror               
            </div>

            <div>
                <div name="foto1" id="" class="@error('foto1') is-invalid @enderror"></div>
                @error('foto1')
                <span class="invalid-feedback" id="cambio" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div name="foto2" id="" class="@error('foto2') is-invalid @enderror"></div>
                @error('foto2')
                <span class="invalid-feedback" id="" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror                
            </div>

            <button type="submit" class="text-white p-2 my-3" name="guardar">Actualizar</button>
            <a class="atras" href="{{route('inicio.editar_perfil')}}">Atrás</a>
        </div>
    </form>

    


@endsection
