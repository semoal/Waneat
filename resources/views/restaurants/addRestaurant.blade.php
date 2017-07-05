@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            Restaurantes añadidos
          </div>
          <div class="panel-body">
            @forelse ($restaurant as $key => $r)
              <div class="panel panel-default">
                <div class="panel-heading">
                  {{$r->name_restaurant}}
                  {{-- <img class="img-responsive img-rounded" src="{{$r->images[0]->image_url}}"/> --}}
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
            <div class="panel-footer">
                <a class="btn btn-primary" href="{{ route('home') }}" type="button" name="button">Finalizar</a>
            </div>

          </div>
        </div>
      </div>
        <div class="offset-md-2 col-md-8">
            <div class="panel panel-default">

                <div class="panel-heading">Añadir restaurante</div>
                <div class="panel-body">
                    <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('restaurant.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name_restaurant') ? ' has-error' : '' }}">
                            <label for="name_restaurant" class="col-md-4 control-label">Nombre restaurante</label>

                            <div class="col-md-6">
                                <input id="name_restaurant" type="text" placeholder="" class="form-control" name="name_restaurant"  autofocus>

                                @if ($errors->has('name_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address_restaurant') ? ' has-error' : '' }}">
                            <label for="address_restaurant" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <input id="address_restaurant" type="text" placeholder="" class="form-control" name="address_restaurant"  autofocus>

                                @if ($errors->has('address_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('city_restaurant') ? ' has-error' : '' }}">
                            <label for="city_restaurant" class="col-md-4 control-label">Ciudad</label>

                            <div class="col-md-6">
                                <input id="city_restaurant" type="text" placeholder="" class="form-control" name="city_restaurant"  autofocus>

                                @if ($errors->has('city_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('postalcode_restaurant') ? ' has-error' : '' }}">
                            <label for="postalcode_restaurant" class="col-md-4 control-label">Código postal</label>

                            <div class="col-md-6">
                                <input id="postalcode_restaurant" type="text" placeholder="" class="form-control" name="postalcode_restaurant"  autofocus>

                                @if ($errors->has('postalcode_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postalcode_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('state_restaurant') ? ' has-error' : '' }}">
                            <label for="state_restaurant" class="col-md-4 control-label">Provincia</label>

                            <div class="col-md-6">
                                <input id="state_restaurant" type="text" placeholder="" class="form-control" name="state_restaurant"  autofocus>

                                @if ($errors->has('state_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('country_restaurant') ? ' has-error' : '' }}">
                            <label for="country_restaurant" class="col-md-4 control-label">Pais</label>

                            <div class="col-md-6">
                                <input id="country_restaurant" type="text" placeholder="" class="form-control" name="country_restaurant"  autofocus>

                                @if ($errors->has('country_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="address_restaurant" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="description" type="textarea" placeholder="" class="form-control" name="description"  autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email_restaurant') ? ' has-error' : '' }}">
                            <label for="email_restaurant" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email_restaurant" type="email" placeholder="" class="form-control" name="email_restaurant"  autofocus>

                                @if ($errors->has('email_restaurant'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_restaurant') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('specialty') ? ' has-error' : '' }}">
                            <label for="specialty" class="col-md-4 control-label">Especialidad</label>

                            <div class="col-md-6">
                                <input id="specialty" type="text" placeholder="" class="form-control" name="specialty"  autofocus>

                                @if ($errors->has('specialty'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specialty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('restaurant_url') ? ' has-error' : '' }}">
                            <label for="restaurant_url" class="col-md-4 control-label">Url Restaurante</label>

                            <div class="col-md-6">
                                <input id="restaurant_url" type="text" placeholder="" class="form-control" name="restaurant_url"  autofocus>

                                @if ($errors->has('restaurant_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('restaurant_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div id="time-template">
                          @include('restaurants.time')



                              @if ($errors->has('time'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('time') }}</strong>
                                  </span>
                              @endif
                        </div>



                        {{-- </div> --}}
                        <div class="form-group{{ $errors->has('picture_url') ? ' has-error' : '' }}">
                            <label for="picture_url" class="col-md-4 control-label">Foto</label>

                            <div class="col-md-6">
                              <label class="btn btn-primary btn-block">
                                  Browse <input name="picture" type="file" style="display: none;">
                              </label>
                                @if ($errors->has('picture_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('picture_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- boton submit-->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Insertar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Restaurantes tuyos: {{ $countRestaurantes }}
                <ul class="list-group">
                @forelse ($restaurant as $user)
                    <li class="list-group-item">
                        {{ $user->id }} ----- {{ $user->name_restaurant }} --------- {{ $user->created_at }}
                        <button class="btn btn-danger pull-right"> x </button>
                    </li>
                </ul>
                @empty
                    <p>No users</p>
                @endforelse --}}

            </div>
        </div>
    </div>
</div>
@endsection
