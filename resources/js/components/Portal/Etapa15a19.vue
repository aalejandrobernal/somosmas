<template>
    <div>
        <section id="" class="container d-flex justify-content"> 
            <div class="col-7">
                <hr>
                <h4 class="subtitulo">Etapas 15 a la 19 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==4">
                        <a :href="'#etapa' + (index + 1) " class="btn"><i class="bi bi-check-circle p-2">
                        </i> {{ index + 1 }}. {{ etapa.nombre }}</a>
                        <br>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa15">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[14]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 15 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa15" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>                
            </div>
        </section>

        <section id="etapa16">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[15]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 16 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa16" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa17">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[16]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 17 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa17" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa18">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[17]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 18 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa18" :key="index">
                            <button class="buton">
                                <a id="evidencia" v-bind:href="item.adjunto" target="_blank"><span>
                                    <i class="fa-solid fa-rocket"></i> {{ item.nombre }}</span></a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="etapa19">
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
                    Fases del sistema de gestión: <span v-if="etapas.length != 0"> {{ etapas[18]['nombre'] }}</span>
                    <hr class="line-title">
                </div>
            </div>
        </div>

        <section class="container d-flex justify-content pt-4">
            <div class="row">
                <div class="col-12">
                    <p class="h6">
                        Etapa: 19 <i class="bi bi-caret-right-square-fill"></i>
                    </p>
                    <br>
                    <h3 class="subtitulo">DOCUMENTACIÓN Y EVIDENCIAS</h3>
                    <br>
                    <div class="row">
                        <div class="col-3 mb-4" v-for="(item, index) in etapa19" :key="index">
                            <button class="buton">
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
                <!-- <div clas="etapas">
                    <b-dropdown dropright text="Etapas" right>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal1_4"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 1 a la 4</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal5_9"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 5 a la 9</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal10_14"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 10 a la 14</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal15_19"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 15 a la 19</a></b-dropdown-item>
                        <b-dropdown-item class="dropdown-item pr-0" to="portal20_22"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 20 a la 22</a></b-dropdown-item>
                    </b-dropdown>
                </div> -->
                <h4 class="subtitulo">Etapas 15 a la 19 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==4">
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
    name: 'Etapa15a19',
    data() {
        return {
            objetivos: [],
            etapas: [],
            evidencias: [],
            etapa15: [],
            etapa16: [],
            etapa17: [],
            etapa18: [],
            etapa19: []
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
                        if(etapa.id == 15) {
                            this.etapa15 = etapa.evidencias
                        }
                        else if(etapa.id == 16) {
                            this.etapa16 = etapa.evidencias
                        }
                        else if(etapa.id == 17) {
                            this.etapa17 = etapa.evidencias
                        }
                        else if(etapa.id == 18) {
                            this.etapa18 = etapa.evidencias
                        }
                        else if(etapa.id == 19) {
                            this.etapa19 = etapa.evidencias
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