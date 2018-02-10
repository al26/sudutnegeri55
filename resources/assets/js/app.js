
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

$( document ).ready(function() {

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
	    dots:true,
	    responsive:{
	        0:{
	            items:1,
	            dots:true
	        },
	        768:{
	            items:2,
	            dots:true
	        },            
	        1024:{
	            items:4,
	            dots:true
	        },
	        1440:{
	            items:4,
	            dots:true
	        },
	        2560:{
	            items:6,
	            dots:true
	        }
	    }
	});



});
