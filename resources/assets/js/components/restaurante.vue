<template>
  <div class="container">
    <div class="horizontal-scroll">
      <button type="button" class="btn btn-primary" id="close-button-nav"> 
        <i class="icon icon-arrow-left"></i>
      </button>
      <button type="button" class="btn item-scroll" v-on:click="getItem($event)" v-for="restaurant in restaurants" v-bind:id="restaurant.id" >
        {{restaurant.name_restaurant}}
      </button>
    </div>
    <div class="card">
      <div class="card-image">
        <img class="img-responsive" src="https://picturepan2.github.io/spectre/img/osx-el-capitan.jpg" alt="OS X El Capitan">
      </div>
      <div class="card-header">
        <div class="card-title h5">{{rest.name_restaurant}}</div>
        <div class="card-subtitle">Software and hardware</div>
      </div>
      <div class="card-body">
        Empower every person and every organization on the planet to achieve more.
      </div>
      <div class="card-footer">
        <a href="#cards" class="btn btn-primary">Do</a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    data(){
      return{
        restaurantId: 0,
        restaurants: [],
        firstId: 0,
        rest: [],
      }
    },
    methods: {
      getItem(event){
        this.restaurantId = event.target.id;
        this.getRestaurant(this.restaurantId);
      },
      getRestaurant(id){
        axios.get("http://localhost:8000/api/restaurant/"+id).then(response => {
          this.rest = response.data.restaurant;
          console.log(response.data.restaurant);
        });
      },
      getRestaurants () {
        axios.get("http://localhost:8000/api/userRestaurants").then(response => {
          this.restaurants = response.data.restaurants;
          this.firstId = response.data.restaurants[0].id;
          this.getRestaurant(this.firstId);
        });
      },
    },
    mounted() {
      this.getRestaurants();
    },
  }
</script>
