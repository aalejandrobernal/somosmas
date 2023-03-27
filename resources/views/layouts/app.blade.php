<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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

<body class="bg-dark">
    <nav class="flex py-5 bg-pink-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class="text-2xl font-bold">Somos Más
            <p>
        </div>

        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
            @if (auth()->check())
            @endif
        </ul>

    </nav>
    @yield('content')


</body>

</html>
