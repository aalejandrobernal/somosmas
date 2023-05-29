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

                        <br>
                        <hr>

                    <h4 class="subtitulo">Política de seguridad y salud en el trabajo</h4><br>
                    <p>
                        "Desde la dirección de Liwa estamos comprometidos con la implementación, desarrollo, mejora continua y
                        cumplimiento legal del sistema de gestión de Seguridad y salud en el trabajo como en nuestra gestión
                        ambiental a través de la asignación de los diferentes recursos necesarios para tal fin; identificando y
                        gestionando los diferentes peligros y riesgos a los que se encuentran expuestos nuestros colaboradores
                        como los terceros al igual que los diferentes aspectos ambientales que se puedan generar durante el
                        desarrollo de nuestras diferentes actividades; vigilando no solo el cumplimiento legal de nuestros
                        procesos sino el de los terceros que hagan parte del desarrollo de nuestras actividades"
                    </p>
                    <br>
                    <hr>
                    <h4 class="subtitulo" >Objetivos del SGSST</h4>
                    <br>
                    <div v-for="objetivo in objetivos" :key="objetivo.id">
                        <p><i class="bi bi-check-circle p-2"></i> {{ objetivo.nombre }}</p>
                    </div>

                    <div class="etapas">
                        <b-dropdown dropright text="Etapas" right>
                            <b-dropdown-item class="dropdown-item pr-0" @click="cargarEtapas(1)"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 1 a la 4</a></b-dropdown-item>
                            <b-dropdown-item class="dropdown-item pr-0" @click="cargarEtapas(2)"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 5 a la 9</a></b-dropdown-item>
                            <b-dropdown-item class="dropdown-item pr-0" @click="cargarEtapas(3)"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 10 a la 14</a></b-dropdown-item>
                            <b-dropdown-item class="dropdown-item pr-0" @click="cargarEtapas(4)"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 15 a la 19</a></b-dropdown-item>
                            <b-dropdown-item class="dropdown-item pr-0" @click="cargarEtapas(5)"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 20 a la 22</a></b-dropdown-item>
                        </b-dropdown>
                    </div>
                </div>

                <div class="col-6">
                    <img class="logo_portal" src="/images/portales/about1.jpg" alt="">
                </div>
            </div>
        </section>
        <etapa1a4 v-if="etapa_1"></etapa1a4>
        <etapa5a9 v-if="etapa_5"></etapa5a9>
        <etapa10a14 v-if="etapa_10"></etapa10a14>
        <etapa15a19 v-if="etapa_15"></etapa15a19>
        <etapa20a22 v-if="etapa_20"></etapa20a22>
    </div>
</template>

<script>
import axios from 'axios';
import etapa1a4 from '../../components/Portal/Etapa1a4.vue';
import etapa5a9 from '../../components/Portal/Etapa5a9.vue';
import etapa10a14 from '../../components/Portal/Etapa10a14.vue';
import etapa15a19 from '../../components/Portal/Etapa15a19.vue';
import etapa20a22 from '../../components/Portal/Etapa20a22.vue';

export default{
    name: 'inicio_portal',
    components: {
        etapa1a4,
        etapa5a9,
        etapa10a14,
        etapa15a19,
        etapa20a22,
    },
    data() {
        return {
            idetapa : this.$route.params.id,
            objetivos: [],
            etapa_1: false,
            etapa_5: false,
            etapa_10: false,
            etapa_15: false,
            etapa_20: false,
        };
    },
    mounted() {
        this.consultaBase();
        this.cargarEtapas(this.idetapa)
    },
    methods: {
        consultaBase() {
            axios.get('/portalObjetivos').then((res) => {
                if(res.status == 200) {
                    // console.log(res.data)
                    this.objetivos = res.data
                }
            })
            .catch((res) => {
                console.log('error de consulta')
                console.log(res);
            });
        },
        cargarEtapas(etapa) {
           if(etapa == 1) {
            this.etapa_1 = true
            this.etapa_5 = false
            this.etapa_10 = false
            this.etapa_15 = false
            this.etapa_20 = false
           }
           else if(etapa == 2) {
            this.etapa_1 = false
            this.etapa_5 = true
            this.etapa_10 = false
            this.etapa_15 = false
            this.etapa_20 = false
           }
           else if(etapa == 3) {
            this.etapa_1 = false
            this.etapa_5 = false
            this.etapa_10 = true
            this.etapa_15 = false
            this.etapa_20 = false
           }
           else if(etapa == 4) {
            this.etapa_1 = false
            this.etapa_5 = false
            this.etapa_10 = false
            this.etapa_15 = true
            this.etapa_20 = false
           }
           else if(etapa == 5) {
            this.etapa_1 = false
            this.etapa_5 = false
            this.etapa_10 = false
            this.etapa_15 = false
            this.etapa_20 = true
           }
        }
    }
}
</script>
