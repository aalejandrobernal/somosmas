@extends('layouts.plantilla')

@section('title', 'Noticias')

{{-- @section('content1')
<li class="nav-item dropdown">
    <a class="nav-link  text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection --}}

@section('content')

<div id="app">
    <noticias/>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> --}}
{{-- <script src="{{ asset('js/new.js') }}"></script> --}}
{{-- <script src="{{ asset('js/swiper.js') }}"></script> --}}
{{-- <script src="{{ asset('js/splider.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


@endsection
