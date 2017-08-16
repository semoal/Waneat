<template>
  <div class="container">
    <div class="">
      <div class="column">
        <select v-on:change="changeSelect($event)" class="form-select col-3" id="select-restaurant" form="input-form" name="restaurantId">
          <option
          v-for="restaurant in restaurants"
          v-bind:value="restaurant.id">
          {{restaurant.name_restaurant}}
        </option>
      </select>
    </div>
  </div>
  {{rest}}
</div>
</template>

<script>
  export default {
    data(){
      return{
        rest: '',
        restaurants: [],
      }
    },
    methods: {
      changeSelect(event){
        this.rest=event.target.value;
      },
      getRestaurants () {
        axios.get("http://localhost:8000/api/showUserRestaurants").then(response => {
          this.restaurants = response.data.restaurants;
          this.rest = response.data.restaurants[0].id;
        });
      },
    },
    mounted() {
      this.getRestaurants();
    },
  }
</script>
