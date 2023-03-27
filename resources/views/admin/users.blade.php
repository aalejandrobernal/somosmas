@extends('adminlte::page')

@section('css')
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
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif



    <p>@livewire('admin.users-index',['base'=>$users1])</p>
@stop
@section('js')
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/alerta_admin.js') }}"></script>
    @livewireScripts

@stop
