// require('./bootstrap');
import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import "bootstrap/dist/css/bootstrap.min.css"
import "bootstrap-vue/dist/bootstrap-vue.css"

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('noticias', require('./components/Noticias.vue').default);
Vue.component('cultura-component', require('./components/Cultura.vue').default);
Vue.component('galeria-component', require('./components/Galeria.vue').default);
                                //Inicio
Vue.component('navbar', require('./components/plantilla/Navbar.vue').default);
Vue.component('banner', require('./components/inicio/Banner.vue').default);
Vue.component('birthday', require('./components/inicio/Birthday.vue').default);
Vue.component('noticia_des', require('./components/inicio/noticia_des.vue').default);
Vue.component('formaciones_mes', require('./components/inicio/FormacionesMes.vue').default);



const app = new Vue({
    el: '#app',
});


