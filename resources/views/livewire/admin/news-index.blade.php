<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="Ingrese Nombre o Documento">
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-10" >
                    <a class="btn btn-enviar" href="{{route('admin.news.create')}}">Agregar Noticia</a>
                </div>
                {{-- @livewire('admin.create-new') --}}
                <div class="col-2" >
                    {!! Form::label('estado', 'Noticias publicadas') !!}
                    <input wire:model="estado" type="checkbox">
                </div>
            </div>
        </div>
        @if ($news->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Titulo</th>
                            <th>Noticia destacada</th>
                            <th>Adjunto</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $new)
                            @if ($new->estado == 0)
                                <tr class="p-3 mb-2 text-dark">
                                    <td>{{$new->titulo}}</td>
                                    @if ($new->id == $destacada->noticias_id)
                                        <td><input type="radio" name="$new->id" disabled checked></td>
                                    @else
                                        <td><input type="radio" name="$new->id" disabled></td>
                                    @endif
                                    <td>{{$new->adjunto}}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary btn-sm" href="{{route('admin.news.edit',$new)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <button type="submit" class="btn btn-success btn-sm" wire:click="$emit('hab',{{$new->id}})">
                                            Habilitar
                                        </button>
                                    </td>
                                    <td width="10px">
                                        <button type="submit" class="btn btn-danger btn-sm" wire:click="$emit('delete',{{$new->id}})">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @else
                                <tr >
                                    <td>{{$new->titulo}}</td>
                                    @if ($new->id == $destacada->noticias_id)
                                        <td><input type="radio" class="dispay:flex" name="$new->id" wire:click=
                                            "$emit('destacada1',{{$new->id}},{{$destacada->id}})"checked></td>
                                    @else
                                        <td><input type="radio" class="text-center" name="$new->id" wire:click=
                                            "$emit('destacada1',{{$new->id}},{{$destacada->id}})"></td>
                                    @endif
                                    <td>{{$new->adjunto}}</td>
                                    <td width="10px">
                                        <a class="btn btn-outline-primary btn-sm" href="{{route('admin.news.edit',$new)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td width="10px">
                                        <button type="submit" class="btn btn-outline-danger btn-sm" wire:click="$emit('des_hau',{{$new->id}})">
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
                {{$news->render()}}
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
@if (session('info'))
    <script>
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{session('info')}}',
            showConfirmButton: false,
            timer: 3000
        })
    </script>
    
@endif
<script>
    Livewire.on('des_hau',posId => {
    Swal.fire({
        title: '¿Está seguro(a) de deshabilitar esta noticia?',
        text: "¡No podrá revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, deshabilitar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emitTo('admin.news-index','deshabilitar',posId);
                Swal.fire(
                '¡Perfecto!',
                'La noticia ha sido deshabilitada.',
                'success'
            )
        }
    })
});
</script>
<script>
    Livewire.on('hab',posId => {
    Swal.fire({
        title: '¿Está seguro(a) de habilitar esta noticia?',
        text: "¡No podrá revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, habilitar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
                Livewire.emitTo('admin.news-index','deshabilitar',posId);
                Swal.fire(
                '¡Habilitada!',
                'La noticia ha sido habilitada.',
                'success'
            )
            
        }
    })
});
</script>
<script>
    Livewire.on('delete',posId => {
    Swal.fire({
        title: '¿Está seguro(a) de eliminar este usuario?',
        text: "¡No podrá revertir esta acción!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '¡Sí, eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
                Livewire.emitTo('admin.news-index','eliminar',posId);
                Swal.fire(
                '¡Eliminada!',
                'La noticia ha sido eliminada.',
                'success'
            )
            
        }
    })
});
</script>
<script>
    Livewire.on('destacada1',(posId,not) => {
    Swal.fire({
        title: '¿Noticia destacada?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si',
        cancelButtonText: 'No'
    }).then((result) => {
        if (result.isConfirmed) {
            Livewire.emitTo('admin.news-index','destacada',posId,not);
            Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '¡Perfecto!',
            showConfirmButton: false,
            timer: 2000
            })
        }
    })
});
</script>
@endpush
