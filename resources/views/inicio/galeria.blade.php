@extends('layouts.plantilla')

@section('title', 'Galería de fotos')

@section('content')
<div id="app">
    <galeria-component></galeria-component>
</div>
    <script src="{{ asset('js/swiper_galeria.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="{{ asset('js/app.js') }}"> </script>

@endsection
