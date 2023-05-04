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
                                    Actualización : {{ noticia.updated_at.replace(/T|Z/g, ' ')}}
                            </div>
                            <br>
                            <div>
                                <p class="nuevaa" >
                                    <span v-html="noticia.contenido.substring(0,800)+'...'"></span>
                                </p>
                                <!-- <p>{{hi= noticia.imagenes }}</p> -->
                                <!-- {{ hi }} -->
                                <!-- {{ noticia.imagenes.split(',') }} -->
                                <!-- <li v-for="(item, index) in noticia.imagenes.split(',')">
                                                {{ item }}
                                </li> -->
                            </div>
                        <div class="row">
                            <div class="col-3" v-if="noticia.contenido.length>800">
                                <b-button v-b-modal="'my-modal-'+noticia.id" type="button" class="ctn">Ver más</b-button>
                                
                                <b-modal :id="'my-modal-'+noticia.id" :title="noticia.titulo">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div>
                                                <p class="nuevaa" style="background-color: #FAFAFA">
                                                    <span v-html="noticia.contenido"></span>       
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <section class="splide"
                                                data-splide='{
                                                            "type":"loop",
                                                            "perPage":3,
                                                            "arrows":true,
                                                            "autoplay":true,
                                                            "pagination":false,
                                                            "height":"40rem",
                                                            "direction":"ttb"}'>
                                                <div class="splide__track">
                                                    <ul class="splide__list">
                                                <!-- @foreach ($imgs as $img) -->
                                                        <div  v-for="(item, index) in noticia.imagenes.split(',')">
                                                            <li class="splide__slide">
                                                                    <img :src="'../storage/images/noticias/'+item" alt="">
                                                                
                                                                <!-- <img src="../storage/images/noticias/<?php echo $img; ?>" alt="">-->
                                                            </li>
                                                            <!-- @endforeach -->
                                                        </div>
                                                    </ul>
                                                </div>
                                            </section>
                                        </div>
                                        <!-- <p>{{ imgs }}</p> -->
                                        <!-- <p class="my-4">Hello from modal!</p> -->
                                    </div>
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
                    <div class="col-6">
                        <b-carousel
                            id="carousel-fade"
                            style="text-shadow: 0px 0px 2px #000"
                            fade
                            indicators
                            img-max-width="500"
                            img-max-height="500"
                        >
                            <div  v-for="(item, index) in noticia.imagenes.split(',')">
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
        }
        },
        created(){
            this.getNoticias(); 
             
       },
       methods:{
           getNoticias(){
            axios.get('/noticiaVue')
            .then((res) => this.noticias=res.data)
            .catch((err) => console.log(err))
           },
       }
    }
</script>
