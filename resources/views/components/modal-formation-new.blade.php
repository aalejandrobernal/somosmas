<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-personal"data-toggle="modal"data-target="#myModal">
        Nueva formación
    </button>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Nueva Formación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    {!! Form::open(['wire:submit.prevent' => 'create', 'method' => 'post']) !!}
                    <div class="row">
                        <div class="form-group col-6">
                            {!! Form::label('titulo', 'Título') !!}
                            {!! Form::text('titulo', null, [
                                'class' => 'form-control',
                                'wire:model' => 'titulo',
                                'placeholder' => 'Ingrese el titúlo de la formación',
                                'maxlength'=>'40'
                            ]) !!}
                            @error('titulo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-2">
                        </div>
                        <div class="form-group col-4">
                            {!! Form::label('estado', 'Estado') !!}
                            <br>
                            <label>
                                <input type="radio" name="estado" value="1" wire:model=estado_nuevo checked>
                                Publicado
                            </label>

                            <label>
                                <input type="radio" name="estado" value="0"wire:model=estado_nuevo>
                                Borrador
                            </label>

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-10" wire:ignore>
                            {!! Form::label('contenido', 'Contenido') !!}
                            {!! Form::textarea('cuerpo', null, [
                                'class' => 'form-control',
                                'wire:model' => 'cuerpo',
                                'placeholder' => 'Ingrese la noticia',
                                'id' => 'cuerpo',
                            ]) !!}
                            @error('cuerpo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <div class="row" style="margin: 0 0 0 0">
                                {!! Form::label('adjunto', 'Adjunto') !!}
                                {!! Form::text('adjunto', null, [
                                    'class' => 'form-control',
                                    'wire:model' => 'adjunto',
                                    'placeholder' => 'Ingrese link de adjunto',
                                ]) !!}
                                <br>
                                @error('adjunto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row" style="margin: 2rem 0 2rem 0">
                                <div class="col-2">
                                    {!! Form::label('imagen', 'Imagen') !!}
                                </div>
                                <div class="col">
                                    {!! Form::file('imagen', ['accept' => 'image/*', 'wire:model' => 'imagen']) !!}
                                </div>
                                <hr>
                                @error('imagen')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        {{-- @if ($imagen)
                        <div class=" justify-content-center ">
                            <div class="col-12">
                                <img class="d-block w-100" src="{{ $imagen->temporaryURL() }}" alt="">
                            </div>
                        </div>
                    @endif --}}
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-gris" data-dismiss="modal">Cerrar</button>
                    <button type="submit" formmethod="post" class="btn btn-personal">Guardar</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

</div>
@push('js')
    <script src="{{ asset('ckeditor/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
       .create( document.querySelector( '#cuerpo' ) )
       .then( function( editor ) {
          editor.model.document.on( 'change:data', () => {
              @this.set('cuerpo', editor.getData());
          });
       } )
       .catch( error => {
           console.error( error );
       } );
   </script>
@endpush