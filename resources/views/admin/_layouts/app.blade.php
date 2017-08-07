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
    <link href="{{ asset('lib/materialize/dist/css/materialize.css') }}" rel="stylesheet">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <header>

  </header>
  <div class="">
        @yield('content')
  </div>
  <div class="">

  </div>

 <script src="{{ asset('lib/jQuery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
        <script src="{{ asset('js/init.js') }}"></script>
</body>
<footer>

</footer>
</html>
