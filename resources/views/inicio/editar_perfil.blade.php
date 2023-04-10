@extends('layouts.plantilla')

@section('title', 'Mi Perfil')


@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')
<div class="container d-flex justify-content-center">
    <div class="">
        @if (auth()->user()->foto)
        <img src="../images/fotos/{{auth()->user()->foto}}" alt="" class="usuariofoto">
        @else
        <img src="{{asset('images/fotonone.jpeg')}}" class="usuariofoto" alt="">
        @endif

        <a class="cambiarfoto" href="{{route('inicio.cambio_foto')}}">Cambiar Foto</a>

    </div>

    <div class="form-body">
        <div class="col-6 offset-3">
            <h2 class="titulo">Información Personal</h2>
            <hr class="line-title">
        </div>
            <br>
            <div class="content">
                <div class="row">
                    <div class="col">
                        <form action="{{ route('inicio.cambiocontrasena')}}" class="form" method="POST">
                        @csrf
                        <div class="box1">
                            <div class="single-input-item">
                            <label class="label" for="nombre">Nombre</label>
                            <input disabled type="text" value="{{ auth()->user()->nombre }}" id="nombre" name="nombre" class="input border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1">
                            </div> 

                            <div class="single-input-item">
                            <label class="label" for="documento">Documento</label>
                            <input disabled type="text" value="{{ auth()->user()->documento }}" id="documento" name="documento" class="input border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1">
                            </div>
                     
                            <div class="single-input-item">
                            <label class="label" for="fecha_nacimiento" class="required">Fecha de Nacimiento</label>
                            <input disabled type="text" value="{{ auth()->user()->fecha_nacimiento }}" class="input border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1" id="fecha_nacimiento" name="fecha_nacimiento">                
                            </div>
                            
                            <div class="single-input-item">
                            <label class="label" for="empresa">Empresa</label>
                                <input disabled type="text" value="{{ $empresas[0]->nombre }}" class="input border border-gray-00 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1" name="empresa">                
                            </div>

                            <div class="single-input-item">
                            <label class="label" for="cargo">Cargo</label>
                                <input disabled type="text" value="{{ auth()->user()->cargo }}" class="input border border-gray-00 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1" name="cargo">                
                            </div>

                            <div class="single-input-item">
                            <label class="label" for="fecha_ingreso">Fecha de Ingreso</label>
                                <input disabled type="text" value="{{ auth()->user()->fecha_ingreso }}" class="input border border-gray-00 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1" name="fecha_ingreso">                
                            </div>
                            <p class="caracteres">*Si deseas actualizar algún dato personal por favor contacta al administrador.* </p>
                        </div>

                        <div class="box2">
                            <p class="caracteres2">*Si deseas actualizar tu contraseña diligencia la siguiente información.* </p>

                            <div class="single-input-item">
                            <label class="label" for="password_actual" class="required">Contraseña Actual</label>
                            <span class="icon-eye1"><i class="fa-solid fa-eye-slash"></i></span>
                            <input type="password" id="_passwordactual" maxlength="15" name="password_actual" class="input border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1 @error('password_actual') is-invalid @enderror" required>
                            </div>
                
                            <div class="single-input-item">
                            <label class="label" for="new_password" class="required">Nueva Contraseña<p class="caracteres1">(Min 8 caracteres - Max 15 caracteres - sin espacios)</p></label>
                            <span class="icon-eye2"><i class="fa-solid fa-eye-slash"></i></span>
                            <input type="password" maxlength="15" minlength="8" class="input border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1 @error('password') is-invalid @enderror" id="_password" name="password" required>                
                            </div>

                            <div class="single-input-item">
                            <label class="label" for="confirm_password" class="required">Confirma tu Nueva Contraseña</label>
                                <span class="icon-eye3"><i class="fa-solid fa-eye-slash"></i></span>
                                <input type="password" maxlength="15" minlength="8" class="input border border-gray-00 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-1 my-1 @error('confirm_password') is-invalid @enderror" id="_confirm_password" name="confirm_password" required>                
                            </div>

                            <div>
                                <div name="cambio" id="cambio1" class="@error('cambio') is-invalid @enderror"></div>
                                @error('cambio')
                                <span class="invalid-feedback" id="cambio" role="alert">
                                    <strong class="alert-pass">{{ $message }}</strong>
                                </span>
                                @enderror
                                <div name="password_actual" id="" class="@error('password_actual') is-invalid @enderror"></div>
                                @error('password_actual')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert-pass">{{ $message }}</strong>
                                </span>
                                @enderror
                                <div name="password" id="" class="@error('password') is-invalid @enderror"></div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert-pass">{{ $message }}</strong>
                                </span>
                                @enderror
                                <div name="confirm_password" id="" class="@error('confirm_password') is-invalid @enderror"></div>
                                @error('confirm_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong class="alert-pass">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="text-white p-2 my-3">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<script>
        $("#_passwordactual").keyup(function(){
            let string = $("#_passwordactual").val();
            $("#_passwordactual").val(string.replace(/ /g, ""))
        })
        $("#_password").keyup(function(){
            let string = $("#_password").val();
            $("#_password").val(string.replace(/ /g, ""))
        })
        $("#_confirm_password").keyup(function(){
            let string = $("#_confirm_password").val();
            $("#_confirm_password").val(string.replace(/ /g, ""))
        })
    </script>
    <script type="text/javascript" src="{{ asset('js/password.js') }}"></script>

@endsection
