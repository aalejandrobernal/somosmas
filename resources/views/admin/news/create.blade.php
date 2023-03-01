@extends('adminlte::page')

@section('title', 'Crear Noticia')

@section('content_header')
    <h1>Nueva Noticia</h1>
    @livewireStyles
@stop

@section('content')
{!!Form::open(['route'=>'admin.news.store','enctype'=>'multipart/form-data'])!!}
  <div class="card">
    <div class="card-body" >
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('titulo', 'Titulo') !!}
                {!! Form::text('titulo',null, ['class'=>'form-control','placeholder'=>'Ingrese título']) !!}
                @error('titulo')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('contenido', 'Contenido') !!}
            {!! Form::textarea('contenido',null, ['class'=>
                'form-control',
                'placeholder'=>'Ingrese la noticia']) !!}
                @error('contenido')
                    <span class="text-danger">{{$message }}</span>
                @enderror
        </div>
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('adjunto', 'Adjuntos') !!}
                {!! Form::text('adjunto',null, ['class'=>'form-control','placeholder'=>'Ingrese links de adjuntos']) !!}
                @error('adjunto')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4">
                {!! Form::label('imagenes', 'Foto') !!}
                {!! Form::file('imagenes',['accept'=>'image/*'])!!}
                @error('imagenes')
                <span class="text-danger">{{$message }}</span>
            @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group col-4" >
                 {!! Form::radio('estado',1 ,['class'=>'mr-1'])!!}
                 {!! Form::label('estado', 'Publicado') !!}
                 {!! Form::radio('estado',0,['class'=>'mr-1'])!!}
                 {!! Form::label('estado', 'Borrador') !!}
            </div>
        </div>
    </div>
  </div>

  {!! Form::submit('Crear Noticia', ['class'=>'btn btn-primary']) !!}
  <hr>
{!!Form::close()!!}
@stop

@section('js')
    @livewireScripts

    <script src="{{ asset('js/ckeditor.js') }}"></script>

    <script>
         ClassicEditor
        .create( document.querySelector( '#contenido' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>


@stop
