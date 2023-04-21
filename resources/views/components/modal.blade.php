<!-- Button trigger modal -->
<button type="button" class="btn btn-personal"data-toggle="modal"data-target="#myModal{{ $registro->id }}">
    Actualizar
</button>
<!-- Modal -->
<div class="modal fade" id="myModal{{ $registro->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Banner</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row justify-content-center">
                <div class=" justify-content-center ">
                    <div class="col-12">
                        <img class="d-block w-100" src="../storage/images/banners/{{ $registro->ruta }}" alt="">
                    </div>
                </div>
            </div>
            {!! Form::model($registro, [
                'route' => ['admin.banners.update', $registro],
                'enctype' => 'multipart/form-data',
                'method' => 'put',
                'id' => 'form',
            ]) !!}
            <div class="modal-body">
                {!! Form::label('orden', 'Posición') !!}
                <select name="orden.{{ $registro->id }}"wire:click="$emit('EveOrden', {{ $registro->orden }})"
                    class="form-control" style="width:4rem">
                    @foreach ($orden as $o)
                        @if ($o->orden == $registro->orden)
                            <option value="{{ $o->orden }}" selected>{{ $o->orden }} </option>
                        @else
                            <option value="{{ $o->orden }}">{{ $o->orden }}</option>
                        @endif
                    @endforeach
                </select>
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre' . $registro->id, $registro->nombre, ['class' => 'form-control']) !!}
                @error('nombre' . $registro->id)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                {!! Form::label('adjunto', 'Adjunto') !!}
                {!! Form::text('adjunto' . $registro->id, $registro->adjunto, ['class' => 'form-control']) !!}
                @error('adjunto' . $registro->id)
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                {{-- {{ $orden }}      --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-gris" data-dismiss="modal">Close</button>
                <button type="submit" formmethod="post" class="btn btn-personal">Guardar cambios</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
