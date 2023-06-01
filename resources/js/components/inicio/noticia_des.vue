<template>
    <div>
        <div class="row " v-for="noticia in noticia_des" :key="noticia.id">
            <div class="col-6" style="padding-right: 1px;">
                <h1 class="titulo">{{ noticia.titulo }}</h1>
                <hr class="line-title">
                <br>
                <div>
                    <div v-if="noticia.contenido.length > 800">
                        <p class="nuevaa" >
                            <span v-html="noticia.contenido.substring(0,800)+' .....'"></span>
                        </p>
                    </div>
                    <div v-else>
                        <p class="nuevaa" >
                            <span v-html="noticia.contenido"></span>
                        </p>
                    </div>
                </div>
                <div class="row">
                        <div class="col-3" v-if="noticia.contenido.length>800">
                            <b-button v-b-modal="'my-modal-'+noticia.id" type="button" class="ctn"  variant="hi">
                                Ver más</b-button>
                            <b-modal size="xl" :id="'my-modal-'+noticia.id" :title="noticia.titulo" >
                                <div class="row">
                                        <div class="col-md-8">
                                            <div>
                                                <p class="nuevaa" style="background-color: #FAFAFA">
                                                    <span v-html="noticia.contenido"></span>       
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-4" style="position: relative;">
                                            <b-carousel sty
                                                id="carousel-fade"
                                                controls
                                                style="top: 50%;  left: 50%; transform: translate(-50%, -50%);"
                                                fade
                                                indicators
                                                img-max-width="500"
                                                img-max-height="500"                          
                                            >
                                            <div  v-for="(item, index) in noticia.imagenes.split(',')" :key="index">
                                                <b-carousel-slide
                                                :img-src="'../storage/images/noticias/'+item"
                                                ></b-carousel-slide>
                                                
                                            </div>
                                        </b-carousel>
                                    </div>
                                </div>
                                <template #modal-footer>
                                        <div >
                                        </div>
                                </template>
                            </b-modal>
                            </div>
                                <div class="col-3" v-if="noticia.adjunto">
                                    <div class="col-3">
                                        <div class="contenedor-textos2">
                                            <a class="cta" :href="noticia.adjunto" target="_blank">Ver adjunto</a>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="vermas" style="width: 600px; padding-top: 3%; padding-left:77%">
                                    <a ><router-link to="noticia">Más noticias <i
                                            class="bi bi-arrow-right-square"></i></router-link>  </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6" style="position: relative;">
                        <b-carousel
                            id="carousel"
                            :interval="4000"
                            controls
                            indicators
                            img-max-width="500"
                            img-max-height="500"
                        >
                            <div  v-for="(item, index) in noticia.imagenes.split(',')" :key="index">
                                <b-carousel-slide
                                    :img-src="'../storage/images/noticias/'+item"
                                ></b-carousel-slide>
                            </div>
                        </b-carousel>
                </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
      name:'Noticia_des',
        data(){
            return{
                noticia_des: [],
                
        }
        },
        created(){
            this.getNoticia_des();
       },
       methods:{
           getNoticia_des(){
            axios.get('/noticia_des_Vue')
            .then((res) => this.noticia_des=res.data)
            .catch((err) => console.log(err))
           },
       },
    }
</script>
