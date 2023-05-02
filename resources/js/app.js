import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)

Vue.use(IconsPlugin)

window.Vue = require('vue').default;


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('cultura-component', require('./components/Cultura.vue').default);
Vue.component('galeria-component', require('./components/Galeria.vue').default);


const app = new Vue({
    el: '#app',
});

