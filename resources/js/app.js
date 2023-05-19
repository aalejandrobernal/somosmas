// require('./bootstrap');
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
import portal1_4 from './components/Portal/Etapa1a4.vue';
import portal5_9 from './components/Portal/Etapa5a9.vue';
import portal10_14 from './components/Portal/Etapa10a14.vue';
import portal15_19 from './components/Portal/Etapa15a19.vue';
import portal20_22 from './components/Portal/Etapa20a22.vue';

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
Vue.component('etapa1a4', require('./components/Portal/Etapa1a4.vue').default);
Vue.component('etapa5a9', require('./components/Portal/Etapa5a9.vue').default);
Vue.component('etapa10a14', require('./components/Portal/Etapa10a14.vue').default);
Vue.component('etapa15a19', require('./components/Portal/Etapa15a19.vue').default);
Vue.component('etapa20a22', require('./components/Portal/Etapa20a22.vue').default);
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
        path: '/portal1_4',
        component: portal1_4,
        name: 'portal1_4'
    },
    {
        path: '/portal5_9',
        component: portal5_9,
        name: 'portal5_9'
    },
    {
        path: '/portal10_14',
        component: portal10_14,
        name: 'portal10_14'
    },
    {
        path: '/portal15_19',
        component: portal15_19,
        name: 'portal15_19'
    },
    {
        path: '/portal20_22',
        component: portal20_22,
        name: 'portal20_22'
    },
];

const router = new VueRouter({routes ,
    mode: 'history',
    scrollBehavior (to, from, savedPosition)
{
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
