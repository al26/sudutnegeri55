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

			<section id="info" class="bg-faded">
				<div class="container-fluid pt-3 pb-3 ml-0 mr-0">
					<ul class="list-unstyled">
					  <li class="media">
					    <img class="d-flex mr-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Campaign Peduli</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					  <li class="media my-4">
					    <img class="d-flex mr-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Project Terlaksana</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					  <li class="media">
					    <img class="d-flex mr-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Si Negeri Peduli</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					  <li class="media my-4">
					    <img class="d-flex mr-3 rounded img-fluid" src="{{ asset('vendor/images/homepage_icons/icon_1.png') }}" alt="Image Icon" style="width: 64px;">
					    <div class="media-body">
					      <h5 class="mt-0 mb-1">Investasi Berdampak</h5>
					      <h5 class="text-danger"><small>1.244</small></h5>
					    </div>
					  </li>
					</ul>	
				</div>
			</section>

			<section id="project" class="bg-info">
				<div id="section-title" class="text-left text-white">
					<h2 id="st-main">Project Populer</h2>
					<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
				</div>
				<div class="owl-carousel owl-theme">
				    <div class="item">
				    	<div class="card-flip">
							<div class="flip">
								<div class="front">
									<div class="card-deck">
									  	<div class="card border-0">
										    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_1.jpg') }}" alt="Card image cap">
										    <div class="card-block px-3 pt-3">
										      	<a href="" class="card-link"><h4 class="card-title">Card title 1</h4></a>
										      	<h6 class="card-subtitle mb-2 text-muted">Project Leader | User Role</h6>
										      	<!-- <p class="card-text">Bidang : Pendidikan Dasar (PAUD) </p> -->
										      	<button class="btn btn-outline-info btn-sm btn-block" onclick="manualFlip('flip')">
				                                    <i class="fas fa-file-alt"></i> Syarat dan Ketentuan
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

								<div class="back">
									<div class="card-deck">
									  	<div class="card border-0">
										    <div class="card-header clearfix">
										    	<h5 class="card-title mb-0 float-left">Syarat & Ketentuan</h5>
											    <button class="close float-right" onclick="manualFlip('nf')">
										          	<span aria-hidden="true">&times;</span>
										        </button>
											</div>
										    <div class="card-block py-2">
										    	<ul class="container list-unstyled">
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
										    <!-- <div class="card-footer">
										      	<small class="text-muted">Last updated 3 mins ago</small>
										    </div> -->
									  	</div>
									</div>
								</div>
							</div>
						</div>
				    </div>
				    <div class="item">
				    	<div class="card-deck">
						  	<div class="card border-0">
							    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_2.jpg') }}" alt="Card image cap">
							    <div class="card-block p-3">
							      	<h4 class="card-title">Card title 2</h4>
							      	<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							    </div>
							    <div class="card-footer">
							      	<small class="text-muted">Last updated 3 mins ago</small>
							    </div>
						  	</div>
						</div>
				    </div>
				    <div class="item">
				    	<div class="card-deck">
						  	<div class="card border-0">
							    <img class="card-img-top" src="{{ asset('vendor/images/homepage_carousel/project_slider/pr_3.jpg') }}" alt="Card image cap">
							    <div class="card-block p-3">
							      	<h4 class="card-title">Card title 3</h4>
							      	<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							    </div>
							    <div class="card-footer">
							      	<small class="text-muted">Last updated 3 mins ago</small>
							    </div>
						  	</div>
						</div>
				    </div>
				</div>
				<!-- <div class="owl-custom-dots">
			    	<div class="owl-indicators">
					    <span></span>
					</ol>
			    </div> -->
			</section>

			<section id="campaign" class="bg-secondary">
				<div id="section-title" class="text-left">
					<h2 id="st-main">Project Populer</h2>
					<h3 id="st-secondary"><small>Jadi volunteer atau salurkan investasi Anda</small></h3>
				</div>
			</section>
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
	    </script>
    </body>
</html>
