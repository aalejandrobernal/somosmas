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
            
                <div class="col-3 ml-5">
                    
                <h5 class="emergencia">En caso de emergencias   
                    <i class="fa-sharp fa-solid fa-phone-volume"></i> </h5>
                    <br>
                    <p style="font-size: 14px; text-align: center; color: white"> 
                    Número general de Emergencias: 123
                    <br>
                    Número general Cruz Roja: 132
                    <br>
                    Número general Policía: 112
                    <br>
                    Número general Bomberos: 119
                    <br>
                    <br>
                    Estamos para servirte, cuenta con nosotros WhatsApp profesionales HSE</p>
                    <div class="wp">   
                        <a href="https://wa.me/573118076877" data-bs-toggle="tooltip" data-placement="top" title="Chía"
                            class="btn btn-success" target="_blank"> <i class="bi bi-whatsapp"></i></a>
                        <a href="https://wa.me/573016373640" data-bs-toggle="tooltip" data-placement="top" title="Chía"
                            class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://wa.me/57{{ env('FUSA_WHASTAPP') }}" data-bs-toggle="tooltip" data-placement="top" 
                            title="Fusagasugá" class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                        <a href="https://wa.me/57{{ env('BOGOTA_WHASTAPP') }}" data-bs-toggle="tooltip" data-placement="top" 
                            title="Bogotá" class="btn btn-success" target="_blank"><i class="bi bi-whatsapp"></i></a>
                    </div>
                    <br>
                    <div style="font-size: 14px" class="sedes">
                        Bogotá - Chía - Fusagasugá 
                    </div>
                </div>
                
                <div style="font-size: 14px" class="col-4">
                    <h5><i style="color: #FE3EB2" class="fa-solid fa-location-dot"></i><strong style="color: #FE3EB2">  Direcciones oficinas</strong></h5>
                    <ul style="color: white">
                        <li>Oficina Bogotá: Calle 127b bis # 49-48 - Barrio Tierra Linda.</li>
                        <li>Oficina Navega: Carrera 10 # 0-49 Sur Local 148 C.C. Vivenza Plaza - Chía, Cundinamarca.</li>
                        <li>Oficina Libre: Carrera 6 # 07-36 Local 317 C.C. Escorial Center Fusagasugá, Cundinamarca.</li>
                    </ul>  
                    
                    <h5><i style="color: #FE3EB2" class="fa-solid fa-house-medical"></i><strong style="color: #FE3EB2"> Clínicas ARL Sura</strong></h5>
                    <ul style="color: white">
                        <li>Cruz Roja: Autopista Norte con calle 145 - Bogotá.</li>
                        <li>Clínica los Nogales: Calle 95 # 23-61 - Bogotá.</li>
                        <li>Clínica VIP: Calle 97 # 23-10 - Bogotá.</li>
                        <li>Hospital San Antonio de Chía: Carrera 10 # 8-24 - Chía, Cundinamarca.</li>
                        <li>Hospital San Rafael: Diagonal 23 # 12-64 - Fusagasugá, Cundinamarca.</li>
                        <li>Clínica Belén: Calle 17 # 12-27 - Fusagasugá, Cundinamarca.</li>
                    </ul> 
                </div>

                <div style="font-size: 14px" class="col-4">
                    <h5><i style="color: #FE3EB2" class="fa-solid fa-phone"></i><strong style="color: #FE3EB2"> Línea de reporte de AT (ARL Sura)</strong></h5>
                    <ul style="color: white">
                        <li>Oficina Bogotá, Chía y Fusagasugá: 4055911</li>
                    </ul>

                    <h5><i style="color: #FE3EB2" class="fa-solid fa-shield-halved"></i><strong style="color: #FE3EB2"> Cuadrantes de Policía</strong></h5>
                    <ul style="color: white">
                        <li>Oficina Bogotá: Cuadrante = 3002005460</li>
                        <li>Oficina Chía: Caí Guaymaral = 3490791 Cuadrantes 3017791812 3212464768</li>
                        <li>Oficina Fusagasugá: Cuadrante = 3212475311</li>
                    </ul>
                    
                    <h5><i style="color: #FE3EB2" class="fa-solid fa-fire-extinguisher"></i><strong style="color: #FE3EB2"> Bomberos</strong></h5>
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