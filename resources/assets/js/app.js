//
// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// require('./bootstrap');
// require('./new-age');
require('./time-picker');
//
// /*
window.Vue = require('vue');
window.axios = require('axios');

Vue.component('mesas', require('./components/mesas.vue'));
import Vue from 'vue'
import VueQRCodeComponent from 'vue-qrcode-component'
Vue.component('qr-code', VueQRCodeComponent)

// Vue.component('example',{
//   template: '<ul><li v-for="table in v1users">{{table}}</li></ul>',
//   data: function() {
//       return {
//           v1users: ()=>{
//
//           }
//       }
//   },
//   mounted : function(){
//       this.fetchV1IntermediaryUsers();
//   },
//   methods:{
//       fetchV1IntermediaryUsers: function()
//       {
//
//       }
//   }
// });

const app = new Vue({
    el: '#app',
});
// */
