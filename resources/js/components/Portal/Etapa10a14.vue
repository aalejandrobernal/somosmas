<template>
    <div>
        <section id="" class="container d-flex justify-content pt-5"> 
            <div class="col-6">
                <div clas="etapas">
                    <b-dropdown dropright text="Etapas" right>
                        <b-nav-item class="dropdown-item pr-0" to="portal1_4"><a  target="_self" style="color: black  !important;" class="nav-link p-0">1 a la 4</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal5_9"><a  target="_self" style="color: black  !important;" class="nav-link p-0">5 a la 9</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal10_14"><a  target="_self" style="color: black  !important;" class="nav-link p-0">10 a la 14</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal15_19"><a  target="_self" style="color: black  !important;" class="nav-link p-0">15 a la 19</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal20_22"><a  target="_self" style="color: black  !important;" class="nav-link p-0">20 a la 22</a></b-nav-item>
                    </b-dropdown>
                </div>
                <h4 class="subtitulo">Etapas 10 a la 14 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==3">
                        <a :href="'#etapa' + (index + 1) " class="btn"><i class="bi bi-check-circle p-2">
                        </i> {{ index + 1 }}. {{ etapa.nombre }}</a>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa10">
            <div class="row">
                <div class="col-12">
                    <p>
                        <br> 
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </section>

        <div class="container titulo">
            <div class="row">
                <div class="col-12 fs-2">
                    <hr class="line-title">
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[9]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 10 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa10" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>                
            </div>
        </section>

        <section id="etapa11">
            <div class="row">
                <div class="col-12">
                    <p>
                        <br> 
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </section>

        <div class="container titulo">
            <div class="row">
                <div class="col-12 fs-2">
                    <hr class="line-title">
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[10]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 11 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa11" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa12">
            <div class="row">
                <div class="col-12">
                    <p>
                        <br> 
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </section>

        <div class="container titulo">
            <div class="row">
                <div class="col-12 fs-2">
                    <hr class="line-title">
                    Conservación de la documentación: <span v-if="etapas.length != 0"> {{ etapas[11]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 12 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa12" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa13">
            <div class="row">
                <div class="col-12">
                    <p>
                        <br> 
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </section>

        <div class="container titulo">
            <div class="row">
                <div class="col-12 fs-2">
                    <hr class="line-title">
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[12]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 13 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa13" :key="index">
                            <button class="buton3">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa14">
            <div class="row">
                <div class="col-12">
                    <p>
                        <br> 
                        <br>
                        <br>
                    </p>
                </div>
            </div>
        </section>

        <div class="container titulo">
            <div class="row">
                <div class="col-12 fs-2">
                    <hr class="line-title">
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[13]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 14 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa14" :key="index">
                            <button class="buton3">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="" class="container d-flex justify-content pt-5"> 
            <div class="col-6">
                <div clas="etapas">
                    <b-dropdown dropright text="Etapas" right>
                        <b-nav-item class="dropdown-item pr-0" to="portal1_4"><a  target="_self" style="color: black  !important;" class="nav-link p-0">1 a la 4</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal5_9"><a  target="_self" style="color: black  !important;" class="nav-link p-0">5 a la 9</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal10_14"><a  target="_self" style="color: black  !important;" class="nav-link p-0">10 a la 14</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal15_19"><a  target="_self" style="color: black  !important;" class="nav-link p-0">15 a la 19</a></b-nav-item>
                        <b-nav-item class="dropdown-item pr-0" to="portal20_22"><a  target="_self" style="color: black  !important;" class="nav-link p-0">20 a la 22</a></b-nav-item>
                    </b-dropdown>
                </div>
                <h4 class="subtitulo">Etapas 10 a la 14 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==3">
                        <a :href="'#etapa' + (index + 1) " class="btn"><i class="bi bi-check-circle p-2">
                        </i> {{ index + 1 }}. {{ etapa.nombre }}</a>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section id="" class="container d-flex justify-content">
            <div class="col-6">
                <a href="portal-liwa" class="btn"><img src="/images/iconoliwa.png" alt="" width="120" height="100">Liwa SGSST</a>
            </div>
        </section>

    </div>
</template>


<script>
import axios from 'axios';
export default{
    name: 'Etapa10a14',
    data() {
        return {
            objetivos: [],
            etapas: [],
            evidencias: [],
            etapa10: [],
            etapa11: [],
            etapa12: [],
            etapa13: [],
            etapa14: []
        };
    },
    mounted() {
        this.consultaBase();
    },
    methods: {
        consultaBase() {
            axios.get('/portalObjetivos').then((res) => {
                if(res.status == 200) {
                    // console.log(res.data)
                    this.objetivos = res.data
                }
            })
            axios.get('/portalEtapas').then((res) => {
                if(res.status == 200) {
                    this.etapas = res.data;
                    this.etapas.forEach(etapa => {
                        if(etapa.id == 10) {
                            this.etapa10 = etapa.evidencias
                        }
                        else if(etapa.id == 11) {
                            this.etapa11 = etapa.evidencias
                        }
                        else if(etapa.id == 12) {
                            this.etapa12 = etapa.evidencias
                        }
                        else if(etapa.id == 13) {
                            this.etapa13 = etapa.evidencias
                        }
                        else if(etapa.id == 14) {
                            this.etapa14 = etapa.evidencias
                        }
                    });
                }
            })
            .catch((res) => {
                console.log('error de consulta')
                console.log(res);
            });
        },

    },
}
</script>