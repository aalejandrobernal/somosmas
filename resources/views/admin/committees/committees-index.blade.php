@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">

@endsection

@section('title', 'Conformaciones Comités')

@section('content_header')
    <h1>Conformaciones Comités</h1>
    @livewireStyles
@stop

@section('content')
    <p>@livewire('admin.committees-index')</p>
@stop

@section('js')

@stop
