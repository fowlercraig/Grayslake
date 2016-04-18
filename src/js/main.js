// @codekit-prepend "site/default-ui.js"

$(window).load(function(){
	if ( $('body').hasClass('home')) {
		setTimeout(function(){
			$('.home__module').each(function(i,el) {
				var $this = $(this);
				setTimeout(function() {
					$this.addClass('loaded');
				}, i*200); // milliseconds
			});
		},500);
	}
});

$(window).scroll(function() {
	if ($("#header__mission").length) {
		var e = $(window).scrollTop() / 4;
		$("#header__mission-wrapper").css({
			"transform": "translateY(" + e + "px)"
		});
	}
})

function header(){
	//var options = {
	//    offset: '#content-wrapper',
	//    classes: {
	//        clone:   'banner--clone',
	//        stick:   'banner--stick',
	//        unstick: 'banner--unstick'
	//    },
  //    onInit:    function () {
  //      $('.banner--clone .text-center').prepend('<a href="#" class="btn btn--nav btn--logo_small"><img class="alignnone size-full wp-image-683" src="/wp-content/uploads/2016/02/g.png" alt="g" width="27" height="26" /></a>');
  //    },
	//};
	//var banner = new Headhesive('#header', options);
	$('#header-navigation').scrollToFixed();
}

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

$(document).ready(function(){
	mobileMenu();
  header();
	$('.equalize').equalize();
});