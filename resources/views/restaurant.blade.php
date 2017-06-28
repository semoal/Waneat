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
        @forelse ($restaurant as $user)
            <li>{{ $user->name }}</li>
        @empty
            <p>No tienes restaurantes a tu nombre</p>
        @endforelse

    <!-- Bootstrap & jQuery -->
    <script src="{{URL::asset('./js/app.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme js -->
    <script src="{{URL::asset('./js/new-age.js')}}"></script>

</body>
</html>
