@extends('adminlte::page')
@section('css')
<style>
    .btn-magenta{
        background: #FE3EB2;
        color: azure;
    }
    .btn-magenta:hover {
        background: #d10b82;
        color: azure;
    }
    .btn-gris{
        color: white;
        background: #343a40;
        border-color: #343a40;
    }
    .btn-gris:hover{
        color: white;
        background: #343a40a2;
        border-color: #343a40a2;
    }
    .btn-rojo{
        background: #fd0101;
        color: azure;
    }
    .btn-rojo:hover{
        background: #c20101;
        color: azure;
    }
</style>
@endsection

@section('title', 'Noticias')

@section('content_header')
    <h1>Noticias</h1>
    @livewireStyles
@stop

@section('content')
    {{-- @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif --}}
    <p>@livewire('admin.news-index')</p>
@stop



@section('js')

@stop
