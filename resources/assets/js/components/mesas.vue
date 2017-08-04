<template>
  <div class="container">
    <div class="">
      <select v-on:change="fuckMe($event)" class="form-select" id="select-restaurant" form="input-form" name="restaurantId">
        <option disabled value="">Por favor, selecciona un restaurante</option>
        <option
          v-for="restaurant in restaurants"
          v-bind:value="restaurant.id">
          {{restaurant.name_restaurant}}
        </option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-label">Mesas:</label>
      <div class="input-group">
        <button type="button" class="btn btn-primary input-group-btn less-val">-</button>
        <input type="number" name="valuetables" class="form-input input-tables" placeholder="0" min="0" max="25">
        <button type="button" class="btn btn-primary input-group-btn more-val">+</button>
      </div>
    </div>
    <button type="button" class="btn btn-primary" v-on:click="setTables()">Generar mesas</button>
    <div class="columns">
      <div class="column" v-for="r in tables">
        <ul class="menu">
          <li class="menu-item">
            <div class="tile tile-centered">
              <div class="tile-icon">
                <qr-code v-bind:text="'https://localhost:8000/tables/'+r.id" error-level="Q" size="100"></qr-code>
              </div>
              <div class="tile-content">
                {{ r.title }}
              </div>
            </div>
          </li>
          <li class="divider"></li>
          <li class="menu-item">
            <a href="#" class="active">
              <button class="btn btn-link delete-table" v-on:click="destroyTables(r.id)"> Eliminar </button>
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
        rest: '',
        tables: [],
      }
    },
    methods: {
      fuckMe(event){
          this.rest=event.target.value;
          this.getTables(event.target.value);
      },
      setTables() {
        let quantity = $('.input-tables').val();
        let idRestaurant = this.rest;
        axios.post('http://localhost:8000/api/putTables', {
          id: idRestaurant,
          quantity: quantity,
        })
        .then(response => {
          console.log('yas'+response);
          this.getTables(this.rest);
        })
        .catch(function (error) {
          console.log(error);
        });
      },
      getRestaurants () {
        axios.get("http://localhost:8000/api/userRestaurants").then(response => {
          this.restaurants = response.data.restaurants;
        });
      },
      getTables (id) {
        console.log(id);
        axios.get("http://localhost:8000/api/getTables/"+id).then(response => {
          this.tables = JSON.parse(response.data.table)
        });
      },
      destroyTables(id){
        axios.post('http://localhost:8000/api/destroyTables', {
          id: id,
        })
        .then(response => {
          console.log(response);
          this.getTables(this.rest);
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    },
    mounted() {
      this.getRestaurants();
    }
  }
</script>
