<!--<div class="col-sm-3 col-lg-2">
   <nav class="navbar navbar-default navbar-fixed-side">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Waneat') }}
            </a>
         </div>
         <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               @if (Auth::guest())
               <li><a href="{{ route('login') }}">Iniciar sesión</a></li>
               <li><a href="{{ route('register') }}">Registro</a></li>
               @else
               <li><a href="{{ route('home')}}">Home</a></li>
               <li><a href="{{ route('restaurant.index')}}">Restaurantes</a></li>
               <li><a href="#">Pedidos</a></li>
               <li><a href="#">Carta</a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                     <li> <a href="#"> Empleados </a> </li>
                     <li>  <a href="#"> Pagos </a> </li>
                     <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        Cerrar sesión
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                        </form>
                     </li>
                  </ul>
               </li>
               @endif
            </ul>
         </div>
      </div>
   </nav>
</div>
-->
     <!-- NAV SUPERIOR CUANDO MOBILE -->
  <section class="section section-header bg-gray">
    <section class="grid-header container grid-960">
      <nav class="navbar">
        <section class="navbar-section">
          <a href="#sidebar" class="btn btn-lg btn-link btn-action show-sm"><i class="icon icon-menu"></i></a>
          <a class="navbar-brand mr-10" href="{{ url('/') }}">
            {{ config('app.name', 'Waneat') }}
            </a>
        </section>
        <section class="navbar-section">
          <a href="#" class="btn btn-primary">Donate</a>
        </section>
      </nav>
    </section>
  </section>
  <!-- ./nav-->
  
  <!-- SIDE NAV -->
  <section class="container grid-960">
    <section class="columns">
      <div id="sidebar" class="docs-sidebar column col-3 col-sm-12">
        <ul class="docs-nav nav">
          <li class="nav-item active">
            <a href="#">{{ Auth::user()->name }}</a>
            <ul class="nav">
              @if (Auth::guest())
              <li class="nav-item">
                <a href="{{ route('login') }}">Iniciar sesión</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('register') }}">Registro</a>
              </li>
              @else
              <li class="nav-item">
                <a href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('restaurant.index')}}">Restaurantes</a>
              </li>
              <li class="nav-item">
                <a href="#">Pedidos</a>
              </li>
              <li class="nav-item">
                <a href="#">Carta</a>
              </li>
              <li class="nav-item"> 
                <a href="#"> Empleados </a> 
              </li>
              <li class="nav-item">
                <a href="#"> Pagos </a> 
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
          </li>
          @endif
        </ul>
      </div>
      <a href="#sidebar-close" id="sidebar-close" class="docs-nav-clear"></a>
      <!-- ./SIDE-NAV -->
