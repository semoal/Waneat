@forelse ($tables as $table)
<div class="column col-xs-12 col-3">
  <ul class="menu">
    <li class="menu-item">
      <div class="tile tile-centered">
        <div class="tile-icon">
          <img class="printImage" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(150)->errorCorrection('H')->merge('http://i.imgur.com/kWDi3YO.png', .9, true)->generate('http://localhost:8000/restaurant/'.$table->id_restaurant_id.'?table='.$table->id)) !!} ">
        </div>
        <div class="tile-content">
          {{ $table->title }}
        </div>
      </div>
    </li>
    <li class="divider"></li>
    <li class="menu-item">
      <a href="#" class="active">
        <button class="btn btn-link"> Imprimir </button>
      </a>
    </li>
    <li class="menu-item">
      <form method="POST" action="{{ route('table.destroy',$table->id)}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button class="btn btn-link delete-table"> Borrar </button>
      </form>
    </li>
  </ul>
</div>
@empty
<h5> No tienes mesas para este restaurante </h5>
@endforelse