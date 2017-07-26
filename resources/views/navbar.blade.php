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
        </section>
      </nav>
    </section>
  </section>
  <!-- ./nav-->

  <!-- SIDE NAV -->
  <section class="container">
    <section class="columns">
      <div id="sidebar" class="docs-sidebar column col-3 col-sm-12">
        <ul class="docs-nav nav">
          <li class="nav-item active">
            @if (Auth::user())
            <a href="#">{{ Auth::user()->name }}</a>
            @endif
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
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('restaurant.index') }}">Restaurantes</a>
              </li>
              <li class="nav-item">
                <a href="{{ route('table.index') }}"> Mesas </a>
              </li>
              <li class="nav-item">
                <a href="#">Carta</a>
              </li>
              <li class="nav-item">
                <a href="#">Pedidos</a>
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
