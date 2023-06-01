import Vue from 'vue'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap-vue/dist/bootstrap-vue.css"
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs';
import VueRouter from 'vue-router';
import noticia from './components/Noticias.vue';
import cultura from './components/Cultura.vue';
import galeria from './components/Galeria.vue';
import inicio  from './components/Inicio.vue';
import actividad  from './components/Actividad.vue';
import inicio_portal from './components/Portal/InicioPortal.vue';
import perfil from './components/Perfil.vue';

Vue.use(VueRouter);
Vue.use(LaravelPermissionToVueJS);
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

                                //Inicio
Vue.component('footer-component', require('./components/plantilla/Footer.vue').default);
Vue.component('navbar', require('./components/plantilla/Navbar.vue').default);
Vue.component('banner', require('./components/inicio/Banner.vue').default);
Vue.component('birthday', require('./components/inicio/Birthday.vue').default);
Vue.component('noticia_des', require('./components/inicio/noticia_des.vue').default);
Vue.component('formaciones_mes', require('./components/inicio/FormacionesMes.vue').default);

                                //Portal
Vue.component('inicio_portal', require('./components/Portal/InicioPortal.vue').default);

const routes = [
    {
        path: '/noticia',
        component: noticia,
        name: 'noticia'
    },
    {
        path: '/cultura',
        component: cultura,
        name: 'cultura'
    },
    {
        path: '/galeria',
        component: galeria
    },
    {
        path: '',
        component: inicio,
        name: 'inicio'
    },
    {
        path: '/actividad',
        component: actividad,
        name: 'actividad'
    },
    {
        path: '/:id',
        component: inicio_portal,
        name: 'inicio_portal'
    },
    {
        path: '/perfil',
        component: perfil,
        name: 'perfil'
    },
];

const router = new VueRouter({routes ,
    mode: '',
    base: process.env.BASE_URL,
    scrollBehavior (to, from, savedPosition){
      if (to.hash) {
        return document.querySelector(to.hash).scrollIntoView();
      } else {
        return savedPosition || { x: 0, y: 0 }
      }

    }
    });



const app = new Vue({
    el: '#app',
    router: router
});
