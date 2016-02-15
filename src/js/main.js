// @codekit-prepend "site/default-ui.js"

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