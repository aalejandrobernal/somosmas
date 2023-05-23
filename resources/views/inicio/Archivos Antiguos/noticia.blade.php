@extends('layouts.plantilla')

@section('title', 'Noticias')

{{-- @section('content1')
<li class="nav-item dropdown">
    <a class="nav-link  text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection --}}
@section('content')
<div >
    <noticias/>
</div>
@endsection
