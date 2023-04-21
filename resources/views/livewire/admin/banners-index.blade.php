<div>
    <div class="card">
        <div class="card-body">
            {{-- ********************BANNER**************************** --}}
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @php $i = 0; @endphp
                    @foreach ($banners as $banner)
                        <div class="{{ $i == 0 ? 'active' : '' }} carousel-item">
                            @if ($banner->adjunto != null)
                                <a href="{{ $banner->adjunto }}" target="_blank">
                                    <img src="../storage/images/banners/{{ $banner->ruta }}" class="d-block w-100"
                                        alt="...">
                                </a>
                            @else
                                <img src="../storage/images/banners/{{ $banner->ruta }}" class="d-block w-100"
                                    alt="...">
                            @endif
                            <div class="carousel-caption d-none d-md-block">

                                <h5><strong>{{ $banner->nombre }}</strong></h5>
                            </div>
                        </div>
                        @php $i=$i+1; @endphp
                    @endforeach
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- ******************TABLA****************************** --}}
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-10">
                    <h5><strong>Todos los Banner</strong></h5>
                </div>
                <div class="col-2">
                    {!! Form::label('estado', 'Publicados') !!}
                    <input type="checkbox" wire:model="estado" wire:click="$emit('noti_pub')">
                </div>
            </div>
        </div>
        @if ($banners->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Orden</th>
                            <th>Nombre</th>
                            <th>Adjunto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($banners as $banner)
                            @if ($banner->estado == 0)
                                <tr class="p-3 mb-2 text-dark">
                                    <td class="col-2">{{ $banner->orden }}</td>
                                    <td class="col-2">{{ $banner->nombre }}</td>
                                    <td class="col-4"><input type="text" value="{{ $banner->adjunto }}" disabled>
                                    </td>
                                    <td class="col-1">
                                        <a class="btn btn-gris" wire:click="$emit('hab',{{ $banner->id }})">
                                            Habilitar
                                        </a>
                                    </td>
                                    <td class="col-1">
                                        <button class="btn btn-rojo" wire:click="$emit('delet',{{ $banner->id }})">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td class="col-2">{{ $banner->orden }}</td>
                                    <td class="col-2">{{ $banner->nombre }}</td>
                                    <td><input style="min-width:25rem" type="text" value="{{ $banner->adjunto }}"
                                            disabled></td>
                                    <td width="10px">
                                        <x-modal id="{{ $banner->id }}" />
                                    </td>
                                    <td width="10px">
                                        <a class="btn btn-gris" wire:click="$emit('des_hau',{{ $banner->id }})">
                                            Deshabilitar
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        @else
            <div class="card-header">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
    {{-- *********************FIN TABLA*************************** --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <h5><strong>Nuevo Banner</strong></h5>
            </div>
            <hr>
            {!! Form::open(['wire:submit.prevent' => 'create', 'method' => 'put']) !!}
            <div class="row">
                <div class="form-group col-6">
                    {!! Form::label('nombre', 'Nombre') !!}
                    {!! Form::text('nombre', null, [
                        'class' => 'form-control',
                        'wire:model' => 'nombre',
                        'placeholder' => 'Ingrese nombre',
                    ]) !!}
                    @error('nombre')
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
                @if ($imagen)
                    <div class=" justify-content-center ">
                        <div class="col-12">
                            <img class="d-block w-100" src="{{ $imagen->temporaryURL() }}" alt="">
                        </div>
                    </div>
                @endif
            </div>
            <hr>
            {{-- ************************************************ --}}
            <button type="submit" class="btn btn-personal" wire:click="$emit('nuevo')">
                Nuevo Banner
            </button>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@push('js')
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/alerta_admin.js') }}"></script>
    <script>
        Livewire.on('des_hau', posId => {
            Swal.fire({
                title: '¿Estás seguro(a) de deshabilitar este banner?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FE3EB2',
                cancelButtonColor: '#343a40',
                confirmButtonText: '¡Sí, deshabilitar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.banners-index', 'deshabilitar', posId);
                    Swal.fire(
                        'Proceso Ejecutado!',
                        'El banner ha sido deshabilitado.',
                        'success'
                    )
                }
            })
        });
    </script>
    <script>
        Livewire.on('hab', posId => {
            Swal.fire({
                title: '¿Estás seguro(a) de habilitar este banner?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FE3EB2',
                cancelButtonColor: '#343a40',
                confirmButtonText: '¡Sí, habilitar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.banners-index', 'deshabilitar', posId);
                    Swal.fire(
                        '¡Habilitada!',
                        'Este banner ha sido habilitado.',
                        'success'
                    )

                }
            })
        });
    </script>
    <script>
        Livewire.on('nuevo', posId => {
            Swal.fire({
                position: 'center',
                title: 'Cargando.... Por favor no cierres la ventana',
                showConfirmButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                timer: 2000
            })
        });
    </script>
    <script>
        Livewire.on('delet', posId => {
            Swal.fire({
                title: '¿Estás seguro(a) de eliminar este banner?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FE3EB2',
                cancelButtonColor: '#343a40',
                confirmButtonText: '¡Sí, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.banners-index', 'delete', posId);
                    Swal.fire(
                        '¡Eliminada!',
                        'El banner ha sido eliminado.',
                        'success'
                    )

                }
            })
        });
    </script>
    <script>
        Livewire.on('noti_pub', () => {
            Swal.fire({
                position: 'center',
                title: 'Cargando, por favor no cierres la ventana',
                showConfirmButton: false,
                timer: 2000
            })
        });
    </script>
@endpush