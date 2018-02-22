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
        	<nav class="navbar navbar-expand-lg bg-light fixed-top ppx-lg-5 py-lg-2">
	        	<!-- Toggler/collapsibe Button -->
				<!-- <button class="navbar-toggler text-black" type="button" id="navbarSideButton">
					<i class="fas fa-th-list"></i>
				</button> -->
				<button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
			        <span class="fas fa-th-list"></span>
		        </button>
				<a class="navbar-brand text-black" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
				<div id="main-menu" class="d-none d-lg-flex flex-lg-row justify-content-lg-between w-100">
					<div id="searchbox" class="align-self-center">
						<form class="form-inline d-inline" action="/action_page.php">
					    	<div class="input-group">
							    <input class="form-control rounded-0 py-2 px-3" type="text" placeholder="Cari project, campaign, atau pertanyaan" autocomplete="true">
							    <span class="input-group-btn p-1">
								    <button class="btn btn-secondary rounded-circle py-1 px-2" type="submit"><i class="fas fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<div id="btn-menu" class="align-self-center">
						<a href="" class="btn btn-sm btn-outline-secondary">Buat Campaign</a>
						<a href="" class="btn btn-sm btn-outline-secondary">Jadi Volunteer</a>
						<a href="" class="btn btn-sm btn-outline-secondary">Investasi</a>
					</div>
				</div>
				<button class="navbar-toggler text-black" type="button" data-toggle="search">
					<span class="fas fa-search"></span>
				</button>

				<div class="search-collapse navbar-collapse p-2" id="navbarSearch">
				    <form class="form-inline d-inline w-100" action="/action_page.php">
				    	<div class="input-group">
						    <input class="form-control rounded-0 p-1" type="text" placeholder="Cari project, campaign, atau pertanyaan" autocomplete="true">
						    <span class="input-group-btn">
							    <button class="btn btn-info rounded-0" type="submit">Cari</button>
							</span>
						</div>
					</form>
				</div>

				<div class="navbar-collapse offcanvas-collapse d-block d-lg-none" id="navbarsExampleDefault">
			        <div class="card bg-light p-3">
		        		<p class="card-text">Ayo bantu majukan pendidikan di Indonesia.</p>
				        <div class="d-flex flex-row justify-content-start">
				    		<a href="" class="btn btn-sm btn-outline-danger mr-2">Masuk</a>
				      		<a href="" class="btn btn-sm btn-outline-primary mr-2">Daftar</a>
				    	</div>
		        	</div>
		        	<div class="py-3">
				        <ul class="navbar-nav mr-auto px-1">
				          <li class="px-2 nav-item active">
				            <a class="nav-link text-black" href="#"><span class="fas fa-home w-8"></span> Home</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-money-bill-alt w-8"></span> Investasi</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-puzzle-piece w-8"></span> Menjadi Negeri</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-bullhorn w-8"></span> Menjadi Sudut</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-building w-8"></span> For Corporation / CSR</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-handshake w-8"></span> For Nonprofit Organization / NGO</a>
				          </li>
				      	</ul>
				      	<hr class="style-one">
				        <ul class="navbar-nav mr-auto px-1">
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-file-alt w-8"></span> Syarat dan Ketentuan</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-unlock-alt w-8"></span> Kebijakan Privasi</a>
				          </li>
				          <li class="px-2 nav-item">
				            <a class="nav-link text-black" href="#"><span class="fas fa-question-circle w-8"></span> FAQ</a>
				          </li>
				        </ul>
			        </div>
			    </div> 
			</nav>
			<br><br>

			<section id="banner" class="text-center ">
				<div id="img-banner" class="carousel slide d-flex flex-column" data-ride="carousel">
					<div class="carousel-inner">
					    <div class="carousel-item active">
					      	<img src="{{ asset('vendor/images/homepage_carousel/main_slider/bg_1.jpg') }}" alt="First Image" class="img-fluid">
					    </div>
					    <div class="carousel-item">
					      	<img src="{{ asset('vendor/images/homepage_carousel/main_slider/bg_2.jpg') }}" alt="Second Image" class="img-fluid">
					    </div>
					    <div class="carousel-item">
					      	<img src="{{ asset('vendor/images/homepage_carousel/main_slider/bg_3.jpg') }}" alt="Third Image" class="img-fluid">
					    </div>
					</div>
					<div id="caption-banner" class="carousel-caption text-justify text-sm-center">
					    <h5 id="cb-title" class="text-capitalize">Ikut Peduli Majukan Pendidikan Indonesia</h5>
						<h6 id="cb-desc" class="d-none d-sm-block"><small>SudutNegeri mempertemukan antara Volunteer dan Donatur dengan bagian Indonesia yang membutuhkan bantuan pendidikan</small></h6>
						<a href="" class="btn btn-md btn-outline-white mt-3">Ikut Peduli</a>

				    </div>
				</div>
			</section>

			<section id="project" class="bg-info ">
				<div id="section-title" class="text-left text-white d-flex d-lg-none flex-row justify-content-between">
					<div class="d-flex flex-column">
						<h2 id="st-main">Project Populer</h2>
						<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
					</div>
					<a href="" class="p-1 text-white align-self-center"><h1 class="m-0"><i class="fas fa-angle-right"></i></h1></a>
				</div>
				<div id="card-slider-container" class="d-flex flex-row justify-content-between ppx-lg-10 py-lg-3">
					<div class="d-none d-lg-flex flex-column w-lg-40 w-xl-30 mr-5 mt-5 text-white">
						<h2 id="st-main">Project Populer</h2>
						<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
						<a href="" class="btn btn-md btn-outline-danger mt-3 text-white">Lihat Semua Project</a>
					</div>
					<div id="card-slider" class="px-0 pb-3 owl-carousel owl-theme w-lg-60 w-xl-70">
					    <div class="item">
					    	<div class="card-flip">
								<div class="front-side w-100 animated flipInY">
									<div class="card-deck">
									  	<div class="card border-0" id="myCard">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_3.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link"><h6 class="card-title text-capitalize mb-2">Judul Project Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
										      	<hr class="my-2">
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
					    <div class="item">
					    	<div class="card-flip">
								<div class="front-side w-100 animated flipInY">
									<div class="card-deck">
									  	<div class="card border-0" id="myCard">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link"><h6 class="card-title text-capitalize mb-2">Judul Project Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
										      	<hr class="my-2">
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
					    <div class="item">
					    	<div class="card-flip">
								<div class="front-side w-100 animated flipInY">
									<div class="card-deck">
									  	<div class="card border-0" id="myCard">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_2.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link"><h6 class="card-title text-capitalize mb-2">Judul Project Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
										      	<hr class="my-2">
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
					    <div class="item">
					    	<div class="card-flip">
								<div class="front-side w-100 animated flipInY">
									<div class="card-deck">
									  	<div class="card border-0" id="myCard">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link"><h6 class="card-title text-capitalize mb-2">Judul Project Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
										      	<hr class="my-2">
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
					    <div class="item">
					    	<div class="card-flip">
								<div class="front-side w-100 animated flipInY">
									<div class="card-deck">
									  	<div class="card border-0" id="myCard">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_2.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link"><h6 class="card-title text-capitalize mb-2">Judul Project Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Ketua Project | Si Negeri</small></h6>
										      	<hr class="my-2">
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
				</div>
			</section>

			<section id="campaign" class="bg-danger ">
				<div id="section-title" class="text-left text-white d-flex d-lg-none flex-row justify-content-between">
					<div class="d-flex flex-column">
						<h2 id="st-main">Campaign Populer</h2>
						<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
					</div>
					<a href="" class="p-1 text-white align-self-center"><h1 class="m-0"><i class="fas fa-angle-right"></i></h1></a>
				</div>
				<div id="card-slider-container" class="d-flex flex-row justify-content-between ppx-lg-10 py-lg-3">
					<div id="card-slider" class="px-0 pb-3 owl-carousel owl-theme w-lg-60 w-xl-70">
					    <div class="item">
					    	<div class="card-flip">
								<div class="front-side w-100 animated flipInY">
									<div class="card-deck">
									  	<div class="card border-0" id="myCard">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link text-danger"><h6 class="card-title text-capitalize mb-2">Judul Campaign Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Campaigner | Si Sudut</small></h6>
										      	<hr class="my-2">
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
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link text-danger"><h6 class="card-title text-capitalize mb-2">Judul Campaign Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Campaigner | Si Sudut</small></h6>
										      	<hr class="my-2">
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
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link text-danger"><h6 class="card-title text-capitalize mb-2">Judul Campaign Pendidikan yang dijalankan</h6></a>
										      	<h6 class="card-subtitle mb-1 text-muted text-capitalize"><small>Nama Campaigner | Si Sudut</small></h6>
										      	<hr class="my-2">
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
					<div class="d-none d-lg-flex flex-column w-lg-40 w-xl-30 ml-5 mt-5 text-white">
						<h2 id="st-main">Campaign Populer</h2>
						<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
						<a href="" class="btn btn-md btn-outline-info mt-3 text-white">Lihat Semua Campaign</a>
					</div>
				</div>
			</section>

			<section id="info">
				<div class="row ppx-lg-10">
					  <div class="cardborder-0 col-12 col-sm-6 col col-lg-3">
					    <div class="card-body media p-3">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Campaign Peduli</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					  <div class="card border-0 col-12 col-sm-6 col col-lg-3">
					    <div class="card-body media p-3">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Project Terlaksana</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					  <div class="card border-0 col-12 col-sm-6 col col-lg-3">
					    <div class="card-body media p-3">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Si Negeri Peduli</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
					  <div class="card border-0 col-12 col-sm-6 col col-lg-3">
					    <div class="card-body media p-3">
						    <div class="media-body">
						      <h5 class="mt-0 mb-1 text-black">Investasi Berdampak</h5>
						      <h5 class="text-danger"><small>1.244</small></h5>
						    </div>
					    	<img class="d-flex ml-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    </div>
					  </div>
				</div>
			</section>

			<section id="team" class="bg-faded ">
				<div id="section-title" class="text-left text-lg-center text-danger d-flex flex-column">
					<h2 id="st-main">Ikuti Jejak Kami</h2>
					<h3 id="st-secondary"><small>Bersama majukan pendidikan Indonesia dan jadilan inspirasi</small></h3>
				</div>
				<div class="row container-fluid mx-auto ppx-lg-10">
					<div class="col-6 col-sm-4 col-lg-2 p-0">
						<div class="card border-0">
						  <img class="card-img-top" src="{{ asset('vendor/images/people/people-1.jpg') }}" alt="Card image">
						  <div class="img-overlay">
						    <h6 class="card-title m-0 p-0">John Doe</h6>
						    <p class="card-text m-0 p-0"><small>Some example text.</small></p>
						  </div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 p-0">
						<div class="card border-0">
						  <img class="card-img-top" src="{{ asset('vendor/images/people/people-1.jpg') }}" alt="Card image">
						  <div class="img-overlay">
						    <h6 class="card-title m-0 p-0">John Doe</h6>
						    <p class="card-text m-0 p-0"><small>Some example text.</small></p>
						  </div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 p-0">
						<div class="card border-0">
						  <img class="card-img-top" src="{{ asset('vendor/images/people/people-1.jpg') }}" alt="Card image">
						  <div class="img-overlay">
						    <h6 class="card-title m-0 p-0">John Doe</h6>
						    <p class="card-text m-0 p-0"><small>Some example text.</small></p>
						  </div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 p-0">
						<div class="card border-0">
						  <img class="card-img-top" src="{{ asset('vendor/images/people/people-1.jpg') }}" alt="Card image">
						  <div class="img-overlay">
						    <h6 class="card-title m-0 p-0">John Doe</h6>
						    <p class="card-text m-0 p-0"><small>Some example text.</small></p>
						  </div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 p-0">
						<div class="card border-0">
						  <img class="card-img-top" src="{{ asset('vendor/images/people/people-1.jpg') }}" alt="Card image">
						  <div class="img-overlay">
						    <h6 class="card-title m-0 p-0">John Doe</h6>
						    <p class="card-text m-0 p-0"><small>Some example text.</small></p>
						  </div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-lg-2 p-0">
						<div class="card border-0">
						  <img class="card-img-top" src="{{ asset('vendor/images/people/people-1.jpg') }}" alt="Card image">
						  <div class="img-overlay">
						    <h6 class="card-title m-0 p-0">John Doe</h6>
						    <p class="card-text m-0 p-0"><small>Some example text.</small></p>
						  </div>
						</div>
					</div>
				</div>
			</section>

			<footer>
				<div id="footer-menu" class="px-md-3 ppx-lg-10">
					<div class="row text-white py-2 px-3">
						<div class="col-lg-3 d-none d-lg-block">
							<h5 class="font-weight-bold border-bottom">Bidang Pendidikan</h5>
							<ul class="list-unstyled m-0 list-inline">
								<li><a href="" class="p-0 btn btn-link text-white">Pengembangan Karakter Anak</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Kewirausahaan</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Kesehatan dan Lingkungan</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Keterampilan</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Edukasi Science Dasar</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Pendidikan Perempuan</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Wawasan Umum</a></li>
							</ul>
						</div>
						<div class="col-lg-3 d-none d-lg-block">
							<h5 class="font-weight-bold border-bottom">Pelajari Lebih</h5>
							<ul class="list-unstyled m-0 list-inline">
								<li><a href="" class="p-0 btn btn-link text-white">Apa itu SudutNegeri ?</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">FAQ (Pertanyaan Populer)</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Pelajari Sudut</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Pelajari Negeri</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Syarat dan Ketentuan</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Kebijakan Privasi</a></li>
							</ul>
						</div>
						<div class="col-lg-3 d-none d-lg-block">
							<h5 class="font-weight-bold border-bottom">Dukungan</h5>
							<ul class="list-unstyled m-0 list-inline">
								<li><a href="" class="p-0 btn btn-link text-white">Tips Project</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Transaksi</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Kontak Kami</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Kepercayaan dan Keamanan</a></li>
							</ul>
						</div>
						<div class="col-lg-3 d-none d-lg-block">
							<h5 class="font-weight-bold border-bottom">Ikut Peduli</h5>
							<ul class="list-unstyled m-0 list-inline">
								<li><a href="" class="p-0 btn btn-link text-white">Investasi</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Menjadi Negeri</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">Menjadi Sudut</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">For CSR</a></li>
								<li><a href="" class="p-0 btn btn-link text-white">For NGO</a></li>
							</ul>
						</div>
						<!-- <div class="col-6">
							<h5 class="font-weight-bold border-bottom">Ikuti Kami</h5>
							<ul class="list-unstyled m-0 list-inline">
								<li><a href="" class="p-0 btn btn-link btn-social text-white"><i class="mr-2 fab fa-facebook-f rounded-circle social-icon fb"></i> Facebook</a></li>
								<li><a href="" class="p-0 btn btn-link btn-social text-white"><i class="mr-2 fab fa-google-plus-g rounded-circle social-icon g-plus"></i> Google Plus</a>
								</li>
								<li><a href="" class="p-0 btn btn-link btn-social text-white"><i class="mr-2 fab fa-youtube rounded-circle social-icon youtube"></i> Youtube</a></li>
								<li><a href="" class="p-0 btn btn-link btn-social text-white"><i class="mr-2 fab fa-instagram rounded-circle social-icon ig"></i> Instagram</a></li>
							</ul>
						</div> -->
						<div class="col-12 d-block d-lg-none px-3">
							<a href="" class="p-0 text-white"><small>Pelajari Sudut</small></a> |
							<a href="" class="p-0 text-white"><small>Pelajari Negeri</small></a> |
							<a href="" class="p-0 text-white"><small>Tips Project</small></a> |
							<a href="" class="p-0 text-white"><small>Kepercayaan & Keamanan</small></a> |
							<a href="" class="p-0 text-white"><small>Kontak Kami</small></a>
						</div>
					</div>
				</div>
				<div id="main-footer" class="text-left d-flex flex-row justify-content-between py-2 px-3 p-md-3 py-lg-3 ppx-lg-10">
					<!-- <a href="" class="p-1 align-self-center text-white"><h5 class="m-0">{{ config('app.name', 'Laravel') }}</h5></a> -->
					<div class="d-flex flex-row justify-content-between align-self-center">
						<a href="" class="p-0" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="mr-2 fab fa-facebook-f rounded-circle social-icon fb"></i></a>
						<a href="" class="p-0" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="mr-2 fab fa-google-plus-g rounded-circle social-icon g-plus"></i></a>
						<a href="" class="p-0" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="mr-2 fab fa-youtube rounded-circle social-icon youtube"></i></a>
						<a href="" class="p-0" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="mr-2 fab fa-instagram rounded-circle social-icon ig"></i></a>
					</div>
					<h6 class="text-muted text-capitalize align-self-center p-1 m-0"><small>&copy; {{date('Y')}} | All Right Reserved</small></h6>
				</div>
			</footer>
        </div>



		<!-- Scripts -->
	    <script src="{{ asset('vendor/js/app.js') }}"></script>
	    <script src="{{ asset('vendor/js/owl.carousel.min.js') }}"></script>
	    <script type="text/javascript">
	    	

	    </script>
    </body>
</html>
