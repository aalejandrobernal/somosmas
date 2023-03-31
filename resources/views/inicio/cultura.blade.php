@extends('layouts.plantilla')

@section('title', 'Cultura')

@section('content1')
    <li class="nav-item dropdown">
        <a class="nav-link text-white" href="{{ route('inicio.index') }}" id="navbarDropdown" role="button"
            aria-expanded="false">
            Tu SGSST</a>
    @endsection

    @section('content')


        <main class="container d-flex justify-content-center align-items-center p-5">

            <div class="container text-center aling-items-center">
                <div class="row aling-items-center">
                    <div class="col-6 offset-3">
                        <h2 class="titulo" id="fechas">Fechas Especiales</h2>
                        <hr class="line-title">
                    </div>
                    <div class="col-12">
                        <p>
                            Un pequeño homenaje para las mujeres que hacen parte de nuestro ecosistema.
                            ¡¡¡Feliz día para todas ustedes!!!
                        </p>
                    </div>
                    <div class="col-12">

                        <a href="https://youtu.be/d1drzgRUekY" class="glightbox play-btn" target="_blank">
                            <img style="width: 100%; height:100%" src="{{ asset('images/banners/mujer.png') }}" alt="">
                        </a>

                    </div>
                </div>

                <p>
                    <br>
                </p>

                <div class="row">
                    <div class="col-12 p-3">
                        <p>Descubre a continuación la versión completa de cada uno de los videos de nuestras compañeras. Haz
                            clic sobre el video que quieras visualizar.</p>
                    </div>
                </div>

                <section id="momentos">
                    <!-- Image1 !-->
                    <div tabindex="-1" aria-labelledby="modal01" aria-hidden="true" class="modal fade" id="modal01">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/bleidy.mp4" title=""
                                    allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                    <!-- Image2 !-->
                    <div tabindex="-1" aria-labelledby="modal02" aria-hidden="true" class="modal fade" id="modal02">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/catalina.mp4"
                                    title="" allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                    <!-- Image3 !-->
                    <div tabindex="-1" aria-labelledby="modal03" aria-hidden="true" class="modal fade" id="modal03">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/claudiap.mp4"
                                    title="" allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                    <!-- Image4 !-->
                    <div tabindex="-1" aria-labelledby="modal04" aria-hidden="true" class="modal fade" id="modal04">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/liliana.mp4" title=""
                                    allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                    <!-- Image5 !-->
                    <div tabindex="-1" aria-labelledby="modal05" aria-hidden="true" class="modal fade" id="modal05">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/maribel.mp4" title=""
                                    allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                    <!-- Image6 !-->
                    <div tabindex="-1" aria-labelledby="modal06" aria-hidden="true" class="modal fade" id="modal06">
                        <div class="modal-dialog modal-lg modal-dialog-center">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/monica.mp4"
                                    title="" allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                    <!-- Image7 !-->
                    <div tabindex="-1" aria-labelledby="modal07" aria-hidden="true"  class="modal fade" id="modal07">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <video id="video" class="video" src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/olga.mp4" title=""
                                    allowfullscreen="" type="video/mp4" controls=""></video>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="prueba">
                    <div class="carrusel1">
                        <div class="carrusel-items1">
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal01">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/bleidy.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal02">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/catalina.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal03">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/claudia.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal04">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/liliana.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal05">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/maribel.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal06">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/monica.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="carrusel-item1">
                                <a href="#!" data-bs-toggle="modal" data-bs-target="#modal07">
                                    <img class="w-100 mb-4 rounded nn" src="{{ asset('images/galeriav/olga.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="podcast" class="d-flex justify-content-center align-items-center pt-4">
                    <div class="row">

                        <div class="col-4 offset-4">
                            <h2 class="titulo">Tus Podcast</h2>
                            <hr class="line-title">
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="texto">Te gustaría escuchar desde la voz de los diferentes lideres de cada una
                                    de las empresas, las últimas novedades y lanzamientos. ¡¡Tus Podcast te esperan!!</p>
                            </div>
                        </div>

                        <div class="container-4">
                            <div class="card-4">
                                <img src="{{ asset('images/logos/spotify.png') }}" alt="">
                                <h4 style="text-align: justify">Ahora Somos Liwa.</h4>
                                <p style="text-align: justify">
                                    Nacimos digitales, somos digitales. Liwa significa acceso y conexión. Liwa es donde el
                                    propósito se encuentra con la innovación.

                                </p>
                                <div class="bordes">
                                    <a href="https://open.spotify.com/episode/31wpAQW8tTaMMQYWdwE2FT" class="btn-spotify" target="_blank">
                                        <i class="bi bi-arrow-right"></i>Ingresar</a>
                                </div>
                            </div>

                            <div class="card-4">
                                <img src="{{ asset('images/logos/spotify.png') }}" alt="">
                                <h4 style="text-align: justify">¿Por que cebra y no unicornio?</h4>
                                <p style="text-align: justify">
                                    En este episodio invitamos a Juan Diego Gomez uno de los lideres del ecosistema Liwa,
                                    quien nos aclara ¿Por que cebra y no unicornio?
                                </p>

                                <div class="bordes">
                                    <a href="https://open.spotify.com/episode/6PQZIHp9RfUZiEB0sCXBOT" class="btn-spotify" target="_blank">
                                        <i class="bi bi-arrow-right"></i> Ingresar</a>       
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="comite" class="d-flex justify-content-center align-items-center p-2">
                    <div class="row aling items center">

                        <div class="col-8 offset-2">
                            <h2 class="titulo">Conoce tu comité de diversidad e inclusión.</h2>
                            <hr class="line-title">
                            <br>
                        </div>
                    
                        <div class="col-12 texto">
                            <p>En nuestra organización celebramos la Diversidad y le apostamos a la inclusión; es por eso
                                que desde el segundo semestre del 2021 se creó un comité que tiene como objetivo
                                principal “Garantizar y promover al interior de la organización la correcta valoración de la
                                diversidad de pensamiento, creencias e identidades, fomentando ambientes y formas de
                                expresión equitativas e igualitarias que logren un mayor bienestar en la compañía.</p>
                        </div>

                        <div class="col-5 pt-3 fondo" style="border-radius: 20px">
                            <img src="{{ asset('images/juanma.jpg') }}" style="border-radius: 20px" class=""
                                alt="..." width="80%" height="45%"><br>
                                <br>
                            <p class="h1 juan">Juan Manuel</p>
                            <br>
                            <p class="" style="color: black; font-size:180%;"> Presidente del comité de <br>
                                diversidad e inclusión.</p>
                                <br>
                                <span><i style="font-size: 60px" class="fa-solid fa-people-group"></i></span>
                        </div>
                        
                        <div class="col-6 hola fondo1  ">
                            <h3 style="text-align: center">Comité de diversidad e inclusion.</h3>
                            <p style="text-align: justify">¿Quiénes hacen parte de nuestro comité?
                                Somos un grupo de personas, que creemos que fomentar la empatía nos ayuda a reconocer la
                                diversidad, creemos en el respeto y valoramos la diferencia.
                            </p>
                            <ul class="list-group">
                                <li class="list-group-item active"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Presidente: Juan M. Sanchez
                                    – Sunco Energy</li>
                                <li class="list-group-item"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Secretaria: Catalina
                                    Gallego – Suncolombia</li>
                                <li class="list-group-item active"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Promotor: Ivon Romero –
                                    Liwa</li>
                                <li class="list-group-item"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Contenidos: Irana Carrión –
                                    Suncolombia</li>
                                <li class="list-group-item active"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Integrante: Liliana Ravelo
                                    – Suncolombia</li>
                                <li class="list-group-item"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Integrante: Juan Diego
                                    Gómez - Suncolombia</li>
                                <li class="list-group-item active"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Integrante: Catalina
                                    Jiménez – Suncolombia</li>
                                <li class="list-group-item"><i style="color: #FE3EB2" class="fa-solid fa-circle-check"></i> Integrante: Iván Diaz -
                                    Suncolombia</li>
                            </ul>
                            <br>

                            <div class="h6 p-1" style="background-color: #FE3EB21A; height:8%; border-radius:10px;">
                                <p class="h6" style="text-align: center"><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i><i class="fa-solid fa-angle-right"></i> Pronto conocerás mas sobre nosotros, algunas de las actividades que
                                    hemos realizado y como puedes hacer parte de ellas.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <br>
                <br>

                <section id="mantentevisible" class="d-flex justify-content-center align-items-center p-2">
                    <div class="row aling items center">
                        <div class="col-4 offset-4">
                            <h2 class="titulo">Mantente Visible</h2>
                            <hr class="line-title">
                            <br>
                        </div>

                        <div class="col-12 texto">
                            <p><b>Participa!!</b> Compártenos tus opiniones, películas, fotografías favoritas, libros, planes
                                de fin de semana, entre miles de temáticas más. <br> Pronto vendrán concursos, foros, donde
                                premiaremos el contenido con más likes, apoya a tus compañeros y también atrévete a ser parte
                                de "Likes", mes a mes premiaremos el mejor contenido. <br> <b>¿Cuál contenido será el más popular?
                                ¡¡Descubrámoslo juntos, no te los pierdas!!</b> </p>
                        </div>

                        <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body visible">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/Jhon.jpg') }}" alt="" class="foto-video">
                                        <div class="datos pt-2">
                                            <h5 style="color: black">Jhon López</h5>
                                            <h5 style="color: gray">Suncolombia</h5>
                                            <h5 style="font-size: 12px; color: rgb(181, 179, 179)">jlopez@suncolombia.com</h5>   
                                        </div>
                                    </div>
                                    <hr class="line-title2">
                                <div>
                                <br>
                                <p style="text-align: justify" class="fs-6 lh-1">“Hola un saludo y abrazo muy especial para todos, hoy les
                                    quiero compartir el valor de la experiencia en la vida profesional lo cual
                                    podrás comprender a través de un libro que te recomiendo mucho. Además te
                                    brindare unos tips de crecimiento personal y laboral. Descúbrelos !!"</p>
                                <br>
                                <div class="padrevideo1">
                                    <div class="video1">
                                        <div class="ratio ratio-16x9">
                                            <video src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/Jhon.mp4" title="" allowfullscreen="" 
                                            type="video/mp4" controls="">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body visible">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/carlos.jpg') }}" alt="" class="foto-video">
                                        <div class="datos pt-2">
                                            <h5 style="color: black">Carlos Herrada</h5>
                                            <h5 style="color: gray">Liwa</h5>
                                            <h5 style="font-size: 12px; color: rgb(181, 179, 179)">carlos.herrada@cellvoz.com.co</h5>   
                                        </div>
                                    </div>
                                    <hr class="line-title2">
                                <div>   
                                <br>
                                <p style="text-align: justify" class="fs-6 lh-1">“Hola estoy muy feliz de compartir con ustedes a través de
                                    este canal, una película basada en hechos reales muy especial para esta época de
                                    fin de año y unión familiar que nos invita a trabajar por nuestros sueños y a
                                    superar cualquier limitación que en muchos casos pueden ser oportunidades, un
                                    abrazo a todos. Descúbrela !!"</p>

                                <div class="padrevideo1">
                                    <div class="video1">
                                        <div class="ratio ratio-16x9">
                                            <video src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/carlos.mp4" title="" allowfullscreen="" 
                                                type="video/mp4" controls="">
                                            </video>    
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body visible">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/ximena.jpg') }}" alt="" class="foto-video">
                                        <div class="datos pt-2">
                                            <h5 style="color: black">Ximena González</h5>
                                            <h5 style="color: gray">Libre</h5>
                                            <h5 style="font-size: 12px; color: rgb(181, 179, 179)">xifagori@hotmail.com</h5>
                                        </div>
                                    </div>
                                    <hr class="line-title2">
                                <div>
                                <br>
                                <p style="text-align: justify" class="fs-6 lh-1">“Hola estoy muy feliz de saludarlos a todos y compartirles mis
                                    mejores recomendados; conocerán paisajes maravillosos, un libro que me envolvió
                                    con su historia y una película que te invita a valorar un gran tesoro como es tu
                                    familia. Regálame muchos likes !!"</p>

                                <div class="padrevideo1">
                                    <div class="video1">
                                        <div class=" ratio ratio-16x9">
                                            <video src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/ximena.mp4" title="" allowfullscreen="" 
                                                type="video/mp4" controls="">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body visible">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/paula.jpeg') }}" alt="" class="foto-video">
                                        <div class="datos pt-2">
                                            <h5 style="color: black">Paula Oviedo</h5>
                                            <h5 style="color: gray">Liwa</h5>
                                            <h5 style="font-size: 12px; color: rgb(181, 179, 179)">paula.oviedo@cellvoz.com.co</h5>   
                                        </div>
                                    </div>
                                    <hr class="line-title2">
                                <div>                                      
                                <br>
                                <p style="text-align: justify" class="fs-6 lh-1">"Hola! que alegría saludarlos soy Paula y a través de "Somos
                                    más" les quiero recomendar dos excelentes libros desarrollados en
                                    ambientaciones históricas y llenas de misterio que estoy segura los conectarán
                                    con sus personajes. Les envió un fuerte abrazo a todos."</p>

                                <div class="padrevideo1">
                                    <div class="video1">
                                        <div class=" ratio ratio-16x9">
                                            <video src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/paula.mp4" title="" allowfullscreen=""
                                                type="video/mp4" controls="">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body visible">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/vanesa.jpg') }}" alt="" class="foto-video">
                                        <div class="datos pt-2">                 
                                            <h5 style="color: black">Vanesa Pinzón</h5>
                                            <h5 style="color: gray">Suncoenergy</h5>
                                            <h5 style="font-size: 12px; color: rgb(181, 179, 179)">vanesa.pinzon@suncoenergy.com.co</h5>
                                        </div>
                                    </div>
                                    <hr class="line-title2">
                                <div>
                                <br>
                                <p style="text-align: justify" class="fs-6 lh-1">"Vengo con unos recomendados que te van a encantar; estoy
                                    segura de que no conocías lugares hermosos y llenos de historias de piratas,
                                    también descubriremos un lugar para que practiques tus deportes extremos y unos
                                    libros fascinantes. Se que me darás tu like.”</p>

                                <div class="padrevideo1">
                                    <div class="video1">
                                        <div class="ratio ratio-16x9">
                                            <video src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/vanesa.mp4" title="" allowfullscreen="" 
                                                type="video/mp4"controls="">
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="col-6 p-3">
                            <article class="card h-100">
                                <div class="card-body visible">
                                    <div class="d-flex mb-3">
                                        <img src="{{ asset('images/anamaria.jpg') }}" alt="" class="foto-video">
                                        <div class="datos">             
                                            <h5 style="color: black">Ana Maria</h5>
                                            <h5 style="color: gray">Navega</h5>
                                            <h5 style="font-size: 12px; color: rgb(181, 179, 179)">ana.mondragon@navega.com.co</h5> 
                                        </div>
                                    </div>
                                    <hr class="line-title2">
                                <div>                               
                                <br>
                                <p style="text-align: justify" class="fs-6 lh-1">"Hola soy Ana María y espero sorprenderte con mis
                                    recomendados, un lugar maravilloso con una energía única y al que me gustaría
                                    invitarlos, un excelente libro de crecimiento personal y una película
                                    inolvidable. Espero tus corazones!!"</p>
                                
                                <div class="padrevideo1">
                                    <div class="video1">
                                        <div class=" ratio ratio-16x9">
                                            <video src="https://liwarepo.s3.us-west-2.amazonaws.com/somosmas/anamaria.mp4" title="" allowfullscreen="" 
                                                type="video/mp4" controls="">                                               
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>

                <section id="#momentos" class="d-flex justify-content-center align-items-center p-2">
                    <div class="row aling items center">
                        <div class="col-4 offset-4">
                            <h2 class="titulo">Momentos</h2>
                            <hr class="line-title">
                        </div>

                        <div class="col-12 texto">
                            <p>Quien dijo que el tiempo no se puede detener, disfruta de esta galería.</p>
                        </div>
                    </div>
                </section>

                <section id="galleryy">
                    <div class="carrusel">
                        <div class="carrusel-items">
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/0.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/1.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/2.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/3.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/4.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/5.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/6.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/7.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/8.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/9.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/10.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/11.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/12.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/13.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/14.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/15.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/16.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/17.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/18.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/19.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/20.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/21.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/22.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/23.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/24.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/25.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/26.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/27.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/28.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/29.jpg') }}" alt="">
                            </div>
                            <div class="carrusel-item">
                                <img src="{{ asset('images/galeria/30.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </section>
        </main>

        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/modal_cultura.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/modal_cultura2.js') }}"></script>
    @endsection
