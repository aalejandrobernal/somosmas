@extends('adminlte::page')
@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">
@endsection

@section('title', 'Editar Noticia ')

@section('content_header')
    <h1>Editar Noticia</h1>
@stop

@section('content')
<p>@livewire('admin.edit-news-index',['new' => $news] , key($news->id))</p>
@stop

@section('js')

@stop
