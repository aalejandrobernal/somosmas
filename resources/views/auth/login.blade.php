<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splider-js.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper_noti.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-9.0.bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.icons-1.10.css') }}">
    
    <script src="{{ asset('js/iconify.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/tailwinds.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"> </script>
</head>

<body class="bg-login">
    <div class="row">
         <div class="col-7 container-fluid">
            <img class="img_logo" src="{{ asset('images/logos/liwa2.png') }}" alt="">    
        </div>
        <div class="col-3">
            <p class="navbar-logo"><strong style="color: #FE3EB2">Somos</strong>Más</p>
        </div>
    </div>

    <div class="contenedor-formulario">
        <div class="img-formu">
            <img class="imagen-formulario" src="{{ asset('images/somosmas/working.jpg') }}" alt="">
        </div> 
        <form action="" class="formulario" method="POST">
        @csrf
            <div class="texto-formulario">
                <h1>Bienvenido(a)</h1>            
                <hr class="line-title">
            </div>
            <br>
            <div class="single-input-item">
                <label class="label-login" for="cedula" >Usuario</label>
                <input type="text" class="input-login border border-gray-200 rounded-md w-full text-lg p-2 my-2 focus:bg-white" placeholder="Número de cédula" id="cedula" name="documento">
            </div>
            <br>
            <div class="single-input-item">
                <label class="label-login" for="cedula" >Contraseña</label>
                <span class="icon-eye1"><i class="fa-solid fa-eye-slash"></i></span>
                <input type="password" class="input-login border border-gray-200 rounded-md w-full text-lg p-2 my-2 focus:bg-white" placeholder="Ingresa tu contraseña" id="password" name="password">
            </div>
            
            @error('message')
                <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">
                * {{ $message }}</p>
            @enderror
            <br>
            <br>
            <button type="submit" style="background: #FE3EB2"class="btn-ingreso-login">Ingresar</button>
            
        </form>
    </div>
    
    
    <script>
        $("#password").keyup(function(){
                let string = $("#password").val();
                $("#password").val(string.replace(/ /g, ""))
            })
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ asset('js/password.js') }}"></script>

</body>

</html>
