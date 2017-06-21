<!doctype html>
<html lang="{{ app()->getLocale() }}">
   
<head>

    <meta charset="utf-8">
    <link rel="icon" href="waneat/foldertemp/img/favicon.ico" type="image/x-icon" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Waneat - ¿Esperas?</title>

    <!-- Theme core CSS -->
    <link href="{{URL::asset('./css/app.css')}}" rel="stylesheet">
    <link href="{{URL::asset('./css/new-age.css')}}" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="{{URL::asset('./lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('./lib/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{URL::asset('./lib/device-mockups/device-mockups.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Waneat - España</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#download">App</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#features">Ventajas</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                    @if (Auth::check())
                    <li>
                        <a class="page-scroll" href="{{url('home')}}">Restaurantes de {{ Auth::user()->name }} </a>
                    </li>
                    @else 
                    <li>
                        <a class="page-scroll" href="{{url('home')}}">Restaurante</a>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="header-content">
                        <div class="header-content-inner">
                            <h1>Waneat es una aplicación para restaurantes y comensales, para pedir comida al momento, <b> segura y sencilla</b></h1>
                            <a href="#download" class="btn btn-outline btn-xl page-scroll">Empieza ahora! Es gratuita</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <img src="{{URL::asset('./img/demo-screen-1.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="download" class="download bg-primary text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="section-heading">Descubre todo lo que Waneat puede hacer</h2>
                    <p>Nuestra app esta disponible en cualquier dispositivo! Descargala para empezar a disfrutar</p>
                    <div class="badges">
                        <a class="badge-link" href="#"><img src="{{URL::asset('./img/google-play-badge.svg')}}" alt=""></a>
                        <a class="badge-link" href="#"><img src="{{URL::asset('./img/app-store-badge.svg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Ilimitadas ventajas, Ilimitadas funciones</h2>
                        <p class="text-muted">Cualquier comida, cena, merienda... Waneat lo hace posible</p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="device-container">
                        <div class="device-mockup iphone6_plus portrait white">
                            <div class="device">
                                <div class="screen">
                                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                    <img src="{{URL::asset('./img/demo-screen-1.jpg')}}" class="img-responsive" alt=""> </div>
                                <div class="button">
                                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-location-pin text-primary"></i>
                                    <h3>Restaurantes cerca de ti</h3>
                                    <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-wallet text-primary"></i>
                                    <h3>Pagos seguros</h3>
                                    <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-pie-chart text-primary"></i>
                                    <h3>Gestión de tus gastos</h3>
                                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-badge text-primary"></i>
                                    <h3>Miles de restaurantes</h3>
                                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-hourglass text-primary"></i>
                                    <h3>No más colas</h3>
                                    <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="icon-people text-primary"></i>
                                    <h3>Comparte</h3>
                                    <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <div class="container">
                <h2>Deja de esperar.<br>Empieza a pedir.</h2>
                <a href="#contact" class="btn btn-outline btn-xl page-scroll">Pide ya!</a>
            </div>
        </div>
        <div class="overlay"></div>
    </section>

    <section id="contact" class="contact bg-primary">
        <div class="container">
            <h2>Nos <i class="fa fa-heart"></i> el buen servicio !</h2>
            <ul class="list-inline list-social">
                <li class="social-twitter">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li class="social-facebook">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li class="social-google-plus">
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2017 Waneat. All Rights Reserved.</p>
            <ul class="list-inline">
                <li>
                    <a href="#">Privacidad</a>
                </li>
                <li>
                    <a href="#">Terminos</a>
                </li>
                <li>
                    <a href="#">FAQ</a>
                </li>
            </ul>
        </div>
    </footer>


    <!-- Bootstrap & jQuery -->
    <script src="{{URL::asset('./js/app.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme js -->
    <script src="{{URL::asset('./js/new-age.js')}}"></script>

</body>
</html>
