@extends('layouts.app')

@section('content')
        @include('navbar')
        <div class="docs-contens col-9 col-sm-12">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <form class="form"
                         enctype="multipart/form-data"
                         role="form"
                         method="POST"
                         action="{{ route('restaurant.update', $restaurant->id)}}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="panel-1 column col-9 col-xs-12" style="padding-top:50px;">
                                <header class="text-center">
                                    <ul class="step">
                                      <li class="step-item active">
                                        <a href="#" class="tooltip" data-tooltip="Información sobre tu restaurante">Datos iniciales</a>
                                      </li>
                                      <li class="step-item 2">
                                        <a href="#" class="tooltip" data-tooltip="Necesaria para poder hacer reservas">Contacto</a>
                                      </li>
                                      <li class="step-item 3">
                                        <a href="#" class="tooltip" data-tooltip="Puedes añadir todos los horarios de tu restaurante">Horarios</a>
                                      </li>
                                      <li class="step-item 4">
                                        <a href="#" class="tooltip" data-tooltip="Añade tantas fotos como gustes">Foto</a>
                                      </li>
                                    </ul>
                                </header>
                                <div class="button-group">
                                  <button type="button" class="btn btn-primary panel-1-next float-right"> Siguiente </button>
                                </div>
                                <div class="form-group{{ $errors->has('name_restaurant') ? ' has-error' : '' }}">
                                    <label for="name_restaurant" class="form-label">Nombre restaurante</label>
                                    <input id="name_restaurant" type="text" placeholder="" class="form-input" name="name_restaurant"  autofocus value="{{$restaurant->name_restaurant}}">
                                    @if ($errors->has('name_restaurant'))
                                        <span class="help-block">
                                            <strong>Este campo es obligatorio</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('address_restaurant') ? ' has-error' : '' }}">
                                    <label for="address_restaurant" class="form-label">Dirección</label>
                                    <input id="address_restaurant" type="text" placeholder="" class="form-input" name="address_restaurant"  autofocus value="{{$restaurant->address_restaurant}}">

                                    @if ($errors->has('address_restaurant'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address_restaurant') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('city_restaurant') ? ' has-error' : '' }}">
                                    <label for="city_restaurant" class=" form-label">Ciudad</label>
                                    <input id="city_restaurant" type="text" placeholder="" class="form-input" name="city_restaurant"  autofocus value="{{$restaurant->city_restaurant}}">

                                    @if ($errors->has('city_restaurant'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city_restaurant') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('postalcode_restaurant') ? ' has-error' : '' }}">
                                    <label for="postalcode_restaurant" class="form-label">Código postal</label>
                                    <input id="postalcode_restaurant" type="text" placeholder="" class="form-input" name="postalcode_restaurant"  autofocus value="{{$restaurant->postalcode_restaurant}}">

                                    @if ($errors->has('postalcode_restaurant'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('postalcode_restaurant') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('state_restaurant') ? ' has-error' : '' }}">
                                    <label for="state_restaurant" class=" form-label">Provincia</label>
                                    <input id="state_restaurant" type="text" placeholder="" class="form-input" name="state_restaurant"  autofocus value="{{$restaurant->state_restaurant}}">

                                    @if ($errors->has('state_restaurant'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('state_restaurant') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('country_restaurant') ? ' has-error' : '' }}">
                                    <label for="country_restaurant" class=" form-label">Pais</label>
                                    <input id="country_restaurant" type="text" placeholder="" class="form-input" name="country_restaurant"  autofocus value="{{$restaurant->country_restaurant}}"> </input>
                                    @if ($errors->has('country_restaurant'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('country_restaurant') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="panel-2 hide column col-9 col-xs-12" style="padding-top:50px;">
                                <header class="text-center">
                                    <ul class="step">
                                      <li class="step-item">
                                        <a href="#" class="tooltip" data-tooltip="Información sobre tu restaurante">Datos iniciales</a>
                                      </li>
                                      <li class="step-item active">
                                        <a href="#" class="tooltip" data-tooltip="Necesaria para poder hacer reservas">Contacto</a>
                                      </li>
                                      <li class="step-item">
                                        <a href="#" class="tooltip" data-tooltip="Puedes añadir todos los horarios de tu restaurante">Horarios</a>
                                      </li>
                                      <li class="step-item">
                                        <a href="#" class="tooltip" data-tooltip="Añade tantas fotos como gustes">Foto</a>
                                      </li>
                                    </ul>
                                </header>
                                <div class="button-group">
                                    <button type="button" class="btn btn-primary panel-2-back"> Atrás </button>
                                    <button type="button" class="btn btn-primary panel-2-next float-right"> Siguiente </button>                                </div>
                                    <div class="form-group{{ $errors->has('email_restaurant') ? ' has-error' : '' }}">
                                        <label for="email_restaurant" class=" form-label">Email</label>
                                        <input id="email_restaurant" type="email" placeholder="" class="form-input" name="email_restaurant"  autofocus value="{{$restaurant->email_restaurant}}">

                                        @if ($errors->has('email_restaurant'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email_restaurant') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('restaurant_url') ? ' has-error' : '' }}">
                                        <label for="restaurant_url" class=" form-label">Url Restaurante</label>
                                        <input id="restaurant_url" type="text" placeholder="" class="form-input" name="restaurant_url"  autofocus value="{{$restaurant->restaurant_url}}">

                                        @if ($errors->has('restaurant_url'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('restaurant_url') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                        <label for="address_restaurant" class=" form-label">Descripción</label>
                                        <textarea id="description" type="textarea" placeholder="" class="form-input" name="description"  autofocus >{{$restaurant->description}} </textarea>

                                        @if ($errors->has('description'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('specialty') ? ' has-error' : '' }}">
                                        <label for="specialty" class=" form-label">Especialidad</label>
                                        <input id="specialty" type="text" placeholder="" class="form-input" name="specialty"  autofocus value="{{$restaurant->specialty}}">

                                        @if ($errors->has('specialty'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('specialty') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                            </div>
                            <div class="panel-3 hide column col-9 col-xs-12" style="padding-top:50px;">
                                <header class="text-center">
                                  <ul class="step">
                                      <li class="step-item">
                                        <a href="#" class="tooltip" data-tooltip="Información sobre tu restaurante">Datos iniciales</a>
                                      </li>
                                      <li class="step-item 2">
                                        <a href="#" class="tooltip" data-tooltip="Necesaria para poder hacer reservas">Contacto</a>
                                      </li>
                                      <li class="step-item 3 active">
                                        <a href="#" class="tooltip" data-tooltip="Puedes añadir todos los horarios de tu restaurante">Horarios</a>
                                      </li>
                                      <li class="step-item 4">
                                        <a href="#" class="tooltip" data-tooltip="Añade tantas fotos como gustes">Foto</a>
                                      </li>
                                    </ul>
                                </header>
                                <div class="button-group">
                                  <button type="button" class="btn btn-primary panel-3-back"> Atrás </button>
                                  <button type="button" class="btn btn-primary panel-3-next float-right"> Siguiente </button>
                                </div>
                                <div id="time-template">


                                    <div class="col-md-6" style="padding-top:20px;">
                                      <h3 for="time" class="text-centered">Dias
                                      <button type="button" class="btn btn-primary remove-schedule float-right">
                                          <i class="icon icon-delete"></i>
                                      </button>
                                      <button type="button" id="more-hours" class="btn btn-default add-schedule float-right">
                                          <i class="icon icon-plus"></i>
                                      </button></h3>
                                    </div>
                                    @forelse ($restaurant->schedules as $key => $value)
                                      <div class="time-inner">
                                        <div class="form-group">

                                            <label>
                                              <input type="checkbox" name="days[{{$key}}][]" value="Lunes"
                                              @if (in_array("Lunes", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Lun</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[{{$key}}][]" value="Martes"
                                              @if (in_array("Martes", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Mar</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[{{$key}}][]" value="Miercoles"
                                              @if (in_array("Miercoles", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Mié</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[{{$key}}][]" value="Jueves"
                                              @if (in_array("Jueves", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Jue</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[{{$key}}][]" value="Viernes"
                                              @if (in_array("Viernes", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Vie</span>
                                            </label>
                                            <label>
                                            -
                                              <input type="checkbox" name="days[{{$key}}][]" value="Sabado"
                                              @if (in_array("Sabado", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Sáb</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[{{$key}}][]" value="Domingo"
                                              @if (in_array("Domingo", explode(";", $value->days)))
                                                checked
                                              @endif
                                              >
                                              <span class="day-box">Dom</span>
                                            </label>
                                        </div>


                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Apertura: </label>
                                        <div class="col-md-6">
                                          <input type="time" id="hour1" name="hour1[]" class="form-control" value="{{ $value->openSchedule }}">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Cierre: </label>
                                        <div class="col-md-6">
                                          <input type="time" id="hour2" name="hour2[]" class="form-control" value="{{ $value->closeSchedule }}">
                                          <div class="divider"> </div>
                                        </div>
                                      </div>
                                      </div>
                                    @empty
                                      <div class="">
                                        <div class="form-group">
                                            <label>
                                              <input type="checkbox" name="days[0][]" value="Lunes">
                                              <span class="day-box">Lun</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[0][]" value="Martes">
                                              <span class="day-box">Mar</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[0][]" value="Miercoles">
                                              <span class="day-box">Mié</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[0][]" value="Jueves">
                                              <span class="day-box">Jue</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[0][]" value="Viernes">
                                              <span class="day-box">Vie</span>
                                            </label>
                                            <label>
                                            -
                                              <input type="checkbox" name="days[0][]" value="Sabado">
                                              <span class="day-box">Sáb</span>
                                            </label>
                                            -
                                            <label>
                                              <input type="checkbox" name="days[0][]" value="Domingo">
                                              <span class="day-box">Dom</span>
                                            </label>
                                        </div>


                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Apertura: </label>
                                        <div class="col-md-6">
                                          <input type="time" id="hour1" name="hour1[]"class="form-control">
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <label class="col-md-4 control-label">Cierre: </label>
                                        <div class="col-md-6">
                                          <input type="time" id="hour2" name="hour2[]" class="form-control">
                                          <div class="divider"> </div>
                                        </div>
                                      </div>
                                      </div>
                                    @endforelse



                                </div>





                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="panel-4 hide column col-9 col-xs-12" style="padding-top:50px;">
                                <header class="text-center">
                                  <ul class="step">
                                      <li class="step-item">
                                        <a href="#" class="tooltip" data-tooltip="Información sobre tu restaurante">Datos iniciales</a>
                                      <li class="step-item 2">
                                        <a href="#" class="tooltip" data-tooltip="Necesaria para poder hacer reservas">Contacto</a>
                                      </li>
                                      <li class="step-item 3">
                                        <a href="#" class="tooltip" data-tooltip="Puedes añadir todos los horarios de tu restaurante">Horarios</a>
                                      </li>
                                      <li class="step-item 4 active">
                                        <a href="#" class="tooltip" data-tooltip="Añade tantas fotos como gustes">Foto</a>
                                      </li>
                                    </ul>
                                </header>
                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                    <label class="btn btn-primary btn-block">
                                      Browse
                                      <input name="picture[]" id="gallery-photo-add" multiple type="file" class="imgInp" style="display: none;">
                                    </label>
                                    @if ($errors->has('picture'))
                                        <span class="help-block">
                                            <strong>Selecciona una imagen</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                    <label for="picture" class=" form-label">Previsualización:</label>
                                    <div class="gallery img-preview">
                                      @foreach ($restaurant->images as $key => $value)
                                        <a href="{{ route('restaurant.destroyImage', $value->id) }}">
                                        <img style=" z-index: 999;position: absolute;left: 27%;width: 50px;" src="https://lh3.googleusercontent.com/G2jzG8a6-GAA4yhxx3XMJfPXsm6_pluyeEWKr9I5swUGF62d2xo_Qg3Kdnu00HAmDQ=w300"/>
                                        </a>
                                        <img style="max-width:300px;border-radius: 5%;" src="{{$value->image_url}}" class="img-responsive" />
                                                                              
                                      @endforeach
                                    </div>
                                </div>

                                <button type="button" class="btn btn-primary panel-4-back"> Atrás </button>
                                <button type="submit" class="btn btn-primary float-right"> Terminar </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- cierra el navbar -->
      </div>
    </div>
    <!-- ./cierra el navbar -->

@endsection
