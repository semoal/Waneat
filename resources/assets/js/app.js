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

var data = {
  v1users: []
};


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
  data: {
    results: []
  },
  mounted() {
    axios.get("http://localhost:8000/api/restaurant")
    .then(response => {
      this.results = response.data;
      console.log(response);
    })
  }
});
// */
