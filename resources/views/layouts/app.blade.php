<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/rs-plugin/css/settings.css') }}" media="screen" />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <!-- JavaScripts -->
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>

    <!-- Online Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>

</head>
<body>

    <!-- Navbar Include -->
    @include('partials.navbar')

        @yield('content')
  
    @include('partials.footer')
    <!-- JS Files -->
    <script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script> 
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('assets/js/own-menu.js') }}"></script> 
    <script src="{{ asset('assets/js/jquery.lighter.js') }}"></script> 
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script> 
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
    <script src="{{ asset('assets/rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
    <script src="{{ asset('assets/rs-plugin/js/jquery.tp.min.js') }}"></script> 
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
