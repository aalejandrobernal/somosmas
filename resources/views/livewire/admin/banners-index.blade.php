<div>
  <div class="card">
    <div class="card-body">
{{-- ********************BANNER**************************** --}}
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
              @php $i = 0; @endphp
              @foreach ($banners as $banner)
                <div class="{{ $i == 0 ? 'active' : '' }} carousel-item">
                  <img src="../storage/images/banners/{{ $banner->ruta }}" class="d-block w-100" alt="...">
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
{{-- ******************TABLA****************************** --}}
<div class="card">
  <div class="card-header">
      <div class="row">
          <div class="col-10" >
          </div>
          <div class="col-2" >
              {!! Form::label('estado', 'Activos') !!}
              <input type="checkbox" wire:model="estado"  wire:click="$emit('noti_pub')" >
          </div>
      </div>
  </div>
  @if ($banners->count())
      <div class="card-body">
          <table class="table table-striped">
              <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Adjunto</th>
                    {{-- <th>Estado</th> --}}
                    {{-- <th>Fecha de creación</th> --}}
                    <th></th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($banners as $banner)
                  {!!Form::model($banner,[
                    'route'=> ['admin.banners.update',$banner],
                    'enctype'=>'multipart/form-data',
                    'method'=>'put',
                    'id'=>'form2'])!!}
                  @if ($banner->estado == 0)
                      <tr class="p-3 mb-2 text-dark">
                          <td>{{$banner->id}}</td>
                          <td>{{$banner->nombre}}</td>
                          {{-- <td>{{$banner->ruta}}</td> --}}
                          {{-- <td>{{$banner->estado}}</td> --}}
                          {{-- <td>{{$banner->adjunto}}</td> --}}
                          {{-- <td>{{$banner->created_at}}</td> --}}
                          <td>{{$banner->updated_at}}</td>
                          {{-- <td >
                              <a class="btn btn-magenta" href="{{route('admin.users.edit',$banner)}}">
                                  Editar
                              </a>
                          </td> --}}
                          <td >
                            <a  class="btn btn-gris"  wire:click="$emit('hab',{{$banner->id}})">
                                  Habilitar
                                </a>
                          </td>
                          <td >
                              <button type="submit" class="btn btn-rojo" wire:click="$emit('delete',{{$banner->id}})">
                                  Eliminar
                              </button>
                          </td>
                      </tr>
                  @else
                      <tr >
                      <td>{{$banner->id}}</td>
                      <td>{!!Form::text('nombre'.$banner->id, $banner->nombre,['class'=>'form-control'])!!}
                        @error('nombre'.$banner->id)
                          <span class="text-danger">{{$message }}</span>
                        @enderror</td>
                      <td>{!! Form::file('imagen'.$banner->id,['accept'=>'image/*'])!!}
                        @error('imagen'.$banner->id)
                        <span class="text-danger">{{$message }}</span>
                        @enderror</td>
                      <td style="min-width:10px">{!!Form::text('adjunto'.$banner->id, $banner->adjunto,['class'=>'form-control'])!!}
                        @error('adjunto'.$banner->id)
                          <span class="text-danger">{{$message }}</span>
                        @enderror</td>
                          <td >
                            <button type="submit" class="btn btn-personal" >
                              Actualizar
                            </button>
                          </td>
                          <td >
                            <a class="btn btn-gris" wire:click="$emit('des_hau',{{$banner->id}})">
                              Deshabilitar
                            </a>
                          </td>
                      </tr>
                  @endif
                  {!!Form::close()!!}
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
          <h5 class="card-title">Nuevo Banner</h5>
          
        </div>
        <hr>
      {!!Form::open(['wire:submit.prevent'=>'create','method'=>'put'])!!}
        <div class="row">
          <div class="form-group col-6">
                {!! Form::label('nombre', 'Nombre') !!}
                {!! Form::text('nombre',null, ['class'=>
                'form-control',
                'wire:model'=>'nombre',
                'placeholder'=>'Ingrese nombre']) !!}
                @error('nombre')
                    <span class="text-danger">{{$message }}</span>
                @enderror
          </div>
          <div class="form-group col-2">
          </div>
          <div class="form-group col-4" >
            {!! Form::label('estado', 'Estado') !!}
            <br>
            <label>
               <input type="radio" name="estado" value="1" wire:model=estado checked>
               Publicado
           </label>
           
           <label>
               <input type="radio" name="estado" value="0"wire:model=estado>
               Borrador
           </label>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-6">
              <div class="row" style="margin: 0 0 0 0">
                  {!! Form::label('adjunto', 'Adjunto') !!}
                  {!! Form::text('adjunto',null, ['class'=>
                  'form-control',
                  'wire:model'=>'adjunto',
                  'placeholder'=>'Ingrese links de adjuntos']) !!}
                  <br>
                  @error('adjunto')
                      <span class="text-danger">{{$message }}</span>
                  @enderror
              </div>
              <div class="row" style="margin: 3rem 0 4rem 0">
                <div class="col-2">
                  {!! Form::label('imagen', 'Imagen') !!}
                  </div>
                  <div class="col">
                    {!! Form::file('imagen',['accept'=>'image/*','wire:model'=>'imagen'])!!}
                  </div>
                  <hr>
                @error('imagen')
                <span class="text-danger">{{$message }}</span>
                @enderror
              </div>
          </div>
          @if ($imagen)
              <div class="col-4 justify-content-center "style="margin: 0 10rem 0 10rem ">
                  <div class="img_noti" >
                      <img class="d-block w-100" src="{{$imagen->temporaryURL()}}" alt="">
                  </div>
              </div>
              
          @endif
      </div>
      {{-- ************************************************ --}}
        <button type="submit" class="btn btn-personal" >
          Nuevo Banner
        </button>
        {!!Form::close()!!}
    </div>
  </div>
</div>
@push('js')
<script src="{{ asset('js/sweetalert.js') }}"></script>
<script>
  Livewire.on('des_hau',posId => {
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
          Livewire.emitTo('admin.banners-index','deshabilitar',posId);
              Swal.fire(
              'Proceso Ejecutado!',
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
              Livewire.emitTo('admin.banners-index','deshabilitar',posId);
              Swal.fire(
              '¡Habilitada!',
              'LEste banner ha sido habilitado.',
              'success'
          )
          
      }
  })
});
</script>
@endpush



