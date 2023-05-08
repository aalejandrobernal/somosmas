<template>
  <div>
    <b-carousel
    id="carousel-fade"
    style="text-shadow: 0px 0px 2px #000"
    fade
    controls
    indicators
    >
      <div  v-for="banner in banners" :key="banner.id">
        <b-carousel-slide
          :img-src="'storage/images/banners/'+banner.ruta"
        ></b-carousel-slide>
      </div>
    </b-carousel>
  </div>
</template>

<script>
  import axios from 'axios';
    export default {
      name:'Banner',
        data(){
            return{
                banners: [],
        }
        },
        created(){
            this.getBanners(); 
             
       },
       methods:{
           getBanners(){
            axios.get('/inicioVue')
            .then((res) => this.banners=res.data)
            // .then((res) => console.log(res))
            .catch((err) => console.log(err))
           },
       },
    }
</script>
