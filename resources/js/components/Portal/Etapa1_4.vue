<template>
    <div>
        <div style="background-color: rgb(201, 201, 201)">
            <main class="container d-flex p-5">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-8">
                                <h1 class="subtitulo" style="color: #FE3EB2">Sistema de gestión de seguridad
                                    y salud en el trabajo.</h1>
                                <div style="">
                                    <p class="nuevaa h3">
                                        Desarrollamos nuestras actividades
                                        pensando en el bienestar de las personas.</p>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <section id="poldeseguridad" class="container d-flex justify-content">
            <div class="row">
                <div class="col-6 p-3">
                    <p> 
                        <br>
                        <br>
                        <hr>
                    </p>
                    <h4 class="subtitulo">Política de seguridad y salud en el trabajo</h4>
                    <p>
                        "Desde la dirección de Liwa estamos comprometidos con la implementación, desarrollo, mejora continua y
                        cumplimiento legal del sistema de gestión de Seguridad y salud en el trabajo como en nuestra gestión
                        ambiental a través de la asignación de los diferentes recursos necesarios para tal fin; identificando y
                        gestionando los diferentes peligros y riesgos a los que se encuentran expuestos nuestros colaboradores
                        como los terceros al igual que los diferentes aspectos ambientales que se puedan generar durante el
                        desarrollo de nuestras diferentes actividades; vigilando no solo el cumplimiento legal de nuestros
                        procesos sino el de los terceros que hagan parte del desarrollo de nuestras actividades"
                    </p>
                    <h4 class="subtitulo">Objetivos del SGSST</h4>
                    @foreach($objetivos as $objetivo)
                        <p><i class="bi bi-check-circle p-2"></i> {{ $objetivo->nombre }}</p>
                    @endforeach
                </div>

                <div class="col-6">
                    <img class="logo_portal" src="{{ asset('images/portales/about1.jpg') }}" alt="">
                </div>
                
                <div class="col-6">
                    <hr>
                    <h4 class="subtitulo">Etapas 1 a la 4 del SGSST</h4>
                    <p>
                    @foreach($etapas as $index => $etapa)
                    @if($etapa->grupo==1)
                        <a href="#etapa{{$index+1}}" class="btn"><i class="bi bi-check-circle p-2"></i>{{$index+1}}. {{ $etapa->nombre }}</a>
                        <br>
                    @endif
                    @endforeach
                    </p>
                </div>
            </div>
        </section>


    </div>
</template>

<script>
import axios from 'axios';
export default{
    name: 'Etapa1_4',
    data() {
        return {
            galerias: [],
        };
    },
    mounted() {
        this.consultaBase();
    },
    methods: {

        consultaBase() {
            axios.get('/galeriaVue').then((res) => {
                if(res.status == 200) {
                    // console.log(res.data)
                    this.galerias = res.data
                }
            })
            .catch((res) => {
                console.log('error de consulta')
                console.log(res);
            });
        },

    },
</script>