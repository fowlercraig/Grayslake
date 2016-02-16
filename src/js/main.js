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

function mobileMenu(){
	// Clone that thing
	var a = $('#header-navigation').html();
	var b = $('#mobile-menu_container').html(a);
	$('#mobile-menu_container a').removeClass('btn-nav').addClass('btn-mobile');
	$(".mobile-toggle").swap();
}

$(document).ready(function(){
	mobileMenu();
});