jQuery(document).ready(function($) {

	$(".headroom").headroom({
		"tolerance": 20,
		"offset": 50,
		"classes": {
			"initial": "animated",
			"pinned": "slideDown",
			"unpinned": "slideUp"
		}
	});

});

$(function(){
	$("#message").delay(5000).fadeOut();
});

$(document).ready(function() {
    $('.pgwSlider').pgwSlider();
});

$(function(){
	//$.scrollTo(0);
	$("#scroll").on('click', function(e){
		e.preventDefault();
		
		$.scrollTo("#newsCenter", 500);
	});
});

$(function(){
	$("#arrow").on('click', function(){
		$.scrollTo('body', 500);
	})
});

$(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>250) {
			$("#arrow").fadeIn();
		}
		else {
			$("#arrow").fadeOut();
		}
	});
});

$(function(){
	//$.scrollTo(0);
	$(".offers-scroll").on('click', function(e){
		e.preventDefault();
		$.scrollTo(".offers-table", 500);
	});
});
