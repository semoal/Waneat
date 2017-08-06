
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./main');


window.Vue = require('vue');
window.axios = require('axios');
window.VueQRCodeComponent = require('vue-qrcode-component');

Vue.component('mesas', require('./components/mesas.vue'));
Vue.component('menus', require('./components/menus.vue'));

Vue.component('qr-code', VueQRCodeComponent)


const app = new Vue({
    el: '#app',
});
