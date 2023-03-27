@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/dropzone.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.css">
<style>
    .btn-personal{
        background: fuchsia;
        color: azure;
    }
    .btn-personal:hover {
        background: rgb(201, 1, 201);
        color: azure;
    }

</style>
@endsection

@section('title', 'Crear Noticia')

@section('content_header')
    <h1>Nueva Noticia</h1>
    @livewireStyles
@stop

@section('content')
<p>@livewire('admin.create-news-index')</p>
@stop

@section('js')
    @livewireScripts
@stop
