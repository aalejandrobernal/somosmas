@extends('adminlte::page')

@section('adminlte_css')
<style>
    .btn-enviar{
        background: #F23DB3;
        color: azure;
    }
    .btn-enviar:hover {
        background: #9f2976;
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



