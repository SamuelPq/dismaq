<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dismaq') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="" rel="stylesheet">

    <link href="{{ asset('android-dot-com/material.min.css') }}" rel="stylesheet">
    <link href="{{ asset('android-dot-com/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('pss/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('pss/css/mdb.min.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('pss/materialize/css/materialize.min.css') }}" rel="stylesheet"> -->
    <style rel="stylesheet">
        html,
        body {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #ff4000;
            /*background-color: #304a74;*/
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        /*Caption*/

        .flex-center {
            color: #fff;
        }
    </style>
</head>
<body class="black-skin">

  <div class="">
      @yield('content')
  </div>
    <script src="{{ asset('js/init.js') }}"></script>
    <script src="{{ asset('pss/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ asset('pss/js/tether.min.js') }}"></script>
    <script src="{{ asset('pss/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('pss/js/mdb.min.js') }}"></script>
    <script>
    new WOW().init();
    </script>
</body>
<footer>
  <div class="">
    @include('layouts.footer')
  </div>
</footer>
</html>
