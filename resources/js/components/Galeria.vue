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
                <div class="carrusel-itemm" v-for="galeria in galerias" :key="galeria.id">
                    <div class="card">
                        <div class="card_img">
                            <img :src="galeria.inicial">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">{{ galeria.titulo }}</h5>
                            <br>
                            <b-button v-b-modal.modal-no-backdrop="'my-modal-no-backdrop'+galeria.id">Ver Fotos</b-button>
                            
                            <div class="vermaa" style="padding-top: 10%; padding-left:0%">
                                Actualización: {{ galeria.updated_at | formato }}
                            </div>

                            <b-modal :id="'my-modal-no-backdrop'+galeria.id" hide-backdrop hide-footer hide-header hide-body>
                                <div style=" display:flex; justify-content:
                                center; align-items: center;
                                padding:20px; height: 600px;" class="row">

                                    <div class="col-md-12" >
                                        <b-carousel
                                        id="carousel-1"
                                        :interval="4000"
                                        controls
                                        indicators
                                        img-width="350"
                                        img-height="240"
                                        >
                                        <div id="foto_modal" v-for="(item,index) in galeria.imagenes.split(',')" :key="index">
                                            <div >
                                                <b-carousel-slide
                                            :img-src="'/images/galeria1/'+item"
                                                ></b-carousel-slide>
                                            </div>
                                            
                                        </div>
                                        </b-carousel>
                                    </div>
                                    
                                </div>
                            </b-modal>
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
                    this.galerias.forEach(elemento => {
                        // console.log(elemento.imagenes.split(','));
                        elemento['inicial'] = '/images/galeria1/' + elemento.imagenes.split(',')[0];
                    });
                    console.log(this.galerias)
                }
            })
            .catch((res) => {
                console.log('error de consulta')
                console.log(res);
            });
        },

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
