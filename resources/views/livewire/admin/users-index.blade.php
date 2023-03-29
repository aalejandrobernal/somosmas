<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Busca por Nombre o Documento">
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-10" >
                    <a class="btn btn-magenta" href="{{route('admin.users.create')}}">Agregar Colaborador</a>
                </div>
                
                <div class="col-2" >
                    {!! Form::label('estado', 'Activos') !!}
                    {{-- <input wire:model="estado" type="checkbox"> --}}
                    <input type="checkbox" wire:model="estado"  wire:click="$emit('noti_pub')" >
                </div>
            </div>
        </div>
        @if ($users->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Cargo</th>
                            <th>Correo</th>
                            <th>Fecha Nacimiento</th>
                            <th>Fecha Ingreso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @if ($user->estado == 0)
                                <tr class="p-3 mb-2 text-dark">
                                    <td>{{$user->documento}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->cargo}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->fecha_nacimiento}}</td>
                                    <td>{{$user->fecha_ingreso}}</td>
                                    <td >
                                        <a class="btn btn-magenta" href="{{route('admin.users.edit',$user)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td >
                                        <button type="submit" class="btn btn-gris"  wire:click="$emit('hab',{{$user->id}})">
                                            Habilitar
                                        </button>
                                    </td>
                                    <td >
                                        <button type="submit" class="btn btn-rojo" wire:click="$emit('delete',{{$user->id}})">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @else
                                <tr >
                                    <td>{{$user->documento}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->cargo}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->fecha_nacimiento}}</td>
                                    <td>{{$user->fecha_ingreso}}</td>
                                    <td >
                                        <a class="btn btn-magenta" href="{{route('admin.users.edit',$user)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td >
                                        <button type="submit" class="btn btn-gris"  wire:click="$emit('des_ha',{{$user->id}})">
                                            Deshabilitar
                                        </button>
                                    </td>

                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{$users->render()}}
            </div>
        @else
            <div class="card-header">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>

@push('js')
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script>
    Livewire.on('des_ha',posId => {
    Swal.fire({
        title: '¿Estás seguro(a) de deshabilitar este usuario?',
        text: "¡No podrás revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FE3EB2',
        cancelButtonColor: '#343a40',
        confirmButtonText: '¡Sí, deshabilitar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
                Livewire.emitTo('admin.users-index','deshabilitar',posId);
                Swal.fire(
                '¡Deshabilitado!',
                'El usuario ha sido deshabilitado.',
                'success'
            )
            
        }
    })
});
</script>
<script>
    Livewire.on('hab',posId => {
    Swal.fire({
        title: '¿Estás seguro(a) de habilitar este usuario?',
        text: "¡No podrás revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FE3EB2',
        cancelButtonColor: '#343a40',
        confirmButtonText: '¡Sí, habilitar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
                Livewire.emitTo('admin.users-index','deshabilitar',posId);
                Swal.fire(
                '¡Habilitado!',
                'El usuario ha sido habilitado.',
                'success'
            )
            
        }
    })
});
</script>
<script>
    Livewire.on('delete',posId => {
    Swal.fire({
        title: '¿Estás seguro(a) de eliminar este usuario?',
        text: "¡No podrás revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#FE3EB2',
        cancelButtonColor: '#343a40',
        confirmButtonText: '¡Sí, eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
                Livewire.emitTo('admin.users-index','eliminar',posId);
                Swal.fire(
                '¡Deshabilitado!',
                'El usuario ha sido eliminado.',
                'success'
            )
            
        }
    })
});
</script>
<script>
    Livewire.on('noti_pub',() => {
    Swal.fire({
        position: 'center',
            title: 'Cargando, por favor no cierres la ventana',
            showConfirmButton: false,
            timer: 3000
    })
});
</script>
@endpush



    





