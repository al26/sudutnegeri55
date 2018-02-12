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
		// stagePadding: 20,
	    loop: true,
	    margin: 10,
	    lazyLoad: true,
	    responsive:{
	        0:{
	            items:1.1,
	            dots: false
	        },
	        600:{
	            items:2,
	            dots: false
	        },            
	        900:{
	            items:3,
	            dots: false
	        },
	        1200:{
	            items:3,
	            dots: false
	        }
	    }
	});

});