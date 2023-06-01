<template>
    <div>
        <div class="row">
            <div class="col-2 offset-5 p-4">
                <h2 class="titulo">Noticias</h2>
                <hr class="line-title">
            </div>
        </div>
        <div class="container-3">
            <div class="row pb-4 card-3" v-for="noticia in noticias" :key="noticia.id">
                <div class="row">
                    <div class="col-6 pb-1" style="padding-right: 1px;">
                        <h1 class="subtitulo mb-0">{{ noticia.titulo }}</h1>
                            <div class="vermaa">
                                    Actualización : {{noticia.fecha}}
                            </div>
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
               
                <span>
                    <hr>
                </span>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
    export default {
        name:'Notcias',
        data(){
            return{
                noticias: [],
                variants: ['cnt'],
                
        }
        },
        created(){
            this.getNoticias(); 
             
       },
       methods:{
           getNoticias(){
            axios.get('/noticiaVue')
            .then((res) => this.noticias=res.data)
            // .then((res) => console.log(res))
            .catch((err) => console.log(err))
           },
       },
    }
   

</script>
<style>
  .ctn{
    display: inline-block!important;
    padding: 6px 0!important;
    width: 100px!important;
    border: 0.2px solid #000!important;
    border-radius: 5px!important;
    text-align: center!important;
    text-decoration: none!important;
    color: #FE3EB2!important;
    background-color: #fff!important;
}

.ctn:hover{
    transition: 0.3s!important;
    background-color: #FE3EB2!important;
    color: white!important;
    border: #FE3EB2 solid 0.2px!important;
}
</style>


