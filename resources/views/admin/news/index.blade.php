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
