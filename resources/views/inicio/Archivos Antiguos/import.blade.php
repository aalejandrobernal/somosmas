@extends('layouts.plantilla')

@section('title', 'Somos Más')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Importar Usuarios</h1>
       
    </div>
    <div class="card shadow mb-4">
        <form method="POST" action="{{route('inicio.import')}}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    
                    
                    <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                        <span style="color:red;">*</span>Entrada de archivo (hoja de datos)</label>
                        @if($errors->any())
                            <h4>{{$errors->first()}}</h4>
                        @endif
                        <input 
                            type="file" 
                            class="form-control form-control-user @error('file') is-invalid @enderror" 
                            id="exampleFile"
                            name="file" 
                            value="{{ old('file') }}"
                            accept=".xlsx">

                        @error('file')
                            <span style="color:red;" class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-success btn-user float-right mb-3">Upload Users</button>
                <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('inicio.index') }}">Cancel</a>
            </div>
        </form>
    </div>

</div>


@endsection