<template>
<div>
    <div v-if="birthday.length>0 || anniversary.length>0">
        <div id="aniversario_cumpleaños" class=""  >
            <div class="contenedores">
                <div class="col-12 pasti h5">
                    <p> 
                        <strong>
                        Felicitamos a los colaboradores que
                        hoy están cumpliendo una fecha especial.
                        </strong>
                    </p>
                    <!-- <p class="texto">
                        Felicitamos a los colaboradores que el dia de hoy {{ fecha_actual   }}
                        estan cumpliendo su aniversario.
                    </p> -->
                </div>
                <div class="row">
                    <!-- {{-- Aniversario --}} -->
                    <div  class="col-12" v-if="anniversary.length>0 && birthday.length<1">
                        <div class="col-12" :v-if="anniversary">
                            <p class="aniversario" style="text-align: center; ">
                                <strong>
                                    Aniversario
                                </strong>
                            </p>
                        </div>
                        <div  class="carrusel-itemss" style="justify-content: center; " >
                            <div class="carrusel-itemms" v-for="user in anniversary" :key="user.foto">
                                <div class="card shadow p-3" style="height: 28em;">
                                    <div class="tamaño" >
                                        <div v-if="user.foto">
                                            <img :src="'images/fotos/'+user.foto" alt="" >
                                        </div>
                                        <div v-else >
                                            <img src="images/fotonone.jpeg"  alt=""> 
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="nombre">
                                            <p class="card-title" style="font-size:medium;">
                                                <strong>{{ user.nombre }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #FE3EB2">
                                                <strong>{{user.empresa }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #707b7c; height: 60px; text-align: center;" >
                                                    <strong>{{user.cargo }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="años" style="color: #FE3EB2">
                                                <strong>
                                                    {{ user.ann }}
                                                    <div v-if="user.ann>1">
                                                        años
                                                    </div>
                                                    <div v-else>
                                                        año
                                                    </div>
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                     <div class="col-6" v-else-if="anniversary.length>0"><!-- aniversario 6 -->
                            <p class="aniversario" style="text-align: center; ">
                                <strong>
                                    Aniversario
                                </strong>
                            </p>
                        <div v-if="anniversary.length>3" class="carrusel-itemsssn"  >
                            <div class="carrusel-itemmms" v-for="user in anniversary" :key="user.foto">
                                <div class="card shadow" style="height: 28em;">
                                    <div class="tamaño" style="width: 9rem;">
                                        <div v-if="user.foto">
                                            <img :src="'images/fotos/'+user.foto" alt="" >
                                        </div>
                                        <div v-else >
                                            <img src="images/fotonone.jpeg"  alt=""> 
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="nombre" style="height: 70px;">
                                            <p class="card-title" style="font-size:medium;">
                                                <strong>{{ user.nombre }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #FE3EB2">
                                                <strong>{{user.empresa }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #707b7c; height: 70px; text-align: center;" >
                                                    <strong>{{user.cargo }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="años" style="color: #FE3EB2">
                                                <strong>
                                                    {{ user.ann }}
                                                    <div v-if="user.ann>1">
                                                        años
                                                    </div>
                                                    <div v-else>
                                                        año
                                                    </div>
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div v-else class="carrusel-itemsssn" style="justify-content: center!important; " >
                            <div class="carrusel-itemmms" v-for="user in anniversary" :key="user.foto">
                                <div class="card shadow" style="height: 28em;">
                                    <div class="tamaño" style="width: 9rem;">
                                        <div v-if="user.foto">
                                            <img :src="'images/fotos/'+user.foto" alt="" >
                                        </div>
                                        <div v-else >
                                            <img src="images/fotonone.jpeg"  alt=""> 
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="nombre" style="height: 70px;">
                                            <p class="card-title" style="font-size:medium;">
                                                <strong>{{ user.nombre }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #FE3EB2">
                                                <strong>{{user.empresa }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #707b7c; height: 70px; text-align: center;" >
                                                    <strong>{{user.cargo }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p class="años" style="color: #FE3EB2">
                                                <strong>
                                                    {{ user.ann }}
                                                    <div v-if="user.ann>1">
                                                        años
                                                    </div>
                                                    <div v-else>
                                                        año
                                                    </div>
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- {{-- Cumpleaños --}} -->
                    <div class="col-12" v-if="birthday.length>0 && anniversary.length<1">
                        <div class="col-12">
                            <p class="aniversario" style="text-align: center; ">
                                <strong>
                                    Cumpleaños
                                </strong>
                            </p>
                        </div>
                        <div class="carrusel-itemss" style="justify-content: center; ">
                            <div class="carrusel-itemms" v-for="user in birthday" :key="user.foto">
                                <div class="card shadow p-3 " style="height: 28em;" >
                                    <div class="tamaño" style="width: 9rem;">
                                        <div v-if="user.foto">
                                            <img :src="'images/fotos/'+user.foto" alt="" >
                                        </div>
                                        <div v-else >
                                            <img src="images/fotonone.jpeg"  alt=""> 
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="nombre">
                                            <p class="card-title" style="font-size:medium;">
                                                <strong>{{ user.nombre }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #FE3EB2">
                                                <strong>{{user.empresa }}</strong>
                                            </p>
                                        </div>
                                        <div>
                                            <p style="color: #707b7c" class="cargo">
                                                    <strong>{{user.cargo }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-6"  style="border-left:2px solid #FE3EB2;" v-else-if="birthday.length>0">
                        
                            <p class="aniversario" style="text-align: center; ">
                                <strong>
                                    Cumpleaños
                                </strong>
                            </p>
                            <div v-if="birthday.length>3" class="carrusel-itemsssn"  >
                                <div class="carrusel-itemmms" v-for="user in birthday" :key="user.foto">
                                    <div class="card shadow p-3 " style="height: 28em;" >
                                        <div class="tamaño" style="width: 9rem;">
                                            <div v-if="user.foto">
                                                <img :src="'images/fotos/'+user.foto" alt="" >
                                            </div>
                                            <div v-else >
                                                <img src="images/fotonone.jpeg"  alt=""> 
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="nombre">
                                                <p class="card-title" style="font-size:medium;">
                                                    <strong>{{ user.nombre }}</strong>
                                                </p>
                                            </div>
                                            <div>
                                                <p style="color: #FE3EB2">
                                                    <strong>{{user.empresa }}</strong>
                                                </p>
                                            </div>
                                            <div>
                                                <p style="color: #707b7c" class="cargo">
                                                        <strong>{{user.cargo }}</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div v-else class="carrusel-itemsssn" style="justify-content: center!important; " >
                                <div class="carrusel-itemmms" v-for="user in birthday" :key="user.foto">
                                    <div class="card shadow p-3 " style="height: 28em;">
                                        <div class="tamaño" style="width: 9rem;">
                                            <div v-if="user.foto">
                                                <img :src="'images/fotos/'+user.foto" alt="" >
                                            </div>
                                            <div v-else >
                                                <img src="images/fotonone.jpeg"  alt=""> 
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="nombre">
                                                <p class="card-title" style="font-size:medium;">
                                                    <strong>{{ user.nombre }}</strong>
                                                </p>
                                            </div>
                                            <div>
                                                <p style="color: #FE3EB2">
                                                    <strong>{{user.empresa }}</strong>
                                                </p>
                                            </div>
                                            <div>
                                                <p style="color: #707b7c" class="cargo">
                                                        <strong>{{user.cargo }}</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div> 
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
      name:'Banner',
        data(){
            return{
                birthday: [],
                anniversary:[],
                fecha_actual: new Date().toLocaleDateString(),
        }
        },
        created(){
            this.getBirthday();
       },
       methods:{
           getBirthday(){
            axios.get('/birthdayVue')
            
            .then((res) => [this.birthday=res.data[0],this.anniversary=res.data[1]])

            .catch((err) => console.log(err))
           },
       },
    }
</script>
