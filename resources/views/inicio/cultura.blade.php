@extends('layouts.plantilla')

@section('title', 'Cultura')

@section('content')
<div id="app">
    <cultura-component></cultura-component>
</div>
<script type="text/javascript" src="{{ asset('js/modal_cultura.js') }}"></script>
<script src="{{ asset('js/app.js') }}"> </script>

@endsection
