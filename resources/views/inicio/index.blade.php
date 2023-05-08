@extends('layouts.plantilla')

@section('title', 'Somos Más')

@section('content1')
    {{-- *********** menu desplegable *********************** --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Tu SGSST
        </a>
        <ul class="dropdown-menu bg" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" style="" href="#induccion">
                    Programa De Formacion</a></li>
            <li><a class="dropdown-item" style="" href="#medicina">
                    Medicina Preventiva</a></li>
            <li><a class="dropdown-item" style="" href="#seguridadindustrial">
                    Seguridad Industrial</a></li>
            <li><a class="dropdown-item" style="" href="#seguridadvial">
                    Seguridad Vial</a></li>
            <li><a class="dropdown-item" style="" href="#avance">
                    Avance Del SGSST</a></li>
            <li><a class="dropdown-item" style="" href="{{ route('inicio.actividad') }}">
                    Actividad Del Mes</a></li>
            <li><a class="dropdown-item" style="" href="{{ route('inicio.portales') }}">
                    Portales SGSST</a></li>
        </ul>
    </li>
    {{-- *********** fin  menu desplegable *********************** --}}
@endsection

@section('content')
    <div id="app">
        <banner/>
    </div>
    
    {{-- Contenido Principal --}}
<main class="container d-flex justify-content-center align-items-center p-5 pr-10">
        {{-- <div class="row"> --}}
            <div class="col-12">
                <div id="birthday">
                    <birthday/>
                </div>
                <br>
                <hr>
                <br>
                <div id="noticia">
                    <noticia_des/>
                </div>
                <br>
                <hr>
                <br>
                <section class="">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <h2 class="titulo">Inducción</h2>
                            <hr class="line-title">
                        </div>
                    </div>
                    <br>
    
                    <div class="container-1">
    
                        <div class="card-1">
                            <img src="{{ asset('images/induccion1.jpg') }}" alt="">
                            <h4 style="text-align: justify">Inducción Colaboradores áreas administrativas.</h4>
                            <p style="text-align: justify">
                                Bienvenido! Para nosotros tu bienestar es muy importante, disfruta de esta
                                sección donde podrás entender conceptos
                                básicos de nuestro sistema de gestión de seguridad y salud en el trabajo.
                                Tu compromiso y el nuestro es velar por tu seguridad.
    
                            </p>
    
                            <a href="https://forms.gle/yCHoN6QrjfK2RVZC9" class="btn btn-outline-dark" target="_blank"><i
                                    class="bi bi-arrow-right"></i> Ingresar</a>
    
                        </div>
    
                        <div class="card-1">
                            <img src="{{ asset('images/induccion2.jpg') }}" alt="">
                            <h4 style="text-align: justify">Inducción Colaboradores técnicos y operativos.</h4>
                            <p style="text-align: justify">
                                Bienvenido! Tu trabajo es fundamental para el desarrollo del negocio, queremos
                                garantizar que lo realices con seguridad.
                                En esta sección conocerás a profundidad la manera de controlar y gestionar los riesgos
                                asociados a tu actividad,
                                tu compromiso y el nuestro es velar por tu bienestar.
    
                            </p>
    
                            <a href="https://forms.gle/3Wiikuws4TMMqEiTA" class="btn btn-outline-dark" target="_blank"><i
                                    class="bi bi-arrow-right"></i> Ingresar</a>
    
                        </div>
    
                    </div>
    
    
                </section>
                <br>
                <hr>
                <br>
                <div id="formaciones_mes">
                    <formaciones_mes/>
                </div>
                <br>
                <hr>
                <br>
                <section id="formaciones Comites" class="d-flex justify-content-center align-items-center p-2">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <h2 class="titulo">Formaciones Comités</h2>
                            <hr class="line-title">
                            <br>
                        </div>

                        <div class="comites row">
                            <div class="col-3 p-2">
                                <div class="card">
                                    <img src="{{ asset('images/copasst.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Formación integrantes del Copasst</h5>
                                        <p class="card-text">Dirigida a los integrantes del Copasst.</p>
                                        <p class="card-text">Conoce los aspectos básicos de entrada del Copasst.
                                        </p>
                                        <br>
                                        <a href="https://forms.gle/K9qonnyf7TxdHNLy9" class="btn btn-outline-dark"
                                            target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3 p-2">
                                <div class="card" style="border-color: #FE3EB2">
                                    <img src="{{ asset('images/convivencia.jpg') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Formación integrantes comité de convivencia</h5>
                                        <p class="card-text">Dirigida a los integrantes del comité. </p>
                                        <p class="text-justify crad-text"> Conoce los aspectos básicos de entrada del
                                            comité. </p>
                                        <br>
                                        <a href="https://forms.gle/426pemCcEFMCFG228" class="btn btn-outline-dark"
                                            target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div class="card" style="border-color: #FE3EB2">
                                    <img src="{{ asset('images/vial.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Formación integrantes del comité vial</h5>
                                        <p class="card-text">Dirigida a los integrantes del comité. </p>
                                        <p class="text-justify card-text">Conoce los aspectos básicos de entrada del
                                            comité.

                                        </p>
                                        <br>
                                        <a href="https://forms.gle/CzSyNU3jCNRFRFuB8" class="btn btn-outline-dark"
                                            target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 p-2">
                                <div class="card" style="border-color: #FE3EB2">
                                    <img src="{{ asset('images/ambiental.jpg') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Formación integrantes del comité ambiental</h5>
                                        <p class="card-text">Dirigida a los integrantes del comité. </p>
                                        <p class="text-justify card-text"> Conoce los aspectos básicos de entrada del
                                            comité.
                                        </p>
                                        <br>
                                        <a href="https://forms.gle/YauqYbGhC6Exoxu69" class="btn btn-outline-dark"
                                            target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <br>
                <hr>
                <br>
                <section id="Medicina" class="d-flex justify-content-center align-items-center p-2">
                    <div class="row">
                        <div class="col-6 offset-3 ">
                            <h2 class="titulo">Medicina Preventiva</h2>
                            <hr class="line-title">
                            <br>
                        </div>

                        <div class="col-12">
                            <p class="texto">A través de las actividades de esta sección juntos identificaremos
                                situaciones de riesgo asociadas al COVID 19 y frente a otras situaciones que puedan
                                afectar tu salud</p>
                        </div>

                        <div class="row">
                            <div class="cajon col-3 p-2">
                                <a href="https://forms.gle/RuYsLP2iRA1N5wEh9" target="_blank">
                                    <button class="botonn">
                                        <div>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span><i class="fa-solid fa-virus-covid"></i></span>
                                            <h5 class="card-title">Encuesta de prevención COVID-19</h5>
                                            <p class="card-text h6">Debes realizarla mínimo 1 vez por semana. Tiempo
                                                estimado 1 minuto.</p>
                                            <span class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i>
                                                Ingresa</span>
                                        </div>
                                    </button>
                                </a>
                            </div>

                            <div class="cajon col-3 p-2">
                                <a href="https://forms.gle/LRGMRZASXysFLKKj9" target="_blank">
                                    <button class="botonn">
                                        <div>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span><i class="fa-solid fa-user-pen"></i></span>
                                            <h5 class="card-title">Encuesta de perfil sociodemográfico</h5>
                                            <p class="card-text h6">Debes realizarla en Enero 2022. Tiempo estimado 5
                                                minutos.</p>
                                            <span class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i>
                                                Ingresa</span>
                                        </div>
                                    </button>
                                </a>
                            </div>

                            <div class="cajon col-3 p-2">
                                <a href="https://forms.gle/3jxiPHVHRMWnivkp7" target="_blank">
                                    <button class="botonn">
                                        <div>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span><i class="fa-solid fa-people-carry-box"></i></span>
                                            <h5 class="card-title">Gestión de riesgos ergonómicos</h5>
                                            <p class="card-text h6">Enfoque cargas y posturas. Tiempo estimado 5 minutos.
                                            </p>
                                            <span class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i>
                                                Ingresa</span>
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <hr>
                <br>
                <section id="SeguridadIndustrial" class="d-flex justify-content-center align-items-center p-2">
                    <div class="row">
                        <div class="col-6 offset-3">
                            <h2 class="titulo">Seguridad Industrial</h2>
                            <hr class="line-title">
                            <br>
                        </div>

                        <div class="col-12">
                            <p class="texto">Eres el actor principal en la identificación de los peligros y riesgos
                                que se puedan presentar en tu área de trabajo; con tu ayuda los identificaremos y
                                gestionaremos mucho mejor.</p>
                        </div>

                        <div class="row">
                            <div class="cajon col-3 p-2">
                                <a href="https://forms.gle/sFSS61k8rNVyuuSN7" target="_blank">
                                    <button class="botonn">
                                        <div>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span><i class="fa-solid fa-file-pen"></i></span>
                                            <h5 class="card-title">Reportes de peligros y riesgos</h5>
                                            <p class="card-text h6">Realízala en enero 2022. Tiempo estimado 5 minutos;
                                                aplica para todos los colaboradores.</p>
                                            <span class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i>
                                                Ingresa</span>
                                        </div>
                                    </button>
                                </a>
                            </div>

                            <div class="cajon col-3 p-2">
                                <a href="https://forms.gle/gVAaSMWJjCnLbica7" target="_blank">
                                    <button class="botonn">
                                        <div>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span><i class="fa-solid fa-hand-holding-heart"></i></span>
                                            <h5 class="card-title">Como es tu gestión frente al SGSST</h5>
                                            <p class="card-text h6">Realízala en enero 2022. Tiempo estimado 5 minutos;
                                                aplica para todos los colaboradores.</p>
                                            <span class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i>
                                                Ingresa</span>
                                        </div>
                                    </button>
                                </a>
                            </div>

                            <div class="cajon col-3 p-2">
                                <a href="https://forms.gle/s8ns9EERMzbMUoNv8" target="_blank">
                                    <button class="botonn">
                                        <div>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span class="hover"></span>
                                            <span><i class="fa-solid fa-mug-hot"></i></span>
                                            <h5 class="card-title">Tomémonos un <br> café</h5>
                                            <p class="card-text h6">Requieres atención o apoyo frente algún peligro. <br>
                                                Solicítalo aquí.</p>
                                            <span class="btn btn-outline-dark"><i class="bi bi-arrow-right"></i>
                                                Ingresa</span>
                                        </div>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        {{-- </div> --}}
</main>

<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="{{ asset('js/new.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/splider.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



@endsection
