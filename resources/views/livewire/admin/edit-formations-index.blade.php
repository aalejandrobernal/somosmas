<div>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-personal"data-toggle="modal"data-target="#myModal{{ $form->id }}">
            Editar
        </button>
        <!-- Modal -->
        <div wire:ignore.self class="modal fade" id="myModal{{ $form->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Editar formación {{ $form->titulo }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    {!!Form::model($form,['wire:submit.prevent'=>'update','method'=>'put', 'enctype' => 'multipart/form-data'])!!}
                        <div class="modal-body">
                            <div class="row justify-content-center">
                                {{-- <div class=" justify-content-center "> --}}
                                    {{-- <div style="height: 150px; background-color: rgba(255,0,0,0.1);"> --}}
                                         <div class="h-50 d-inline-block" style="width: 300px;"> 
                                            @if (!$imagen)
                                            <img class="mw-100" src="../storage/images/formaciones/{{ $form->imagen }}" alt="">
                                            @else
                                            <img class="mw-100" src="{{ $imagen->temporaryURL() }}" alt="">
                                            @endif
                                         </div>
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            </div>
                            <div class="row">
                                <div class="form-group col-2">
                                    {!! Form::label('orden', 'Posición') !!}
                                    <select name="orden.{{ $form->id }}"wire:click="$emit('EveOrden', {{ $form->orden }})"
                                        class="form-control" style="width:4rem" wire:model="form.orden">
                                        @foreach ($orden as $o)
                                            @if ($o->orden == $form->orden)
                                                <option value="{{ $o->orden }}" selected>{{ $o->orden }} </option>
                                            @else
                                                <option value="{{ $o->orden }}">{{ $o->orden }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-8">
                                    {!! Form::label('titulo', 'Título') !!}
                                    {!! Form::text('titulo' . $form->id, $form->titulo, ['class' => 'form-control','wire:model'=>'form.titulo','maxlength'=>'40']) !!}
                                    @error('titulo' . $form->id)
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                {{ $cuerpo }}
                                <div class="form-group col-12" wire:ignore>
                                    {!! Form::label('contenido', 'Contenido') !!}
                                    {!! Form::textarea('cuerpo',null, ['class'=>
                                        'form-control',
                                        'wire:model'=>'form.cuerpo',
                                        'id'=>"cuerpo$form->id"
                                        
                                        ])!!}
                                        @error('cuerpo')
                                            <span class="text-danger">{{$message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12" >
                                    {!! Form::label('adjunto', 'Adjunto') !!}
                                    {!! Form::text('adjunto' . $form->id, $form->adjunto, ['class' => 'form-control','wire:model'=>'form.adjunto']) !!}
                                    @error('adjunto' . $form->id)
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-gris" data-dismiss="modal">Cerrar</button>
                            <button type="submit" formmethod="post" class="btn btn-personal">Guardar cambios</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
    <script>
        ClassicEditor
    .create( document.querySelector( '#cuerpo{{ $form->id }}') )
    .then( function( editor ) {
        editor.model.document.on( 'change:data', () => {
            @this.set('form.cuerpo', editor.getData());
        });
    } )
    .catch( error => {
        console.error( error );
    } );
    </script>
@endpush