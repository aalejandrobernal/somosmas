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
Vue.component('banner', require('./components/inicio/Banner.vue').default);
Vue.component('birthday', require('./components/inicio/Birthday.vue').default);
Vue.component('noticia_des', require('./components/inicio/noticia_des.vue').default);
Vue.component('formaciones_mes', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
});

const birthday = new Vue({
    el: '#birthday',
});
const noticia = new Vue({
    el: '#noticia',
});
const formaciones_mes = new Vue({
    el: '#formaciones_mes',
});
