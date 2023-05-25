<template>
    <div>
        <section id="" class="container d-flex justify-content"> 
            <div class="col-7">
                <hr>
                <div clas="etapas">
                    <b-dropdown dropright text="Etapas" right>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal1_4"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 1 a la 4</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal5_9"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 5 a la 9</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal10_14"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 10 a la 14</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal15_19"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 15 a la 19</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal20_22"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 20 a la 22</a></b-dropdown-item>
                    </b-dropdown>
                </div>
                <h4 class="subtitulo">Etapas 20 a la 22 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==5">
                        <a :href="'#etapa' + (index + 1) " class="btn"><i class="bi bi-check-circle p-2">
                        </i> {{ index + 1 }}. {{ etapa.nombre }}</a>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa20">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[19]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 20 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa20" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
                          
            </div>
        </section>

        <section id="etapa21">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[20]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 21 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa21" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa22">
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
                    Conservación de la documentación: <span v-if="etapas.length != 0"> {{ etapas[21]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 22 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa22" :key="index">
                            <button class="buton2">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="" class="container d-flex justify-content pb-5"> 
            <div class="col-7">
                <hr>
                <div clas="etapas">
                    <b-dropdown dropright text="Etapas" right>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal1_4"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 1 a la 4</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal5_9"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 5 a la 9</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal10_14"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 10 a la 14</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal15_19"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 15 a la 19</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal20_22"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 20 a la 22</a></b-dropdown-item>
                    </b-dropdown>
                </div>
                <h4 class="subtitulo">Etapas 20 a la 22 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==5">
                        <a :href="'#etapa' + (index + 1) " class="btn"><i class="bi bi-check-circle p-2">
                        </i> {{ index + 1 }}. {{ etapa.nombre }}</a>
                        <br>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>


<script>
import axios from 'axios';
export default{
    name: 'Etapa20a22',
    data() {
        return {
            objetivos: [],
            etapas: [],
            evidencias: [],
            etapa20: [],
            etapa21: [],
            etapa22: []
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
                        if(etapa.id == 20) {
                            this.etapa20 = etapa.evidencias
                        }
                        else if(etapa.id == 21) {
                            this.etapa21 = etapa.evidencias
                        }
                        else if(etapa.id == 22) {
                            this.etapa22 = etapa.evidencias
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