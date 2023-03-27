@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">
@endsection

@section('title', 'Crear Noticia')

@section('content_header')
    <h1>Nueva Noticia</h1>   
@stop

@section('content')
<p>@livewire('admin.create-news-index')</p>
@stop

@section('js')
    
@stop
