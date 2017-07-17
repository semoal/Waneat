<?php
  $daysArray = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
  $boolean = false;
  setlocale(LC_ALL,"spanish");
  $today = strftime("%A");
  error_log($today);
  function removeAccents($string) {
    return strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', preg_replace('~&([a-z]{1,2})(acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8'))), ' '));
  }
?>
@extends('layouts.app')
@section('content')
  <div class="card" style="width:50%;">
    <div class="card-header">
      <div class="card-title">{{ $restaurant->name_restaurant}}</div>
      <div class="card-subtitle">Categoria</div>
    </div>
    <div class="card-image">
      <div class="carousel">
        @forelse ($restaurant->images as $key => $images)
          <input type="radio" id="slide-{{$key}}" name="carousel-radio" hidden="" class="carousel-locator"
          @if ($key == 0)
            checked=""
          @endif
          >
        @empty

        @endforelse
        <div class="carousel-container">
          @forelse ($restaurant->images as $key => $image)
            <figure class="carousel-item">
              <label class="item-prev btn btn-action btn-lg" @if ($key == 0)
                for="slide-{{count($restaurant->images)-1}}"
              @else
                for="slide-{{$key-1}}"
              @endif
              >
                <i class="icon icon-arrow-left"></i>
              </label>
              <label class="item-next btn btn-action btn-lg" @if ($key == (count($restaurant->images)-1))
                  for="slide-0"
              @else
                for="slide-{{$key+1}}"
              @endif
              >
                <i class="icon icon-arrow-right"></i>
              </label>
              <img src="{{ $image->image_url}}" class="img-responsive rounded" alt="macOS Yosemite Wallpaper">
            </figure>
          @empty

          @endforelse
        </div>
        <div class="carousel-nav">
          @forelse ($restaurant->images as $key => $image)
            <label class="nav-item text-hide hand" for="slide-{{$key}}">{{$key}}</label>
          @empty

          @endforelse

        </div>
      </div>
    </div>
    <div class="card-body menu">
    <li class="divider" data-content="INFORMACIÓN"></li>
    <details class="menu-item">
      <summary class="collapse-toggler">
        <i class="icon icon-link"></i> Horarios
      </summary>
        <table>
          @forelse ($daysArray as $key => $day)
            <tbody>
              <tr>
              @if (strcasecmp(removeAccents($today), removeAccents($day)) == 0)
                <th>
                  {{$day}}
                </th>
              @else
                <th style="font-weight: lighter;">
                  {{$day}}
                </th>
              @endif
            @foreach ($restaurant->schedules as $key => $schedule)
              @forelse (explode(";",$schedule->days) as $key => $dayDatabase)
                @if ($dayDatabase==$day)
                  @if (!$boolean)
                    <?php $boolean=!$boolean ?>
                  @endif
                  @if (strcasecmp(removeAccents($today), removeAccents($day)) == 0)
                   <td style="font-weight:bolder;" class="block">{{date('g:ia', strtotime($schedule->openSchedule))}} - {{date('g:ia', strtotime($schedule->closeSchedule))}} </td>
                  @else
                    <td class="block">{{date('g:ia', strtotime($schedule->openSchedule))}} - {{date('g:ia', strtotime($schedule->closeSchedule))}} </td>
                  @endif
                @endif
              @empty
              @endforelse

            @endforeach
            @if (!$boolean)
              @if (strcasecmp(removeAccents($today), removeAccents($day)) == 0)
                  <td style="font-weight:bolder;">Cerrado</td>
                @else
                  <td>Cerrado</td>
                @endif
            @endif
            @if ($boolean)
              <?php $boolean = !$boolean ?>
            @endif
            </th>
            </tr>
          </tbody>
          @empty
          @endforelse
        </table>
    </details>
    <div class="card-footer">
        <a href="{{ route('restaurant.edit',$restaurant->id) }}">
          <button type="button" class="btn btn-block" value="submit">Editar</button>
        </a>
        <form action="{{ route('restaurant.destroy',$restaurant->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-primary btn-block" value="submit">Borrar</button>
        </form>
    </div>
    </div>


  </div>

@endsection
