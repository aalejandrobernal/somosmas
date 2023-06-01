<template>
  <b-navbar :sticky="true" false class="p-3" toggleable="md" type="dark" variant="dark">
    <b-navbar-brand to="/">
      <!-- <router-link to="inicio" ></router-link> -->
      <strong style="color: #FE3EB2">Somos</strong>Más
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item-dropdown text="Tu SGSST">
          <b-nav-item  class="dropdown-item pr-0" :to="{ name: 'inicio',  hash: '#formaciones'}" ><a  target="_self" style="color: black  !important;" class="nav-link p-0">Programas De Formación</a></b-nav-item>
          <b-nav-item  class="dropdown-item pr-0" :to="{ name: 'inicio',  hash: '#medicina'}"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Medicina Preventiva</a></b-nav-item>
          <b-nav-item  class="dropdown-item pr-0" :to="{ name: 'inicio',  hash: '#seguridadindustrial'}"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Seguridad Industrial</a></b-nav-item>
          <b-nav-item  class="dropdown-item pr-0" :to="{ name: 'inicio',  hash: '#seguridadvial'}"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Seguridad Vial</a></b-nav-item>
          <b-nav-item  class="dropdown-item pr-0" :to="{ name: 'inicio',  hash: '#avance'}"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Avance Del SGSST</a></b-nav-item>
          <b-dropdown-item id="item_drop" class="dropdown-item pr-0" to="actividad"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Actividad Del Mes</a></b-dropdown-item>
          <b-nav-item  class="dropdown-item pr-0" href="#redapoyo"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Red De Apoyo</a></b-nav-item>
        </b-nav-item-dropdown>
        <b-nav-item-dropdown text="Portal SGSST Liwa" right variant="none">
          <b-dropdown-item class="dropdown-item pr-0" :to="{ name: 'inicio_portal',  params: {id:'1'} }"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 1 a la 4</a></b-dropdown-item>
          <b-dropdown-item class="dropdown-item pr-0" :to="{ name: 'inicio_portal',  params: {id:'2'} }"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 5 a la 9</a></b-dropdown-item>
          <b-dropdown-item class="dropdown-item pr-0" :to="{ name: 'inicio_portal',  params: {id:'3'} }"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 10 a la 14</a></b-dropdown-item>
          <b-dropdown-item class="dropdown-item pr-0" :to="{ name: 'inicio_portal',  params: {id:'4'} }"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 15 a la 19</a></b-dropdown-item>
          <b-dropdown-item class="dropdown-item pr-0" :to="{ name: 'inicio_portal',  params: {id:'5'} }"><a  target="_self" style="color: black  !important;" class="nav-link p-0">Etapa 20 a la 22</a></b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item to="noticia" >Noticias</b-nav-item>
        <b-nav-item to="cultura">Cultura</b-nav-item>
        <b-nav-item to="galeria" >Galeria</b-nav-item>
        <b-nav-item href="#redapoyo">Red De Apoyo</b-nav-item>
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <div class="p-3">
          <a class="text-white" style="text-decoration: none">Bienvenido: <b>
                {{ user.nombre }}</b></a>
        </div>
        <div class="pr-0">
          <div v-if="user.foto">
            <img :src="'../images/fotos/'+user.foto" alt="" class="usuario">
          </div>
          <div v-else>
            <img src="/images/fotonone.jpeg" class="usuario" alt="">
          </div>
        </div>

        <b-nav-item-dropdown right class="p-1">
          <!-- Using 'button-content' slot -->
          <template #button-content >
            <em></em>
          </template>
          <b-dropdown-item :to="{ name: 'perfil'}">Mi Perfil</b-dropdown-item>
          <div v-if="can('admin')">
            <b-dropdown-item href="admin">Administrador</b-dropdown-item>
          </div>
          <b-dropdown-item id="sesion" href="/logut">Cerrar Sesión</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
  let user = document.head.querySelector('meta[name="user"]');
  export default {
    // data(){
    //   return cargarEtapas(etapa)
    // },
    computed : {
      user () {
        return JSON.parse(user.content);
      }
    },
    mounted() {
        // document.getElementById('contact').scrollIntoView();
        // document.getElementById(this.$route.query.scrollTo).scrollIntoView();
        // console.log('Component mounted.')
        // const element = document.getElementById("medicina");
        // element.scrollIntoView();
        // document.getElementById(this.$route.query.scrollTo).scrollIntoView();
    }
  }

</script>
<style>
.nav-link{
  color: white !important;
}
.nav-link:hover{
  color:  #FE3EB2!important;
}
</style>
