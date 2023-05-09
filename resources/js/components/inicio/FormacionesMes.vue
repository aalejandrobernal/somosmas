<template>
    <div class="container">
        <section id="formaciones" class="">
            <div class="row">
                <div class="col-6 offset-3">
                    <h2 class="titulo">Formaciones Del Mes</h2>
                    <hr class="line-title">
                    <br>
                </div>
            </div>
            <br>
            <div class="">
                <div class="carrusel-itemss">
                    <div class="carrusel-itemm" v-for="formacion in form" :key="formacion.id">
                        <div class="card"  >
                            <img :src="'../storage/images/formaciones/'+formacion.imagen" alt="">
                            <div class="card-body" style=" height:320px;" >
                                <h5 class="card-title" style="width: 204px ;height:48px;">{{ formacion.titulo }}</h5>
                                <div class="card-text" :id="'tooltip-target-'+formacion.id" >
                                    <span v-html="formacion.cuerpo.substring(0,160)+' .....'"></span>
                                </div>
                                <a style="position: absolute;top: 88%" :href="formacion.adjunto" class="btn btn-outline-dark"
                                target="_blank"><i class="bi bi-arrow-right"></i> Ingresa</a>
                            </div>
                            <b-tooltip placement="bottom" :target="'tooltip-target-'+formacion.id" triggers="hover">
                                <span v-html="formacion.cuerpo"></span>
                            </b-tooltip>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name:'FromacionesMes',
        data(){
            return{
                form: [],
                
        }
        },
        created(){
            this.getFormaciones(); 
             
       },
       methods:{
           getFormaciones(){
            axios.get('/formacion_mes_Vue')
            .then((res) => this.form=res.data)
            // .then((res) => console.log(this.form))
            .catch((err) => console.log(err))
           },
       },
    }
   

</script>
