<div>
    <div class="card">
        <div class="card-header">
            <h5><strong>Todas las formaciones</strong></h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-8">
                        <x-modal-formation-new />
                    </div>
                    <div class="col-2">
                        {!! Form::label('estado', 'Publicados') !!}
                        <input type="checkbox" wire:model="estado" wire:click="$emit('noti_pub')">
                    </div>
                    
                </div>
                <hr>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="text-align: center;">Posición</th>
                            <th style="text-align: center;">Nombre</th>
                            <th style="text-align: center;">Adjunto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($forms as $form)
                            @if ($form->estado == 0)
                                <tr class="p-3 mb-2 text-dark">
                                    <td class="col-1"></td>
                                    <td class="col-3">{{ $form->titulo }}</td>
                                    <td class="col-4"><input type="text" value="{{ $form->adjunto }}" disabled>
                                    </td>
                                    <td class="col-1">
                                        <a class="btn btn-gris" wire:click="$emit('hab',{{ $form->id }})">
                                            Habilitar
                                        </a>
                                    </td>
                                    <td class="col-1">
                                        <button class="btn btn-rojo" wire:click="$emit('delet',{{ $form->id }})">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td class="col-1" style="text-align: center;">{{ $form->orden }}</td>
                                    <td class="col-3">{{ $form->titulo }}</td>
                                    <td><input style="min-width:25rem" type="text" value="{{ $form->adjunto }}"
                                            disabled></td>
                                     <td width="10px">
                                        <livewire:admin.edit-formations-index :form="$form" :wire:key="$form->id">
                                    </td>
                                    
                                    <td width="10px">
                                        <a class="btn btn-gris" wire:click="$emit('des_hau',{{ $form->id }})">
                                            Deshabilitar
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="4">No hay registros</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{------------------------------------Fin  card tabla--------------------------------- --}}
</div>
@push('js')
    <script src="{{ asset('js/sweetalert.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/alerta_admin.js') }}"></script>
    @foreach ($forms as $form)
    <script>
        window.addEventListener('close-modal', event => {
            $('#myModal{{ $form->id }}').modal('hide');
        });
    </script>
    @endforeach
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
    <script>
        Livewire.on('des_hau', posId => {
            Swal.fire({
                title: '¿Estás seguro(a) de deshabilitar esta formación?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FE3EB2',
                cancelButtonColor: '#343a40',
                confirmButtonText: '¡Sí, deshabilitar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.formations-index', 'deshabilitar', posId);
                    Swal.fire(
                        'Proceso Ejecutado!',
                        'Esta formación ha sido deshabilitada.',
                        'success'
                    )
                }
            })
        });
    </script>
    <script>
        Livewire.on('hab', posId => {
            Swal.fire({
                title: '¿Estás seguro(a) de esta formación?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FE3EB2',
                cancelButtonColor: '#343a40',
                confirmButtonText: '¡Sí, habilitar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.formations-index', 'deshabilitar', posId);
                    Swal.fire(
                        '¡Habilitada!',
                        'Esta formación ha sido habilitada.',
                        'success'
                    )

                }
            })
        });
    </script>
    <script>
        Livewire.on('delet', posId => {
            Swal.fire({
                title: '¿Estás seguro(a) de eliminar esta formación?',
                text: "¡No podrás revertir esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#FE3EB2',
                cancelButtonColor: '#343a40',
                confirmButtonText: '¡Sí, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.emitTo('admin.formations-index', 'delete', posId);
                    Swal.fire(
                        '¡Eliminada!',
                        'Esta formación ha sido eliminada.',
                        'success'
                    )

                }
            })
        });
    </script>
    <script>
        window.addEventListener('close-modal', event => {
            $('#myModal').modal('hide');
        });
        
    </script>
@endpush
