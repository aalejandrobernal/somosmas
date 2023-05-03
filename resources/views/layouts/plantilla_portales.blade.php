<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.icons-1.10.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min-4.6.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts/puget.css')}}">
        
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/iconify.min.js') }}"></script>
    <script src="{{ asset('js/fontawesome.js') }}"></script>
    <script src="{{ asset('js/bootstrap-5.1.bundle.min.js') }}"></script>

</head>



@yield('content1')

</li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#redapoyo">Red De Apoyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-light" style="text-decoration: none"
                            href="{{ route('inicio.portales') }}"><i class="bi bi-house"></i> Regresar</a>
                    </li>
                </ul>


                <div class="pr-3">
                    <a class="bienvenido text-white" style="text-decoration: none">Bienvenido: <b>
                            {{ auth()->user()->nombre }}</b></a>
                </div>

                <div class="pr-3">
                    @if (auth()->user()->foto)
                        <img src="/images/fotos/{{ auth()->user()->foto }}" alt="" class="usuario">
                    @else
                        <img src="{{ asset('images/fotonone.jpeg') }}" class="usuario" alt="">
                    @endif
                </div>


                <li class="nav-link dropdown p-0">
                    <a class="nav-link dropdown-toggle text-white mr-5 pt-2 mt-2" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none"></a>
                        <ul class="dropdown-menu bg" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item mr-3" style="" href="{{ route('inicio.editar_perfil') }}">
                            Mi Perfil</a></li>
                            <li><a class="dropdown-item" id="sesion" style="" href="{{ route('login.destroy') }}">
                            Cerrar Sesión</a></li>
                        </ul>   
                </li>

            </div>
        </div>
    </nav>

@yield('content2') 

</body>

<section id="redapoyo" class="section_footer d-flex justify-content-center align-items-center rounded">
    <div class="footer_bg">
        <h2 class="footer_red">RED DE APOYO     <i class="fa-solid fa-circle-info"></i></h2>
            <div class="row p-3">
            
                <div class="col-3 pl-5">
                    
                    <h5 class="emergencia"><i class="fa-sharp fa-solid fa-phone-volume"></i>
                    <strong>En caso de emergencias</strong></h5> 
                    <ul style="font-size: 14px; color: white">
                        <li>Número general de Emergencias: 123</li>
                        <li>Número general Cruz Roja: 132</li>
                        <li>Número general Policía: 112</li>
                        <li>Número general Bomberos: 119</li>
                    </ul> 
                    
                    <h5 class="emergencia"><i class="fa-sharp fa-solid fa-phone-volume"></i>
                    <strong>Líneas gratuitas de atención <br> en salud mental</strong></h5>
                    <ul style="font-size: 14px; color: white">
                        <li>Línea 106 y su chat 300 754 8933 (ciudadanía en general).</li>
                        <li>Línea Psicoactiva 01 8000 112 439 (Prevención y riesgo de consumo de sustancias psicoactivas).</li>
                        <li>Línea Púrpura 01 8000 112 137 (Mujeres).</li>
                        <li>Línea Calma 01 8000 423 614 (Hombres).</li>
                        <li>Línea Diversa 310 864 4214 (Población LGBTI).</li>
                    </ul>
                    
                </div>
                <div class="col-3">
                    <p style="font-size: 16px; text-align: center; color: white">
                    Estamos para servirte, <br> cuenta con nosotros. WhatsApp</p><br>
                    <h5 style="text-align: center; color: white"><strong>Gestión Humana LIWA</strong></h5>
                    <div style="font-size: 14px; color: white"class="wp"> 
                        <div class="icon">
                            <a href="https://wa.me/573112537491" data-bs-toggle="tooltip" data-placement="top" title="Lizeth Ortega"
                            class="btn btn-success" target="_blank"> <i class="bi bi-whatsapp"></i></a> Lizeth Ortega <br>
                            <a href="https://wa.me/573132203908" data-bs-toggle="tooltip" data-placement="top" title="Paula Hernandez"
                                class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>  Paula Hernandez  
                        </div><br>
                        <h5 style="text-align: center; color: white"> <strong>Profesionales HSE</strong></h5>
                        <div class="icon">
                           
                            <a href="https://wa.me/57{{ env('CHIA_WHASTAPP') }}" data-bs-toggle="tooltip" data-placement="top" 
                                title="Daniela Cortés-Chía" class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>  Daniela Cortés-Chía<br>
                            <a href="https://wa.me/57{{ env('FUSA_WHASTAPP') }}" data-bs-toggle="tooltip" data-placement="top" 
                                title="Dennis Tello-Fusa" class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>    Dennis Tello-Fusa
                        </div>
                    </div>
                </div>
                <div style="font-size: 14px; color: white" class="col-3 p-0">
                    <h5><i style="color: white" class="fa-solid fa-location-dot"></i><strong>  Direcciones oficinas</strong></h5>
                    <ul style="color: white">
                        <li>Oficina Bogotá: Calle 163a # 20 - 15 Piso 5 - Toberin.</li>
                        <li>Oficina Chía: Carrera 10 # 0-49 Sur Local 148 C.C. Vivenza Plaza</li>
                        <li>Oficina Fusagasugá: Carrera 6 # 07-36 Local 317 C.C. Escorial Center</li>
                    </ul>  
                    
                    <h5><i style="color: white" class="fa-solid fa-house-medical"></i><strong> Clínicas ARL Sura</strong></h5>
                    <ul style="color: white">
                        <li>Cruz Roja: Autopista Norte con calle 145 - Bogotá.</li>
                        <li>Clínica los Nogales: Calle 95 # 23-61 - Bogotá.</li>
                        <li>Clínica VIP: Calle 97 # 23-10 - Bogotá.</li>
                        <li>Hospital San Antonio de Chía: Carrera 10 # 8-24 - Chía, Cundinamarca.</li>
                        <li>Hospital San Rafael: Diagonal 23 # 12-64 - Fusagasugá, Cundinamarca.</li>
                        <li>Clínica Belén: Calle 17 # 12-27 - Fusagasugá, Cundinamarca.</li>
                    </ul> 
                </div>

                <div style="font-size: 14px; color: white" class="col-3">
                    <h5><i style="color: white" class="fa-solid fa-phone"></i><strong> Línea de reporte de AT <br> (ARL Sura)</strong></h5>
                    <ul style="color: white">
                        <li>Oficina Bogotá, Chía y Fusagasugá: 4055911</li>
                    </ul>

                    <h5><i style="color: white" class="fa-solid fa-shield-halved"></i><strong> Cuadrantes de Policía</strong></h5>
                    <ul style="color: white">
                        <li>Oficina Bogotá: Cuadrante = 3002005460</li>
                        <li>Oficina Chía: Caí Guaymaral = 3490791 Cuadrantes 3017791812 3212464768</li>
                        <li>Oficina Fusagasugá: Cuadrante = 3212475311</li>
                    </ul>
                    
                    <h5><i style="color: white" class="fa-solid fa-fire-extinguisher"></i><strong> Bomberos</strong></h5>
                    <ul style="color: white">
                        <li>Estación de Bomberos Caobos: 6144105-6143290-3822500 - Bogotá.</li>
                        <li>Estación de Bomberos Cedritos: 6724913 - Bogotá.</li>
                        <li>Estación de Bomberos Chía: 8844595-8844587 / 300 1234567</li>
                        <li>Estación de Bomberos Fusagasugá: 8676736 / 311 5853577</li>
                    </ul>
                </div>
            </div>
    </div>      
</section>