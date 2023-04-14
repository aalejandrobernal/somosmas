@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin-noti.css')}}">
<style>
 div.carousel-item::before {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: #8181818c;
    content: "";
}
</style>
@endsection

@section('title', 'Banners')

@section('content_header')
    <h1>Banners</h1>
    @livewireStyles
@stop

@section('content')
    <p>@livewire('admin.banners-index')</p>
@stop

@section('js')

@stop
