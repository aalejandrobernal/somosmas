<div>
    <div class="card">
        <div class="card-header">

            <input wire:model="search" class="form-control" placeholder="Ingrese Nombre o Documento">
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-10" >
                    <a class="btn btn-enviar " href="{{route('admin.users.create')}}">Agregar Colaborador</a>
                </div>
                <div class="col-2" >
                {!! Form::label('estado', 'Activos') !!}
                {{-- {!! Form::checkbox('estado','1',null ,['class'=>'mr-1'])!!} --}}
                <input wire:model="estado" type="checkbox">
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
                                <tr class="p-3 mb-2  text-dark">
                                    <td>{{$user->documento}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->cargo}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->fecha_nacimiento}}</td>
                                    <td>{{$user->fecha_ingreso}}</td>
                                    <td >
                                        <a class="btn btn-primary d-block mx-auto" href="{{route('admin.users.edit',$user)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td >
                                        <form action="{{route('admin.users.show',$user)}}" >
                                            @csrf
                                                <button type="submit" class="btn btn-success d-block mx-auto">Habilitar</button>
                                        </form>
                                    </td>
                                    <td >
                                        {!! Form::open(['route'=> ['admin.users.delete',$user],'method'=>'put','id'=>'form3']) !!}
                                            {!! Form::submit('Eliminar', ['id'=>'btn3','class'=>'btn btn-danger d-block mx-auto']) !!}
                                        {!! Form::close() !!}
                                        {{-- <form action="{{route('admin.users.destroy',$user)}}" , method="">
                                            @csrf
                                                <button type="submit" class="btn btn-danger d-block mx-auto">
                                                    Eliminar
                                                </button>
                                        </form> --}}
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
                                        <a class="btn btn-outline-primary d-block mx-auto" href="{{route('admin.users.edit',$user)}}">
                                            Editar
                                        </a>
                                    </td>
                                    <td >
                                        <form action="{{route('admin.users.show',$user)}}" >
                                            @csrf
                                                <button type="submit" class="btn btn-outline-danger d-block mx-auto">
                                                    Deshabilitar
                                                </button>
                                        </form>
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

<script>
    $('#btn3').on('click', function(b) {
    b.preventDefault();
    Swal.fire({
        title: '¿Estas seguro de eliminar la información ?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Informacion Actualizada!',
            'La información ha sido actulizada exitosamente.',
            'success'
          )
          $(this).closest('#form3').submit();}
      })
});
</script>
