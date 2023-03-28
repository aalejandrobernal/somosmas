<div>
{!!Form::open(['wire:submit.prevent'=>'save','enctype'=>'multipart/form-data', 'multiple'])!!}

  <div class="card">
    <div class="card-body" >
        <div class="row">
            <div class="form-group col-8">
                {!! Form::label('titulo', 'Título') !!}
                {!! Form::text('titulo',null, ['class'=>
                'form-control',
                'wire:model'=>'titulo',
                'placeholder'=>'Ingrese título']) !!}
                @error('titulo')
                    <span class="text-danger">{{$message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-group" wire:ignore>
            {!! Form::label('contenido', 'Contenido') !!}
            {!! Form::textarea('contenido',null, ['class'=>
                'form-control',
                'wire:model'=>'contenido',
                'placeholder'=>'Ingrese la noticia',
                'id'=>'contenido']) !!}
                @error('contenido')
                    <span class="text-danger">{{$message }}</span>
                @enderror
        </div>
        @error('contenido')
                    <span class="text-danger">{{$message }}</span>
                @enderror
        
        <div class="row" >
            <div class="col-4 adjunto">
                <div class="row" style="margin: 3rem 0 4rem 0">
                    {!! Form::label('adjunto', 'Adjuntos') !!}
                    {!! Form::text('adjunto',null, ['class'=>
                    'form-control',
                    'placeholder'=>'Ingrese links de adjuntos',
                    'wire:model'=>'adjunto',]) !!}
                    @error('adjunto')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="row" style="margin: 3rem 0 4rem 3rem">
                        {!! Form::label('imagenes', 'Foto') !!}
                        {!! Form::file('imágenes',['accept'=>'image/*','wire:model'=>'imagenes', 'multiple'])!!}

                        @error('imagenes')
                        <span class="text-danger">{{$message }}</span>
                        @enderror
                </div>
            </div>
                    @if ($imagenes)
            <div class="col-4 justify-content-center "style="margin: 0 10rem 0 10rem ">
                <div class="img_noti" >
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @php $i = 0; @endphp
                            @foreach ($imagenes as $imagen)
                                <div class="{{ $i == 0 ? 'active' : '' }} carousel-item">
                                    <img class="d-block w-100" src="{{$imagen->temporaryURL()}}">
                                </div>
                                    @php $i=$i+1; @endphp
                            @endforeach 
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
                </div>
            </div>

                            {{-- @foreach ($imagenes as $imagen)
                            <div>
                                <img src="{{$imagen->temporaryURL()}}" height="200" width="200" class="img-fluid" alt=""/>
                                <textarea name="imagen_final" rows="10" cols="50">{{$imagen->temporaryURL()}}</textarea>
                                <hr>
                            </div>
                            @endforeach --}}

                            {{-- <img src="{{$imagen->temporaryURL()}}" height="200" width="200" class="img-fluid" alt=""/> --}}


                    @endif
                
        </div>
        <div class="row">
            <div class="form-group col-4" >
            <label>
                <input type="radio" name="estado" value="1" wire:model=estado checked>
                Publicado
            </label>
            <label>
                <input type="radio" name="estado" value="0"wire:model=estado>
                Borrador
            </label>
            {{-- |   
                 {!! Form::radio('estado',1 ,['class'=>'mr-1'])!!}
                 {!! Form::label('estado', 'Publicado') !!}
                 {!! Form::radio('estado',0,['class'=>'mr-1'])!!}
                 {!! Form::label('estado', 'Borrador') !!} --}}
            </div>
        </div>
        <hr>
        <button type="submit" class="btn btn-personal" wire:click="$emit('save')">
            Enviar
         </button>
    </div>
    
  </div>

{!!Form::close()!!}
 
<hr>

@push('js')
    <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
       .create( document.querySelector( '#contenido' ) )
       .then( function( editor ) {
          editor.model.document.on( 'change:data', () => {
              @this.set('contenido', editor.getData());
          });
       } )
       .catch( error => {
           console.error( error );
       } );
   </script>
@endpush

</div>
