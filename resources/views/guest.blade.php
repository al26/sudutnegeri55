<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
	    <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('vendor/css/app.css') }}" rel="stylesheet">

        <script defer src="{{ asset('js/fontawesome-all.js') }}"></script>
    </head>
    <body>
        <div id="app">
        	<nav class="navbar navbar-expand-sm navbar-dark bg-primary ">
	        	<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" id="navbarSideButton">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
					<span class="fas fa-search"></span>
				</button>

				<ul class="navbar-side" id="navbarSide">
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				</ul>

				<div class="overlay"></div>

			</nav>
        </div>



		<!-- Scripts -->
	    <script src="{{ asset('vendor/js/app.js') }}"></script>
    </body>
</html>
