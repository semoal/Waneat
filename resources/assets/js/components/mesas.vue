<template>
  <div class="container">
    <div class="">
    <div class="column">
      <button class="btn btn-primary" id="printAll">Imprimir todas</button>
      <a href="#tables" class="btn btn-primary">Generar mesas</a>
      <select v-on:change="changeSelect($event)" class="form-select col-3" id="select-restaurant" form="input-form" name="restaurantId">
        <option
        v-for="restaurant in restaurants"
        v-bind:value="restaurant.id">
        {{restaurant.name_restaurant}}
      </option>
    </select>
    </div>

      <!-- modal -->
      <div class="modal" id="tables">
        <a href="#modals" class="modal-overlay" aria-label="Close"></a>
        <div class="modal-container col-6" role="document">
          <div class="modal-header">
            <a href="#modals" class="btn btn-clear float-right" aria-label="Close"></a>
            <div class="modal-title">Generar mesas</div>
          </div>
          <div class="modal-body">
            <div class="content">
               <div class="form-group">
                <label class="form-label">Mesas:</label>
                <div class="input-group">
                  <button type="button" class="btn btn-primary input-group-btn less-val">-</button>
                  <input type="number" name="valuetables" class="form-input input-tables" placeholder="0" min="0" max="25">
                  <button type="button" class="btn btn-primary input-group-btn more-val">+</button>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-create-tables" v-on:click="setTables()">Generar mesas</button>
          </div>
        </div>
      </div>
      <!-- ./modal -->
  </div>
  <div class="columns">
    <div class="column col-6" v-for="r in tables">
      <ul class="menu">
        <li class="menu-item">
          <div class="tile tile-centered">
            <div class="tile-icon">
              <qr-code class="printImage" v-bind:text="'https://localhost:8000/tables/'+r.id" error-level="Q" size="100"></qr-code>
            </div>
            <div class="tile-content">
              {{ r.title }}
            </div>
          </div>
        </li>
        <li class="divider"></li>
        <li class="menu-item">
            <button class="btn btn-link btn-block delete-table" v-on:click="destroyTables(r.id)"> Eliminar </button>
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
      changeSelect(event){
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
        axios.get("http://localhost:8000/api/getTables/"+id).then(response => {
          this.tables = JSON.parse(response.data.table)
        });
      },
      initialGo(){
        let id = $('#select-restaurant').val();
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
      setTimeout(this.initialGo, 1000);
    },
  }
</script>
