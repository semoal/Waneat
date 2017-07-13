@extends('layouts.app')


@section('content')
        @include('navbar')
        <div class="docs-content column col-9 col-sm-12">
          <div class="container rel" id="#home">
            <div class="abs" style="top: 30%; left: 0;">
              <div class="contatiner">
                <div class="columns">
                  <div class="col-6">
                    <div class="dropdown float-left">
                       <a href="#" onclick="javascript:return false;" class="btn dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Restaurantes
                         <i class="caret fa fa-caret-down"></i>
                       </a>
                       <ul class="dropdown-menu menu">
                         @forelse ($restaurants as $key => $r)
                           <li class="menu-item">
                            <a href={{ route('restaurant.details', $r->id)}} class="btn btn-link">{{$r->name_restaurant}}</a>
                           </li>
                           <li class="divider"></li>
                         @empty
                             No tienes restaurantes añadidos
                         @endforelse
                       </ul>
                    </div>
                  </div>
                  <div class="col-6">
                      <a class="btn" href={{ route('restaurant.index') }}>Añadir Restaurante</a>
                  </div>
                </div>

              </div>

            </div>
            <header class="text-center">
              <h3>
                <a href="#introduction" class="anchor" aria-hidden="true">#</a>Introducción a Waneat
              </h3>
            </header>
            <div class="notes">
              <p><strong>Waneat</strong> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
        <!-- cierra el navbar -->
      </div>
    </div>
    <!-- ./cierra el navbar -->
@endsection
