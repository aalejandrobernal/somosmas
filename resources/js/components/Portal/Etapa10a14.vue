<template>
    <div>
        <section id="" class="container d-flex justify-content pt-5"> 
            <div class="col-6">
                <h4 class="subtitulo">Etapas 10 a la 14 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==3">
                        <a :href="'#etapa'+index" class="btn"><i class="bi bi-check-circle p-2"></i>{{index+1}}. {{ etapa.nombre }}</a>
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
                    Fases del sistema de gestión: {{ etapas[9].nombre }}
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
                </div>

                <div class="col-3" v-for="evidencia in evidencias" :key="evidencia.id">
                    <div v-if="evidencia.etapa_id==10 && evidencia.grupo==1">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==10 && evidencia.grupo==2">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==10 && evidencia.grupo==3">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==10 && evidencia.grupo==4">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
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
                    Fases del sistema de gestión: {{ etapas[10].nombre }}
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
                </div>

                <div class="col-3" v-for="evidencia in evidencias" :key="evidencia.id">
                    <div v-if="evidencia.etapa_id==11 && evidencia.grupo==1">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==11 && evidencia.grupo==2">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==11 && evidencia.grupo==3">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==11 && evidencia.grupo==4">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
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
                    Conservación de la documentación: {{ etapas[11].nombre }}
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
                </div>
                <div class="col-3" v-for="evidencia in evidencias" :key="evidencia.id">
                    <div v-if="evidencia.etapa_id==12 && evidencia.grupo==1">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==12 && evidencia.grupo==2">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==12 && evidencia.grupo==3">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==12 && evidencia.grupo==4">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
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
                    Fases del sistema de gestión: {{ etapas[12].nombre }}
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
                </div>

                <div class="col-3" v-for="evidencia in evidencias" :key="evidencia.id">
                    <div v-if="evidencia.etapa_id==13 && evidencia.grupo==1">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==13 && evidencia.grupo==2">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
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
                    Fases del sistema de gestión: {{ etapas[13].nombre }}
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
                </div>
                <div class="col-3" v-for="evidencia in evidencias" :key="evidencia.id">
                    <div v-if="evidencia.etapa_id==14 && evidencia.grupo==1">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==14 && evidencia.grupo==2">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                    <div v-if="evidencia.etapa_id==14 && evidencia.grupo==3">
                       <button class="buton">
                        <a id="evidencia" v-bind:href="evidencia.adjunto" target="_blank"><span><i class="fa-solid fa-rocket"></i>    {{ evidencia.nombre }}</span></a>    
                        </button>
                        <p></p> 
                    </div>
                </div>
            </div>
        </section>

        <section id="" class="container d-flex justify-content pt-5"> 
            <div class="col-6">
                <h4 class="subtitulo">Etapas 10 a la 14 del SGSST</h4>
                <div v-for="(etapa, index) in etapas" :key="index">
                    <div v-if="etapa.grupo==3">
                        <a :href="'#etapa'+index" class="btn"><i class="bi bi-check-circle p-2"></i>{{index+1}}. {{ etapa.nombre }}</a>
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
            index: 0,
            objetivos: [],
            etapas: [],
            evidencias: [],
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
                    // console.log(res.data)
                    this.etapas = res.data
                }
            })
            axios.get('/portalEvidencias').then((res) => {
                if(res.status == 200) {
                    // console.log(res.data)
                    this.evidencias = res.data
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