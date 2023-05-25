<template>
    <div>
        <section id="" class="container d-flex justify-content"> 
            <div class="col-7">
                <hr>
                <h4 class="subtitulo">Etapas 5 a la 9 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==2">
                        <a :href="'#etapa' + (index + 1) " class="btn"><i class="bi bi-check-circle p-2">
                        </i> {{ index + 1 }}. {{ etapa.nombre }}</a>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa5">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[4]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 5 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa5" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>                
            </div>
        </section>

        <section id="etapa6">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[5]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">Etapa: 6 <i class="bi bi-caret-right-square-fill"></i></p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa6" :key="index">
                            <button class="buton3">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa7">
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
                    Conservación de la documentación: <span v-if="etapas.length != 0"> {{ etapas[6]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 7 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa7" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa8">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[7]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 8 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa8" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa9">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[8]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">Etapa: 9 <i class="bi bi-caret-right-square-fill"></i></p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa9" :key="index">
                            <button class="buton3">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i>  {{ item.nombre }}</span></a>
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
                <h4 class="subtitulo">Etapas 5 a la 9 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==2">
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
    name: 'Etapa5a9',
    data() {
        return {
            objetivos: [],
            etapas: [],
            evidencias: [],
            etapa5: [],
            etapa6: [],
            etapa7: [],
            etapa8: [],
            etapa9: []
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
                        if(etapa.id == 5) {
                            this.etapa5 = etapa.evidencias
                        }
                        else if(etapa.id == 6) {
                            this.etapa6 = etapa.evidencias
                        }
                        else if(etapa.id == 7) {
                            this.etapa7 = etapa.evidencias
                        }
                        else if(etapa.id == 8) {
                            this.etapa8 = etapa.evidencias
                        }
                        else if(etapa.id == 9) {
                            this.etapa9 = etapa.evidencias
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