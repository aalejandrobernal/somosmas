@extends('layouts.plantilla')

@section('title', 'Actividad del mes')

@section('content1')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="{{route('inicio.index')}}" id="navbarDropdown"
    role="button" aria-expanded="false">
    Tu SGSST</a>
@endsection

@section('content')
        <section id="actividad" class="">
            <div class="pt-3 col-4 offset-4">
                <h2 class="titulo">Actividad del mes</h2>
            </div>


            <div class="container-2">

                <div class="card-2">
                    <img src="{{ asset('images/nm.jpg') }}" alt="">
                    <h4>Tus Representantes</h4>
                    <p style="text-align: justify">
                        Selecciona a los compañeros que quieres que te representen en el Copasst y en el comité de convivencia; recuerda que el copasst es el comité que
                         apoya los temas de seguridad y salud en el trabajo en tu empresa y el de convivencia prevenir el riesgo psicosocial.
                    </p>

                        <a href="https://forms.gle/69qYRLGjVD9cTrNb9" class="btn btn-outline-dark" target="_blank">Ingresa</a>

                </div>

                <div class="card-2">
                    <img src="{{ asset('images/nm1.jpg') }}" alt="">
                    <h4>Tus Representantes</h4>
                    <p style="text-align: justify">
                        Selecciona a los compañeros que quieres que te representen en el Copasst y en el comité de convivencia; recuerda que el copasst es el comité que
                         apoya los temas de seguridad y salud en el trabajo en tu empresa y el de convivencia prevenir el riesgo psicosocial.
                    </p>

                        <a href="https://forms.gle/nVyxfLoVoxeaxMwX7" class="btn btn-outline-dark" target="_blank">Ingresa</a>

                </div>

            </div>


</section>



@endsection
