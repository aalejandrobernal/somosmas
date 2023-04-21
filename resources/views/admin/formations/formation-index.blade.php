@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">

@endsection

@section('title', 'Formaciones')

@section('content_header')
    <h1>Formaciones del mes</h1>
    @livewireStyles
@stop

@section('content')
    <p>@livewire('admin.formations-index')</p>
@stop

@section('js')

@stop
