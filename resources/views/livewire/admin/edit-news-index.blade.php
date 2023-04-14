<div>
{!!Form::model($new,['wire:submit.prevent'=>'update','method'=>'put', 'multiple'])!!}
  <div class="card">
    <div class="card-body" >
        <div class="row">
            <div class="form-group col-8">
                {!! Form::label('titulo', 'Titulo') !!}
                {!! Form::text('titulo',null, ['class'=>
                'form-control',
                'wire:model'=>'new.titulo',
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
                'wire:model'=>'new.contenido',
                'id'=>'contenido']) !!}
                @error('contenido')
                    <span class="text-danger">{{$message }}</span>
                @enderror
        </div>

        <div class="row">
            <div class="form-group col-4">
                <div class="row" style="margin: 3rem 0 4rem 0">
                    {!! Form::label('adjunto', 'Adjuntos') !!}
                    {!! Form::text('adjunto',null, ['class'=>
                    'form-control',
                    'wire:model'=>'new.adjunto',
                    'placeholder'=>'Ingrese link de adjunto']) !!}
                    @error('adjunto')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>
                <div class="row" style="margin: 3rem 0 4rem 0">

                        {!! Form::label('imagenes', 'Foto') !!}
                        {!! Form::file('imagenes',['accept'=>'image/*','wire:model'=>'imagenes', 'multiple'])!!}
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
            @else
                <div class="col-4 justify-content-center "style="margin: 0 10rem 0 10rem ">
                    <div class="img_noti" >
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @php $i = 0; @endphp
                                <?php $porciones = explode(',', $new->imagenes); ?>
                                @for ($i = 0; $i < count($porciones); $i++)
                                    <div class="{{ $i == 0 ? 'active' : '' }} carousel-item">
                                        <img class="d-block w-100" src="../../../storage/images/noticias/{{$porciones[$i]}}">
                                    </div>
                                        @php $i=$i+1; @endphp
                                @endfor
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
            @endif
        </div>
        <div class="row">
            <div class="form-group col-4" >
                 <label>
                    <input type="radio" name="estado" value="1" wire:model=new.estado checked>
                    Publicado
                </label>

                <label>
                    <input type="radio" name="estado" value="0"wire:model=new.estado>
                    Borrador
                </label>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-1">
                <a class="btn btn-gris" href="{{ url('admin/news') }}">Volver</a>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-personal" wire:click="$emit('save1',{{$new->id}})">
                Actualizar
                </button>
            </div>

        </div>
    </div>
  </div>

  <hr>
{!!Form::close()!!}
@push('js')
    <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
    <script src="{{ asset('js/sweetalert.js') }}"></script>
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
   <script>
    Livewire.on('save1',posId => {
        Swal.fire({
            position: 'center',
            title: 'Cargando.... Por favor no cierres la ventana',
            showConfirmButton: false,
            allowOutsideClick: false,
            allowEscapeKey: false,
            timer: 3000
            })
});
</script>
@endpush
</div>
