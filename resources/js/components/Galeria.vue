<template>
    <div>
        <div class="row">
            <div class="col-4 offset-4 p-4">
                <h2 class="titulo">Galería de fotos</h2>
                <hr class="line-title">
            </div>
        </div>
        
        <main class="container d-flex justify-content-center align-items-center p-5 pr-10">
            <div class="carrusel-itemss">
                <div class="carrusel-itemm" v-for="(galeria,index) in galerias" :key="index">
                    <div class="card">
                        <div class="card_img">
                            
                            <img src="" >
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ galeria.titulo }}</h5>
                            <br>
                            <button type="button" class="ctn" data-toggle="modal" data-target="#myModal">
                                Ver fotos
                            </button>
                            <div class="vermaa" style="padding-top: 10%; padding-left:0%">
                                Actualización: {{ galeria.updated_at | formato }}
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="modal fade bd-example-modal-xl" id="myModal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content justify-content-center" style="background-color:rgba(0,0,0,0);">
                            <div style="display:flex; justify-content:
                                center; align-items: center;
                                padding:20px; height: 800px;">
                                <div id="carouselExampleControls"
                                    class="carousel slide col-6 noticia" data-ride="carousel">
                                    <div class="carousel-inner" v-for="(item,index) in galerias.imagenes" :key="index">
                                            
                                        <div class="carousel-item">
                                            <img class="d-block w-100 pl-4"
                                            src="/images/galeria1/amor1.jpg"
                                            style="max-height: 750px" alt="">
                                        </div>
                                        
                                        <a class="carousel-control-prev"
                                            href="#carouselExampleControls"
                                            role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next"
                                            href="#carouselExampleControls"
                                                role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>   
    </div>
</template>

<script>
import axios from 'axios'
import moment from 'moment'
  export default{
    name: 'Galeria',
    data() {
        return {
            galerias: [],
            imgs: []
        };
    },
    mounted() {
        this.consultaBase();
        this.consultaBase2();
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

        consultaBase2() {
            axios.get('/galeriaFotoVue').then((res) => {
                if(res.status == 200) {
                    console.log(res.data)
                    this.imgs = res.data
                    
                }
            })
            .catch((res) => {
                console.log('error de consulta')
                console.log(res);
            });
        }
    },

    filters: {
        formato(fecha){
            return moment(fecha).format("YYYY/MM/DD");
        }
    }
  }
</script>

<style>

</style>