<?php
  $daysArray = ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo'];
  $boolean = false;
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
        {{-- <input type="radio" id="slide-1" name="carousel-radio" hidden="" class="carousel-locator" checked="">
        <input type="radio" id="slide-2" name="carousel-radio" hidden="" class="carousel-locator">
        <input type="radio" id="slide-3" name="carousel-radio" hidden="" class="carousel-locator">
        <input type="radio" id="slide-4" name="carousel-radio" hidden="" class="carousel-locator"> --}}
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
          {{-- <label class="nav-item text-hide hand" for="slide-1">1</label>
          <label class="nav-item text-hide hand" for="slide-2">2</label>
          <label class="nav-item text-hide hand" for="slide-3">3</label>
          <label class="nav-item text-hide hand" for="slide-4">4</label> --}}
        </div>
      </div>
    </div>
    <div class="card-body menu">
    <li class="divider" data-content="INFORMACIÓN"></li>
    <li class="menu-item">
      <a class="collapse-toggler">
        <i class="icon icon-link"></i> Horarios
      </a>
      <div>
        <ul>

          @forelse ($daysArray as $key => $day)
            <li>
              {{$day}}
              <ul>
            @foreach ($restaurant->schedules as $key => $schedule)
              @forelse (explode(";",$schedule->days) as $key => $dayDatabase)
                @if ($dayDatabase==$day)
                  @if (!$boolean)
                    <?php $boolean=!$boolean ?>
                  @endif
                  <li>{{date('G:i', strtotime($schedule->openSchedule))}} -- {{date('G:i', strtotime($schedule->closeSchedule))}}</li>
                @endif
              @empty
              @endforelse

            @endforeach
            @if (!$boolean)
              <li><b>Cerrado</b></li>
            @endif
            @if ($boolean)
              <?php $boolean = !$boolean ?>
            @endif
            </ul>
          </li>
          @empty

          @endforelse


          {{-- <li>
            {{$dayDatabase}}
            <ul>
              <li>{{date('G:i', strtotime($schedule->openSchedule))}} -- {{date('G:i', strtotime($schedule->closeSchedule))}}</li>
            </ul>
          </li> --}}
        </ul>
      </div>
    </li>
    <li class="menu-item">
      <a href="#menus">
        <i class="icon icon-link"></i> Hipchat
      </a>
    </li>
    <li class="menu-item">
      <a href="#menus">
        <i class="icon icon-link"></i> Skype
      </a>
    </li>
    </div>
    <div class="card-footer">
      <div class="btn-group btn-group-block">
        <form action="{{ route('restaurant.destroy',$restaurant->id) }}" method="POST">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn" value="submit">Borrar</button>
        </form>
        <button class="btn">Buy</button>
        <button class="btn">Buy</button>
      </div>
    </div>

  </div>

@endsection
