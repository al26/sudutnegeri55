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
        <!-- owl carousel plugin -->
        <link rel="stylesheet" href="{{ asset('vendor/css/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{ asset('vendor/css/animate.css') }}">

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
				<div id="img-banner" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					    <div class="carousel-item active">
					      	<img src="{{ asset('vendor/images/homepage_carousel/main_slider/bg_1.jpg') }}" alt="First Image" class="d-block img-fluid">
					    </div>
					    <div class="carousel-item">
					      	<img src="{{ asset('vendor/images/homepage_carousel/main_slider/bg_2.jpg') }}" alt="Second Image" class="d-block img-fluid">
					    </div>
					    <div class="carousel-item">
					      	<img src="{{ asset('vendor/images/homepage_carousel/main_slider/bg_3.jpg') }}" alt="Third Image" class="d-block img-fluid">
					    </div>
					</div>
				</div>
				<div id="caption-banner">
					<h2 id="cb-title">Peduli Pendidikan Indonesia</h2>
					<h3 id="cb-desc"><small>SudutNegeri mempertemukan antara Volunteer dan Donatur dengan bagian Indonesia yang membutuhkan bantuan pendidikan</small></h3>
				</div>
			</section>

			<section id="project" class="bg-info">
				<div id="section-title" class="text-left text-white d-flex flex-row justify-content-between">
					<div class="d-flex flex-column">
						<h2 id="st-main">Project Populer</h2>
						<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
					</div>
					<a href="" class="p-1 text-white align-self-center"><h1 class="m-0"><i class="fas fa-angle-right"></i></h1></a>
				</div>
				<div class="owl-carousel owl-theme">
				    <div class="item">
				    	<div class="card-flip">
							<div class="front-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
									    <div class="card-block px-3 pt-3">
									      	<a href="" class="card-link"><h5 class="card-title text-capitalize">Judul Project Pendidikan yang dijalankan</h5></a>
									      	<h6 class="card-subtitle mb-2 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
									      	<hr>
									      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
									      	<button class="btn btn-outline-info btn-sm btn-block" id="flipToBack" onclick="flipToBack(this)">
			                                    <i class="fas fa-file-alt"></i> Kebutuhan Project
			                                </button>
									    </div>
									    <div class="card-footer px-3">
									    	<div class="btn-group btn-group-sm w-100" role="group">
									    		<a href="" class="btn btn-sm btn-danger w-50">Jadi Volunteer</a>
									      		<a href="" class="btn btn-sm btn-primary w-50">Mulai Investasi</a>
									    	</div>					      	
									    </div>
								  	</div>
								</div>
							</div>

							<div class="back-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <div class="card-header clearfix">
									    	<h5 class="card-title mb-0 float-left">Kebutuhan Project 1</h5>
										    <button class="close float-right" id="flipToFront" onclick="flipToFront(this)">
									          	<span aria-hidden="true">&times;</span>
									        </button>
										</div>
									    <div class="card-block py-2">
									    	<div id="list-container">
									    		<ul class="list-unstyled" id="list-overflow">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
												    <ul>
												      <li>Phasellus iaculis neque</li>
												      <li>Purus sodales ultricies</li>
												      <li>Vestibulum laoreet porttitor sem</li>
												      <li>Ac tristique libero volutpat at</li>
												    </ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												  <li>Nulla volutpat aliquam velit
												    <ul>
												      <li>Phasellus iaculis neque</li>
												      <li>Purus sodales ultricies</li>
												      <li>Vestibulum laoreet porttitor sem</li>
												      <li>Ac tristique libero volutpat at</li>
												    </ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
									    	</div>
									    </div>
									    <div class="card-footer px-3">
									    	<div class="btn-group btn-group-sm w-100" role="group">
									    		<a href="" class="btn btn-sm btn-danger w-50">Jadi Volunteer</a>
									      		<a href="" class="btn btn-sm btn-primary w-50">Mulai Investasi</a>
									    	</div>					      	
									    </div>
								  	</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="item">
				    	<div class="card-flip">
							<div class="front-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_2.jpg') }}" alt="Card image cap">
									    <div class="card-block px-3 pt-3">
									      	<a href="" class="card-link"><h5 class="card-title text-capitalize">Judul Project Pendidikan yang dijalankan</h5></a>
									      	<h6 class="card-subtitle mb-2 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
									      	<hr>
									      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
									      	<button class="btn btn-outline-info btn-sm btn-block" id="flipToBack" onclick="flipToBack(this)">
			                                    <i class="fas fa-file-alt"></i> Kebutuhan Project
			                                </button>
									    </div>
									    <div class="card-footer px-3">
									    	<div class="btn-group btn-group-sm w-100" role="group">
									    		<a href="" class="btn btn-sm btn-danger w-50">Jadi Volunteer</a>
									      		<a href="" class="btn btn-sm btn-primary w-50">Mulai Investasi</a>
									    	</div>					      	
									    </div>
								  	</div>
								</div>
							</div>

							<div class="back-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <div class="card-header clearfix">
									    	<h5 class="card-title mb-0 float-left">Kebutuhan Project 2</h5>
										    <button class="close float-right" id="flipToFront" onclick="flipToFront(this)">
									          	<span aria-hidden="true">&times;</span>
									        </button>
										</div>
									    <div class="card-block py-2">
									    	<div id="list-container">
									    		<ul class="list-unstyled" id="list-overflow">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
												    <ul>
												      <li>Phasellus iaculis neque</li>
												      <li>Purus sodales ultricies</li>
												      <li>Vestibulum laoreet porttitor sem</li>
												      <li>Ac tristique libero volutpat at</li>
												    </ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												  <li>Nulla volutpat aliquam velit
												    <ul>
												      <li>Phasellus iaculis neque</li>
												      <li>Purus sodales ultricies</li>
												      <li>Vestibulum laoreet porttitor sem</li>
												      <li>Ac tristique libero volutpat at</li>
												    </ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
									    	</div>
									    </div>
									    <div class="card-footer px-3">
									    	<div class="btn-group btn-group-sm w-100" role="group">
									    		<a href="" class="btn btn-sm btn-danger w-50">Jadi Volunteer</a>
									      		<a href="" class="btn btn-sm btn-primary w-50">Mulai Investasi</a>
									    	</div>					      	
									    </div>
								  	</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="item">
				    	<div class="card-flip">
							<div class="front-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_3.jpg') }}" alt="Card image cap">
									    <div class="card-block px-3 pt-3">
									      	<a href="" class="card-link"><h5 class="card-title text-capitalize">Judul Project Pendidikan yang dijalankan</h5></a>
									      	<h6 class="card-subtitle mb-2 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
									      	<hr>
									      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
									      	<button class="btn btn-outline-info btn-sm btn-block" id="flipToBack" onclick="flipToBack(this)">
			                                    <i class="fas fa-file-alt"></i> Kebutuhan Project
			                                </button>
									    </div>
									    <div class="card-footer px-3">
									    	<div class="btn-group btn-group-sm w-100" role="group">
									    		<a href="" class="btn btn-sm btn-danger w-50">Jadi Volunteer</a>
									      		<a href="" class="btn btn-sm btn-primary w-50">Mulai Investasi</a>
									    	</div>					      	
									    </div>
								  	</div>
								</div>
							</div>

							<div class="back-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <div class="card-header clearfix">
									    	<h5 class="card-title mb-0 float-left">Kebutuhan Project 3</h5>
										    <button class="close float-right" id="flipToFront" onclick="flipToFront(this)">
									          	<span aria-hidden="true">&times;</span>
									        </button>
										</div>
									    <div class="card-block py-2">
									    	<div id="list-container">
									    		<ul class="list-unstyled" id="list-overflow">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
												    <ul>
												      <li>Phasellus iaculis neque</li>
												      <li>Purus sodales ultricies</li>
												      <li>Vestibulum laoreet porttitor sem</li>
												      <li>Ac tristique libero volutpat at</li>
												    </ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												  <li>Nulla volutpat aliquam velit
												    <ul>
												      <li>Phasellus iaculis neque</li>
												      <li>Purus sodales ultricies</li>
												      <li>Vestibulum laoreet porttitor sem</li>
												      <li>Ac tristique libero volutpat at</li>
												    </ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
									    	</div>
									    </div>
									    <div class="card-footer px-3">
									    	<div class="btn-group btn-group-sm w-100" role="group">
									    		<a href="" class="btn btn-sm btn-danger w-50">Jadi Volunteer</a>
									      		<a href="" class="btn btn-sm btn-primary w-50">Mulai Investasi</a>
									    	</div>					      	
									    </div>
								  	</div>
								</div>
							</div>
						</div>
				    </div>
				</div>
			</section>

			<section id="campaign" class="bg-danger">
				<div id="section-title" class="text-left text-white d-flex flex-row justify-content-between">
					<div class="d-flex flex-column">
						<h2 id="st-main">Campaign Populer</h2>
						<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
					</div>
					<a href="" class="p-1 text-white align-self-center"><h1 class="m-0"><i class="fas fa-angle-right"></i></h1></a>
				</div>
				<div class="owl-carousel owl-theme">
				    <div class="item">
				    	<div class="card-flip">
							<div class="front-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
									    <div class="card-block px-3 pt-3">
									      	<a href="" class="card-link text-danger"><h5 class="card-title text-capitalize">Judul Campaign Pendidikan yang dijalankan</h5></a>
									      	<h6 class="card-subtitle mb-2 text-muted text-capitalize"><small>Nama Campaigner | Si Sudut</small></h6>
									      	<hr>
									      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
									      	<button class="btn btn-outline-danger btn-sm btn-block" id="flipToBack" onclick="flipToBack(this)">
			                                    <i class="fas fa-file-alt"></i> Sinopsis
			                                </button>
									    </div>
									    <div class="card-footer px-3">
								    		<a href="" class="btn btn-sm btn-primary w-100">Jadikan Project</a>
									    </div>
								  	</div>
								</div>
							</div>

							<div class="back-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <div class="card-header clearfix">
									    	<h5 class="card-title mb-0 float-left">Sinopsis</h5>
										    <button class="close float-right" id="flipToFront" onclick="flipToFront(this)">
									          	<span aria-hidden="true">&times;</span>
									        </button>
										</div>
									    <div class="card-block py-3">
									    	<div id="list-container">
									    		<p class="card-text text-justify">
									    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
									    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									    		</p>
									    	</div>
									    </div>
									    <div class="card-footer px-3">
								    		<a href="" class="btn btn-sm btn-primary w-100">Jadikan Project</a>
									    </div>
								  	</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="item">
				    	<div class="card-flip">
							<div class="front-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_2.jpg') }}" alt="Card image cap">
									    <div class="card-block px-3 pt-3">
									      	<a href="" class="card-link text-danger"><h5 class="card-title text-capitalize">Judul Campaign Pendidikan yang dijalankan</h5></a>
									      	<h6 class="card-subtitle mb-2 text-muted text-capitalize"><small>Nama Campaigner | Si Sudut</small></h6>
									      	<hr>
									      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
									      	<button class="btn btn-outline-danger btn-sm btn-block" id="flipToBack" onclick="flipToBack(this)">
			                                    <i class="fas fa-file-alt"></i> Sinopsis
			                                </button>
									    </div>
									    <div class="card-footer px-3">
								    		<a href="" class="btn btn-sm btn-primary w-100">Jadikan Project</a>
									    </div>
								  	</div>
								</div>
							</div>

							<div class="back-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <div class="card-header clearfix">
									    	<h5 class="card-title mb-0 float-left">Sinopsis</h5>
										    <button class="close float-right" id="flipToFront" onclick="flipToFront(this)">
									          	<span aria-hidden="true">&times;</span>
									        </button>
										</div>
									    <div class="card-block py-3">
									    	<div id="list-container">
									    		<p class="card-text text-justify">
									    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
									    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									    		</p>
									    	</div>
									    </div>
									    <div class="card-footer px-3">
								    		<a href="" class="btn btn-sm btn-primary w-100">Jadikan Project</a>
									    </div>
								  	</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="item">
				    	<div class="card-flip">
							<div class="front-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_3.jpg') }}" alt="Card image cap">
									    <div class="card-block px-3 pt-3">
									      	<a href="" class="card-link text-danger"><h5 class="card-title text-capitalize">Judul Campaign Pendidikan yang dijalankan</h5></a>
									      	<h6 class="card-subtitle mb-2 text-muted text-capitalize"><small>Nama Campaigner | Si Sudut</small></h6>
									      	<hr>
									      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
									      	<button class="btn btn-outline-danger btn-sm btn-block" id="flipToBack" onclick="flipToBack(this)">
			                                    <i class="fas fa-file-alt"></i> Sinopsis
			                                </button>
									    </div>
									    <div class="card-footer px-3">
								    		<a href="" class="btn btn-sm btn-primary w-100">Jadikan Project</a>
									    </div>
								  	</div>
								</div>
							</div>

							<div class="back-side w-100 animated flipInY">
								<div class="card-deck">
								  	<div class="card border-0" id="myCard">
									    <div class="card-header clearfix">
									    	<h5 class="card-title mb-0 float-left">Sinopsis</h5>
										    <button class="close float-right" id="flipToFront" onclick="flipToFront(this)">
									          	<span aria-hidden="true">&times;</span>
									        </button>
										</div>
									    <div class="card-block py-3">
									    	<div id="list-container">
									    		<p class="card-text text-justify">
									    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br>
									    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									    			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									    			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									    			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									    			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									    		</p>
									    	</div>
									    </div>
									    <div class="card-footer px-3">
								    		<a href="" class="btn btn-sm btn-primary w-100">Jadikan Project</a>
									    </div>
								  	</div>
								</div>
							</div>
						</div>
				    </div>
				</div>
			</section>

			<section id="info" class="bg-grey">
				<div class="d-flex flex-row justify-content-center py-3">
					<div class="container">
					  <div class="card bg-faded">
					    <div class="card-body media">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Campaign Peduli</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					  <div class="card bg-faded my-1">
					    <div class="card-body media">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Project Terlaksana</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					  <div class="card bg-faded my-1">
					    <div class="card-body media">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Si Negeri Peduli</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					  <div class="card bg-faded">
					    <div class="card-body media">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Investasi Berdampak</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					</div>
				</div>
			</section>

			<section id="team" class="bg-faded">
				<div id="section-title" class="text-left text-danger d-flex flex-column">
					<h2 id="st-main">Ikuti Jejak Kami</h2>
					<h3 id="st-secondary"><small>Bersama majukan pendidikan Indonesia dan jadilan inspirasi</small></h3>
				</div>
			</section>

			<footer class="bg-black p-2">
				div#footer
				<div id="claimer" class="text-left d-flex flex-row justify-content-between">
					<a href="" class="p-1 align-self-center text-white"><h5 class="m-0">{{ config('app.name', 'Laravel') }}</h5></a>
					<h6 class="text-muted text-capitalize align-self-center p-1 m-0"><small>&copy; 2017 | All Right Reserved</small></h6>
				</div>
			</footer>
        </div>



		<!-- Scripts -->
	    <script src="{{ asset('vendor/js/app.js') }}"></script>
	    <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
	    <script type="text/javascript">
	    	function rotateCard(){
		        $('.card-flip').toggleClass('hover');
		    }
		    function manualFlip(action) {
		    	var card = $('.card-flip');

		    	if (action == 'flip') {
		    		if (card.hasClass('not-flipped')) card.removeClass('not-flipped');
		    		card.addClass('flipped');
		    	} else {
		    		if (card.hasClass('flipped')) card.removeClass('flipped');
		    		card.addClass('not-flipped');
		    	}
		    	
		    }

		    function flipToBack(btn) {
		    	$(btn).parents('.front-side').hide();
		    	$(btn).parents('.card-flip').find('.back-side').show();
		    }

		    function flipToFront(btn) {
		    	$(btn).parents('.back-side').hide();
		    	$(btn).parents('.card-flip').find('.front-side').show();
		    }

	    </script>
    </body>
</html>
