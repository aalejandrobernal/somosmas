@extends('adminlte::page')

@section('title', 'Editar Colaborador')

@section('content_header')
@livewireStyles
    <h1>Editar Colaboador</h1>


@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif
{!!Form::model($user,['route'=> ['admin.users.update',$user],'method'=>'put'])!!}

        <div class="card">
            <div class="card-body" >
                <h5 class="card-title">DATOS PERSONALES</h5>
                <hr>
                <div class="row">
                    <div class="form-group col-4">
                        {!! Form::label('documento', 'Documento') !!}
                        {!! Form::number('documento',null, ['class'=>'form-control','placeholder'=>'Ingrese documento']) !!}
                        @error('documento')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-8">
                        {!! Form::label('nombre', 'Nombre y Apellidos') !!}
                        {!! Form::text('nombre',null, ['class'=>'form-control','placeholder'=>'Ingrese Nombres y Apellidos']) !!}
                        @error('nombre')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        {!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento') !!}
                        {!! Form::date('fecha_nacimiento',null, ['class'=>'form-control','placeholder'=>'Ingrese Nombres y Apellidos']) !!}
                        @error('fecha_nacimiento')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-2">
                        <div class="" >
                            @if (is_file('images/fotos/'.$user->foto))
                            <img src="../../../images/fotos/{{$user->foto}}" alt=""style="width:70px" class="brand-xs img-circle elevation-4 img-responsive mx-auto d-block">
                            @else
                            <img src="{{asset('../images/fotonone.jpeg')}}" class="usuario mx-auto d-block" alt="" style="width:60px;height:60px border-radius:50%;">
                            @endif
                        </div>
                    </div>
                    <div class="form-group col-2">
                        {!! Form::label('imagen', 'Foto') !!}
                        {!! Form::file('imagen',['accept'=>'image/*'])!!}
                        @error('imagen')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">DATOS LABORALES</h5>
                <hr>
                <div class="row">
                    <div class="form-group col-8">
                        {!! Form::label('cargo', 'Cargo') !!}
                        {!! Form::text('cargo',null, ['class'=>'form-control','placeholder'=>'Ingrese cargo']) !!}
                        @error('cargo')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        {!! Form::label('empresa_id', 'Empresa') !!}
                        {!! Form::select('empresa_id', $empresas
                            ,null, ['class'=>'form-control','placeholder'=>'Ingrese empresa']) !!}
                        @error('empresa_id')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        {!! Form::label('fecha_ingreso', 'Fecha de Ingreso') !!}
                        {!! Form::date('fecha_ingreso',\Carbon\Carbon::now(), ['class'=>'form-control']) !!}
                        @error('fecha_ingreso')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        {!! Form::label('email', 'Correo Corporativo') !!}
                        {!! Form::email('email',null, ['class'=>'form-control']) !!}
                        @error('email')
                            <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-4" >
                        {{-- @foreach ($roles as $role)
                            {!! Form::checkbox('roles[]',$role->id,null ,['class'=>'mr-1']);!!}
                            {{$role->name}}
                         @endforeach --}}
                         {!! Form::checkbox('roles','1',null ,['class'=>'mr-1'])!!}
                         {!! Form::label('roles', 'Administrador') !!}
                    </div>
                </div>
            </div>
        </div>

{!! Form::submit('Actualizar Colaborador', ['class'=>'btn btn-primary']) !!}
{!!Form::close()!!}
@stop

@section('js')
    @livewireScripts
    <script></script>
@stop
