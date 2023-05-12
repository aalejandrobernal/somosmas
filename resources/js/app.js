// require('./bootstrap');
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs';
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap-vue/dist/bootstrap-vue.css"
import VueRouter from 'vue-router';
Vue.use(VueRouter);
Vue.use(LaravelPermissionToVueJS);
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
window.Vue = require('vue').default;
import noticia from './components/Noticias.vue';
import cultura from './components/Cultura.vue';
import galeria from './components/Galeria.vue';
import inicio  from './components/Inicio.vue';
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
                                //Inicio
Vue.component('footer-component', require('./components/plantilla/Footer.vue').default);
Vue.component('navbar', require('./components/plantilla/Navbar.vue').default);
Vue.component('banner', require('./components/inicio/Banner.vue').default);
Vue.component('birthday', require('./components/inicio/Birthday.vue').default);
Vue.component('noticia_des', require('./components/inicio/noticia_des.vue').default);
Vue.component('formaciones_mes', require('./components/inicio/FormacionesMes.vue').default);

const routes = [
    {
        path: '/noticia',
        component: noticia
    },
    {
        path: '/cultura',
        component: cultura
    },
    {
        path: '/galeria',
        component: galeria
    },
    {   
        path: '/',      
        component: inicio
    }
];

const router = new VueRouter({routes});


const app = new Vue({
    el: '#app',
    router: router
});


