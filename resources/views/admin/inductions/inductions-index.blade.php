@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">

@endsection

@section('title', 'Inducciones')

@section('content_header')
    <h1>Inducciones</h1>
    @livewireStyles
@stop

@section('content')
    <p>@livewire('admin.inductions-index')</p>
@stop

@section('js')

@stop
