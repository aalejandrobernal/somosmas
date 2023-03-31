<div>
    <button type="button" class="btn btn-magenta" data-toggle="modal" data-target="#exampleModalCenter">
        Nueva Noticia
      </button>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" wire:ignore >

        <div class= "modal-dialog modal-xl " role="document" >
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Nueva Noticia</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                {{-- {!!Form::open(['route'=>'admin.news.store','enctype'=>'multipart/form-data',''=>''])!!} --}}
                {!!Form::open(['wire:submit.prevent'=>'submit','enctype'=>'multipart/form-data','multiple'])!!}
                <div class="card">
                    <div class="card-body" >
                        <div class="row">
                            <div class="form-group col-8">
                                {!! Form::label('titulo', 'Titulo') !!}
                                {!! Form::text('titulo',null,['class'=>'form-control','placeholder'=>'Ingrese título','wire:model'=>'titulo'])!!}
                                {{$titulo}}
                                @error('titulo')
                                    <span class="text-danger">
                                        {{$message}}
                                    </span>
                                @enderror
                            </div>
                        </div>
                      <div class="form-group">
                          {!! Form::label('contenido', 'Contenido') !!}
                          {!! Form::textarea('contenido',null, ['class'=>
                              'form-control',
                              'placeholder'=>'Ingrese la noticia',
                              'wire:model'=>'contenido']) !!}
                              {{$contenido}}
                              @error('contenido')
                                  <span class="text-danger">{{$message }}</span>
                              @enderror
                      </div>
                      <div class="row">
                          <div class="form-group col-4">
                              {!! Form::label('adjunto', 'Adjuntos') !!}
                              {!! Form::text('adjunto',null, ['class'=>'form-control','placeholder'=>'Ingrese links de adjuntos','wire:model'=>'adjunto']) !!}
                              {{$adjunto}}
                              @error('adjunto')
                                  <span class="text-danger">{{$message }}</span>
                              @enderror
                          </div>
                      </div>
                      <div class="row">
                          <div class="form-group col-4">
                                  <div class="form-group col-4">
                                      {!! Form::label('imagenes', 'Foto') !!}
                                      {!! Form::file('imagenes',['accept'=>'image/*','wire:model'=>'imagenes', 'multiple','wire:model'=>'imagenes'])!!}
                                      @error('imagenes')
                                      <span class="text-danger">{{$message }}</span>
                                      @enderror
                                  </div>
                                  @if ($imagenes)
                                          {{-- <div id="carouselExampleControls" class="carousel slide col-6 noticia" data-ride="carousel">
                                              <div class="carousel-inner">
                                                      @php $i = 0; @endphp
                                                      @foreach ($imagenes as $imagen)
                                                          <div class="{{ $i == 0 ? 'active' : '' }} carousel-item">
                                                              <img class="d-block w-100" src="{{$imagen->temporaryURL()}}" class="pl-4">
                                                          </div>
                                                          @php
                                                          Log::info($i);
                                                          $i=$i+1;
                                                          @endphp
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
                                          </div> --}}
                                          <img src="{{$imagenes->temporaryURL()}}" height="200" width="200" class="img-fluid" alt=""/>
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
                               {!! Form::radio('estado',1 ,['class'=>'mr-1','wire:model'=>'estado'])!!}
                               {!! Form::label('estado', 'Publicado') !!}
                               {!! Form::radio('estado',0,['class'=>'mr-1','wire:model'=>'estado'])!!}
                               {!! Form::label('estado', 'Borrador') !!}
                               {{$estado}}
                          </div>
                      </div>
                  </div>
                </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              {!! Form::submit('Crear Noticia', ['class'=>'btn btn btn-magenta']) !!}
            </div>
          </div>
        </div>
        {!!Form::close()!!}
    </div>
    {{-- @push('js')
    <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
       .create( document.querySelector( '#contenido' ) )
       .catch( error => {
           console.error( error );
       } );
   </script>
@endpush --}}
</div>
