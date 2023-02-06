@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-">

    <h1 class="text-3xl text-center font-bold text-pink-600">Somos Más</h1>

    <form action="" class="mt-4" method="POST">

    @csrf
    <div class="">
        <div class="single-input-item">
            <label for="cedula" >Usuario</label>
            <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Número de cédula" id="cedula" name="documento">
        </div>
        <br>
        <div class="single-input-item">
            <label for="cedula" >Contraseña</label>
            <span class="icon-eye1"><i class="fa-solid fa-eye-slash"></i></span>
            <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Ingresa tu contraseña" id="password" name="password">
        </div>
    
    @error('message')
    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
        * {{ $message }}</p>
    @enderror

    <button type="submit" class="rounded-md bg-pink-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-pink-600">Ingresar</button>

    </form>
    
</div>
<script>
    $("#password").keyup(function(){
            let string = $("#password").val();
            $("#password").val(string.replace(/ /g, ""))
        })
</script>

<script type="text/javascript" src="{{ asset('js/password.js') }}"></script>

@endsection
