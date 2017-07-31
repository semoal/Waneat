<template>
  <div class="">
    <select v-model="rest" class="form-select" id="select-restaurant" form="input-form" name="restaurantId">
      <option v-for="restaurant in restaurants" v-bind:value="restaurant.tables">{{restaurant.name_restaurant}}</option>
    </select>
    <div class="columns">
      <div class="column" v-for="r in rest">
        <ul class="menu">
          <li class="menu-item">
            <div class="tile tile-centered">
              <div class="tile-icon">
                <qr-code v-bind:text="'https://localhost:8000/tables/'+r.id" size="100" error-level="H"></qr-code>
              </div>
              <div class="tile-content">
                {{ r.title }}
              </div>
            </div>
          </li>
          <li class="divider"></li>
          <li class="menu-item">
            <a href="#" class="active">
              <button class="btn btn-link"> Imprimir </button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>

    export default {
      data(){
        return{
          restaurants: [],
          rest: 0
        }
      },
      mounted() {
          axios.get("http://localhost:8000/api/userRestaurants").then(response => {
              // this.restaurants = response.data;
              this.restaurants=response.data.restaurants;
              // console.log(this.restaurants.restaurants);
           })
      }
    }
</script>
