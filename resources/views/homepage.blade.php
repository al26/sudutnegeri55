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
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSearch">
					<span class="fas fa-search"></span>
				</button>

				<ul class="navbar-side" id="navbarSide">
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Daftar</a>
				  </li>
				  <li class="navbar-side-item">
				    <a href="#" class="side-link">Masuk</a>
				  </li>
				</ul>

				<div class="overlay"></div>

				<div class="collapse navbar-collapse" id="navbarSearch">
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <form class="form-inline" action="/action_page.php">
						    <input class="form-control mr-sm-2" type="text" placeholder="Search">
						    <button class="btn btn-success" type="submit">Search</button>
						</form>
				      </li> 
				    </ul>
				</div> 
			</nav>


			<section id="banner" class="text-center">
				<div id="img-banner">
					<!-- <img src="{{ asset('images/main_bg.jpg') }}" alt="Image Banner" class="img-fluid"> -->
				</div>
				<div id="caption-banner">
					<h2 id="cb-title">Peduli Pendidikan Indonesia</h2>
					<h3 id="cb-desc"><small>SudutNegeri mempertemukan antara Volunteer dan Donatur dengan bagian Indonesia yang membutuhkan bantuan pendidikan</small></h3>
				</div>
			</section>

			<section id="info">
				<div class="container-fluid pt-3 pb-3 ml-0 mr-0">
					<ul class="list-unstyled">
					  <li class="media">
					    <img class="d-flex mr-3 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16171214611%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16171214611%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Campaign Peduli</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					  <li class="media my-4">
					    <img class="d-flex mr-3 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16171214611%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16171214611%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Project Terlaksana</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					  <li class="media">
					    <img class="d-flex mr-3 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16171214611%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16171214611%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Si Negeri Peduli</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					  <li class="media my-4">
					    <img class="d-flex mr-3 rounded" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16171214611%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16171214611%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Investasi Berdampak</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					</ul>	
				</div>
			</section>


        </div>



		<!-- Scripts -->
	    <script src="{{ asset('vendor/js/app.js') }}"></script>
    </body>
</html>
