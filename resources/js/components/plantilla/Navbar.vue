<template>
  <div>
   <b-navbar  sticky toggleable="lg" type="dark" variant="dark">
    <b-navbar-brand to="/">
      <!-- <router-link to="inicio" ></router-link> -->
      <strong style="color: #FE3EB2">Somos</strong>Más
    </b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item-dropdown text="Tu SGSST" right>
          <b-dropdown-item href="#">Programas De Formación</b-dropdown-item>
          <b-dropdown-item href="#">Medicina Preventiva</b-dropdown-item>
          <b-dropdown-item href="#">Seguridad Industrial</b-dropdown-item>
          <b-dropdown-item href="#">Seguridad Vial</b-dropdown-item>
          <b-dropdown-item href="#">Avance Del SGSST</b-dropdown-item>
          <b-dropdown-item href="#">Actividad Del Mes</b-dropdown-item>
          <b-dropdown-item href="#">Portales SGSST</b-dropdown-item>
        </b-nav-item-dropdown>
        <b-nav-item to="noticia" >Noticias</b-nav-item>
        <b-nav-item to="cultura">Cultura</b-nav-item>
        <b-nav-item to="galeria" >Galeria</b-nav-item>
        <b-nav-item href="#redapoyo">Red De Apoyo</b-nav-item>
      
      </b-navbar-nav>

      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <div class="pr-2">
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
        
        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template #button-content>
            <em></em>
          </template>
          <b-dropdown-item href="/inicio/editar_perfil">Mi Perfil</b-dropdown-item>
          <div v-if="can('admin')">
            <b-dropdown-item href="admin">Administrador</b-dropdown-item>
          </div>
          <b-dropdown-item id="sesion" href="/logut">Cerrar Sesión</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<script>
    let user = document.head.querySelector('meta[name="user"]');
    export default {
      computed : {
        user () {
            return JSON.parse(user.content);
        }
    },
        mounted() {
            // console.log('Component mounted.')
        }
    }
    
    
</script>

