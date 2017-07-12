@extends('layouts.app')


@section('content')
        @include('navbar')
        <div class="docs-content column col-9 col-sm-12">
          <div class="container rel">
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
                           <div class="panel panel-default">
                             <div class="panel-heading">
                               {{$r->name_restaurant}}
                               @if (count($r->images)>0)
                                 <img class="img-responsive img-rounded" src="{{$r->images[0]->image_url}}"/>
                               @else
                                 <p> No hay imagen disponible </p>

                               @endif
                             </div>
                             <div class="panel-body">
                               <form action="{{ route('restaurant.destroy', $r->id) }}" method="POST">
                                       {{ method_field('DELETE') }}
                                       {{ csrf_field() }}
                                       <button class="btn btn-secondary"type="submit" value="submit">Borrar</button>
                               </form>

                             </div>

                           </div>
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
