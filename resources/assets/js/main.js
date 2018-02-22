window.flipToBack = function (btn) {
	$(btn).parents('.front-side').hide();
	$(btn).parents('.card-flip').find('.back-side').show();
}

window.flipToFront = function (btn) {
	$(btn).parents('.back-side').hide();
	$(btn).parents('.card-flip').find('.front-side').show();
}

$(document).ready(function() {

	$(window).scroll(function(){
		$('.navbar').toggleClass('bg-change', $(this).scrollTop() > 50);
	});

	// Open navbarSide when button is clicked
	$('#navbarSideButton').on('click', function() {
	    $('#navbarSide').addClass('reveal');
	    $('.overlay').show();
	});

	// Close navbarSide when the outside of menu is clicked
	$('.overlay').on('click', function(){
	    $('#navbarSide').removeClass('reveal');
	    $('.overlay').hide();
	});

  	// Owl carousel plugin
	var owl = $('.owl-carousel');
	owl.owlCarousel({
	    margin: 5,
	    lazyLoad: true,
	    responsive:{
	        0:{
	            items:1,
	            dots: false,
			    loop: false,
			    stagePadding: 20
	        },
	        600:{
	            items:2,
	            dots: false,
	            loop: false,
			    stagePadding: 20
	        },            
	        900:{
	            items:2,
	            dots: false,
	            loop: false,
			    stagePadding: 20,
			    // nav: true,
			    dots: true
	        },
	        1200:{
	            items:2,
	            dots: false,
	            loop: false,
			    stagePadding: 30,
			    // nav: true,
			    dots: true
	        },
	        2000:{
	            items:3,
	            dots: false,
	            loop: false,
			    stagePadding: 50,
			    // nav: true,
			    dots: true
	        }
	    }
	});

	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});

});