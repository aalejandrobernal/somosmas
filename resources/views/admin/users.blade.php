@extends('adminlte::page')

@section('adminlte_css')
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

@section('title', 'Colaboradores')

@section('content_header')
    <h1>Colaboradores</h1>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/swiper_noti.css') }}">
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <p>@livewire('admin.users-index')</p>
@stop



