<template>
  <div class="container">
    <div class="">
      <div class="column">
        <button class="btn btn-primary" id="printAll">Imprimir todas</button>
        <a href="#tables" class="btn btn-primary">Generar mesas</a>
        <select v-on:change="changeSelect($event)" class="form-select col-3" id="select-restaurant" form="input-form" name="restaurantId">
          <option
          v-for="(restaurant,index) in restaurants"
          v-bind:value="index">
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
<div class="columns" v-if="tables.length > 0"> 
  <div class="column col-6" v-for="r in tables">
    <ul class="menu">
      <li class="menu-item">
        <div class="tile tile-centered">
          <div class="tile-icon">
          <qr-code v-bind:data-value="r.title" v-bind:text="'https://localhost:8000/tables/'+r.id" error-level="Q" size="100"></qr-code>
          </div>
          <div class="tile-content">
            {{ r.title }}
          </div>
        </div>
      </li>
      <li class="divider"></li>
      <li class="menu-item">
        <button class="btn btn-link btn-block" v-on:click="printQR($event)"> Imprimir </button>
        <button class="btn btn-link btn-block delete-table" v-on:click="destroyTables(r.id)"> Eliminar </button>
      </li>
    </ul>
  </div>
</div>
<h5 v-else> No tienes mesas </h5>
</div>
</template>

<script>
  export default {
    data(){
      return{
        restaurants: [],
        tables: [],
        idArray: 0,
        firstId: null,
      }
    },
    methods: {
      // Imprimimos una mesa en concreto con su nombre
      printQR(event){
        let item = event.target.parentElement.parentElement;
        var popup = window.open();
        var src = $(item).find('img').attr('src');
        var tableName = $(item).find('div');
        popup.document.write("<div style='position:relative;display:inline-block;margin:20px;'><img src='"+src+"' /><div style='position: absolute;bottom: -20px;font-weight: bold;left: 50%;font-size: 14px;font-family: Arial;transform: translateX(-50%);'>"+$(tableName[3]).text()+"</div></div>"); 
        setTimeout(function(){ popup.print(); }, 1000);
      },
      changeSelect(event){
        this.idArray = event.target.value;
        this.getTables();
      },
      setTables() {
        let quantity = $('.input-tables').val();
        axios.post('http://localhost:8000/api/putTables', {
          id: this.restaurants[this.idArray].id,
          quantity: quantity,
        })
        .then(response => {
          this.getTables(this.idArray);
        })
        .catch(function (error) {
          console.log(error);
        });
      },
      getRestaurants () {
        axios.get("http://localhost:8000/api/showUserRestaurants").then(response => {
          this.restaurants = response.data.restaurants;
          this.getTables(0);
        });
      },
      getTables () {
        this.tables = this.restaurants[this.idArray].tables;
      },
      destroyTables(id){
        axios.post('http://localhost:8000/api/destroyTables', {
          id: id,
        })
        .then(response => {
          this.getTables(this.idArray);
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    },
    mounted() {
      this.getRestaurants();
    },
  }
</script>
