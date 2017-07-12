@extends('layouts.app')

@section('content')
        @include('navbar')  
        <div class="docs-content column col-9 col-sm-12">
            <div id="introduction" class="container">
            <div class="container">
                <div class="row">
                 <!-- <div class="col-md-4">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Restaurantes añadidos
                      </div>
                      <div class="panel-body">
                        @forelse ($restaurant as $key => $r)
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
                        <div class="panel-footer">
                            <a class="btn btn-primary" href="{{ route('home') }}" type="button" name="button">Finalizar</a>
                        </div>

                      </div>
                    </div>
                  </div>-->
                    <div class="offset-md-2 col-md-8">
                        <!-- PANEL 1 -->
                        <div class="panel panel-default panel-1">
                            <h1> Panel 1</h1>
                            <div class="panel-body">
                                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ route('restaurant.store') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('name_restaurant') ? ' has-error' : '' }}">
                                        <label for="name_restaurant" class="col-md-4 form-label">Nombre restaurante</label>
                                        <div class="col-md-6">
                                            <input id="name_restaurant" type="text" placeholder="" class="form-input" name="name_restaurant"  autofocus>

                                            @if ($errors->has('name_restaurant'))
                                                <span class="help-block">
                                                    <strong>Este campo es obligatorio</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('address_restaurant') ? ' has-error' : '' }}">
                                        <label for="address_restaurant" class="col-md-4 form-label">Dirección</label>

                                        <div class="col-md-6">
                                            <input id="address_restaurant" type="text" placeholder="" class="form-input" name="address_restaurant"  autofocus>

                                            @if ($errors->has('address_restaurant'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address_restaurant') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('city_restaurant') ? ' has-error' : '' }}">
                                        <label for="city_restaurant" class="col-md-4 form-label">Ciudad</label>

                                        <div class="col-md-6">
                                            <input id="city_restaurant" type="text" placeholder="" class="form-input" name="city_restaurant"  autofocus>

                                            @if ($errors->has('city_restaurant'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('city_restaurant') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('postalcode_restaurant') ? ' has-error' : '' }}">
                                        <label for="postalcode_restaurant" class="col-md-4 form-label">Código postal</label>

                                        <div class="col-md-6">
                                            <input id="postalcode_restaurant" type="text" placeholder="" class="form-input" name="postalcode_restaurant"  autofocus>

                                            @if ($errors->has('postalcode_restaurant'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('postalcode_restaurant') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('state_restaurant') ? ' has-error' : '' }}">
                                        <label for="state_restaurant" class="col-md-4 form-label">Provincia</label>

                                        <div class="col-md-6">
                                            <input id="state_restaurant" type="text" placeholder="" class="form-input" name="state_restaurant"  autofocus>

                                            @if ($errors->has('state_restaurant'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('state_restaurant') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('country_restaurant') ? ' has-error' : '' }}">
                                        <label for="country_restaurant" class="col-md-4 form-label">Pais</label>

                                        <div class="col-md-6">
                                            <input id="country_restaurant" type="text" placeholder="" class="form-input" name="country_restaurant"  autofocus>

                                            @if ($errors->has('country_restaurant'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('country_restaurant') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-primary panel-1-next"> Siguiente </button>
                            </div>
                        </div>
                        <!-- PANEL 2 -->
                         <div class="panel panel-default panel-2 hide">
                            <h1> Panel 2</h1>
                            <div class="panel-body">
                                <div class="form-group{{ $errors->has('email_restaurant') ? ' has-error' : '' }}">
                                        <label for="email_restaurant" class="col-md-4 form-label">Email</label>

                                        <div class="col-md-6">
                                            <input id="email_restaurant" type="email" placeholder="" class="form-input" name="email_restaurant"  autofocus>

                                            @if ($errors->has('email_restaurant'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email_restaurant') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('restaurant_url') ? ' has-error' : '' }}">
                                        <label for="restaurant_url" class="col-md-4 form-label">Url Restaurante</label>

                                        <div class="col-md-6">
                                            <input id="restaurant_url" type="text" placeholder="" class="form-input" name="restaurant_url"  autofocus>

                                            @if ($errors->has('restaurant_url'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('restaurant_url') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="address_restaurant" class="col-md-4 form-label">Descripción</label>

                                        <div class="col-md-6">
                                            <textarea id="description" type="textarea" placeholder="" class="form-input" name="description"  autofocus> </textarea>

                                            @if ($errors->has('description'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('specialty') ? ' has-error' : '' }}">
                                        <label for="specialty" class="col-md-4 form-label">Especialidad</label>

                                        <div class="col-md-6">
                                            <input id="specialty" type="text" placeholder="" class="form-input" name="specialty"  autofocus>

                                            @if ($errors->has('specialty'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('specialty') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-primary panel-2-back"> Atrás </button>
                                <button type="button" class="btn btn-primary panel-2-next"> Siguiente </button>
                            </div>
                        </div>
                        <!-- PANEL 3 -->
                         <div class="panel panel-default panel-3 hide">
                            <h1> Panel 3</h1>
                            <div class="panel-body">

                                @include('restaurants.time')
                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-primary panel-3-back"> Atrás </button>
                                <button type="button" class="btn btn-primary panel-3-next"> Siguiente </button>
                            </div>
                        </div>
                        <!-- PANEL 4 -->
                        <div class="panel panel-default panel-4 hide">
                            <h1> Panel 4</h1>
                            <div class="panel-body">
                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                    <label for="picture" class="col-md-4 form-label">Foto</label>

                                    <div class="col-md-6">
                                      <label class="btn btn-primary btn-block">
                                          Browse
                                          <input name="picture" type="file" class="imgInp" style="display: none;">
                                      </label>
                                        @if ($errors->has('picture'))
                                            <span class="help-block">
                                                <strong>Selecciona una imagen</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                    <label for="picture" class="col-md-4 form-label">Previsualización:</label>
                                    <div class="col-md-6">
                                        <img id="imgPreview" src="" alt="Preview" class="img-thumbnail img-preview" />
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <button type="button" class="btn btn-primary panel-4-back"> Atrás </button>
                                <button type="submit" class="btn btn-primary"> Terminar </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <!-- cierra el navbar -->
      </div>
    </div>
    <!-- ./cierra el navbar -->

@endsection
