<div>
    
{!!Form::open(['route'=>'admin.news.store','enctype'=>'multipart/form-data', 'multiple'])!!}
  <div class="card">
    <div class="card-body" >
        <div class="row">
            <div class="form-group col-8">
                {!! Form::label('titulo', 'Titulo') !!}
                {!! Form::text('titulo',null, ['class'=>'form-control','placeholder'=>'Ingrese título']) !!}
                @error('titulo')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group" wire:ignore>
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
                    <div class="form-group col-4">
                        {!! Form::label('imagenes', 'Foto') !!}
                        {!! Form::file('imagenes',['accept'=>'image/*','wire:model'=>'imagenes', 'multiple'])!!}
                        
                        @error('imagenes')
                        <span class="text-danger">{{$message }}</span>
                        @enderror
                    </div>
                    @if ($imagenes)
                            <div id="carouselExampleControls" class="carousel slide col-6 noticia" data-ride="carousel">
                                <div class="carousel-inner">
                                        @php $i = 0; @endphp
                                        @foreach ($imagenes as $imagen)
                                            <div class="{{ $i == 0 ? 'active' : '' }} carousel-item">
                                                <img class="d-block w-100" src="{{$imagen->temporaryURL()}}">
                                            </div>
                                            @php $i=$i+1; @endphp
                                        @endforeach
                                        {{-- @endfor --}}
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    
                                </div>
                            </div>
                       
                            {{-- <img src="{{$imagen->temporaryURL()}}" height="200" width="200" class="img-fluid" alt=""/> --}}
                        
                        
                    @endif
                {{-- <div class="form-group col-4">
                    {!! Form::label('imagenes', 'Foto') !!}
                    {!! Form::file('imagenes',['accept'=>'image/*','wire:model'=>'image'])!!}
                    @error('imagenes')
                    <span class="text-danger">{{$message }}</span>
                     @enderror
                </div> --}}
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
  <hr>
  
  {!! Form::submit('Crear Noticia', ['class'=>'btn btn-personal']) !!}
{!!Form::close()!!}
  <hr>
    {!!Form::open(['route'=>
                    'admin.news.store',
                    'enctype'=>'multipart/form-data',
                    'class'=>'dropzone','id'=>'my-great-dropzone'])!!}
    {!!Form::close()!!}
<hr>

@push('js')
    <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
    <script src="{{ asset('js/dropzone-min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"></script>
     
    <script>
        ClassicEditor
       .create( document.querySelector( '#contenido' ) )
       .catch( error => {
           console.error( error );
       } );
   </script>
   <script>
   
    Dropzone.options.myDropzone = {
        headers:{
            'X-CSRF-TOKEN':"{{ csrf_token() }}"
        },
        paramName:"imagenes",
        acceptedFiles:"image/*",
    
    };
  </script>
    
@endpush

</div>
