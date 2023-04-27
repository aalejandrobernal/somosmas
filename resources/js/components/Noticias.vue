<template>
     <div class="row">
        <div class="col-2 offset-5 p-4">
            <h2 class="titulo">Noticias</h2>
            <hr class="line-title">
        </div>
        <div class="container-3">
            <div class="row pb-4 card-3" v-for="noticia in noticias" :key="noticia.id">
                    <div class="col-6 pb-1" style="padding-right: 1px;">
                        <h1 class="subtitulo mb-0">{{ noticia.titulo }}</h1>
                        <div class="vermaa">
                            Actualización : {{ noticia.updated_at.replace(/T|Z/g, ' ')}}
                        </div>
                        <br>
                        <div>
                        <p class="nuevaa" >
                            <span v-html="noticia.contenido.substring(0,800)+'...'"></span>
                        </p>
                        </div>
                        <div class="row">
                            <div class="col-3" v-if="noticia.contenido.length>800"> 
                                <button type="button" class="ctn" data-toggle="modal"data-target="#myModal">Ver más</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                            ...
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="col-3" v-if="noticia.adjunto">
                                <div class="col-3">
                                <div class="contenedor-textos2">
                                    <a class="cta" href="{noticia->adjunto}" target="_blank">Ver adjunto</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data(){
            return{
                noticias: [],
        }
        },
        created(){
            axios.get('/noticiaVue')
            .then((res) => this.noticias=res.data)
            .catch((err) => console.log(err))  

       },
    }
</script>
