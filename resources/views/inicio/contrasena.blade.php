@extends('layouts.plantilla')

@section('title', 'Cambio de Contraseña')


@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-">
    <form action="{{ route('inicio.cambiocontrasena')}}" class="needs-validation" method="POST" novalidate>
        @csrf
        <div class="row">
            <h2 class="titulo2">Cambio de Contraseña</h2>
        </div>
        <div class="form-body">
            <div class="single-input-item">
            <label for="password_actual" class="required">Contraseña Actual</label>
                <span class="icon-eye1"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" id="_passwordactual" maxlength="15" name="password_actual" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white @error('password_actual') is-invalid @enderror" required>
                
            </div>
    
            <div class="single-input-item">
            <label for="new_password" class="required">Nueva Contraseña<p class="caracteres">(Min 8 caracteres - Max 15 caracteres - sin espacios)</p></label>
                <span class="icon-eye2"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" maxlength="15" minlength="8" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white @error('password') is-invalid @enderror" id="_password" name="password" required>                
            </div>

            <div class="single-input-item">
            <label for="confirm_password" class="required">Confirma tu Nueva Contraseña</label>
                <span class="icon-eye3"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" maxlength="15" minlength="8" class="border border-gray-00 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white @error('confirm_password') is-invalid @enderror" id="_confirm_password" name="confirm_password" required>                
            </div>

            <div>
                <div name="cambio" id="cambio1" class="@error('cambio') is-invalid @enderror"></div>
                @error('cambio')
                <span class="invalid-feedback" id="cambio" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div name="password_actual" id="" class="@error('password_actual') is-invalid @enderror"></div>
                @error('password_actual')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div name="password" id="" class="@error('password') is-invalid @enderror"></div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <div name="confirm_password" id="" class="@error('confirm_password') is-invalid @enderror"></div>
                @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button type="submit" class="text-white p-2 my-3">Guardar</button>
        </div>
    </form>
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
