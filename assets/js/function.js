$(document).ready(function(){
	$("body").addClass("perloader_active");
});

$(window).load(function(){

		$("#perloader").fadeOut();
		$(".hoja").delay(350).fadeOut();
		$("body").removeClass("perloader_active");

});


$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	$('.logo').css({
	    'transform' : 'translate(0px,'+ wScroll /2 +'%)'
	});

	$('.back-bird').css({
			'transform' : 'translate(0px,'+ wScroll /4 +'%)'
	});

	$('.fore-bird').css({
	    'transform' : 'translate(0px,-'+ wScroll /39 +'%)'
	});

});


$(document).ready(function() {

	jQuery('#posteffecta1').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 200
	});

	jQuery('#posteffecta2').addClass("hidden1").viewportChecker({
			classToAdd: 'visible1 animated fadeIn',
			offset: 220
	});

	jQuery('#posteffecta3').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 240
	});

	jQuery('#posteffectb1').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 260
	});

	jQuery('#posteffectb2').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 280
	});

	jQuery('#posteffectb3').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 300
	});

	jQuery('#posteffectc1').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 320
	});

	jQuery('#posteffectc2').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 340
	});

	jQuery('#posteffectc3').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 360
	});

});


jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {	$(".toggle").click();
            jQuery('.back-to-top').fadeOut(duration);
        }
    });

    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
});


$(document).ready(function() {

	jQuery('.window').addClass("hidden1").viewportChecker({
		classToAdd: 'visible1 animated fadeIn',
	  offset: 450
	});
});



$(document).ready(function(){
$(".slidemenu").on({
    mouseenter: function(){
      $('#slidebar').addClass('visible');
    },
    mouseleave: function(){
      	$('#slidebar').toggle("visible");
    },
});
});

$(document).ready(function(){
	$('.slidemenu').on('mouseenter',function(){
		$('.bar1').addClass('animated bounceInLeft');
	});
});

$(document).ready(function() {

	jQuery('#hidenav').addClass("show").viewportChecker({
		classToAdd: 'hidden animated fadeIn',
	  offset: 600
	});
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})

$("#hide").click(function(){
    $(".mod_box").fadeOut();
});

$("#show").click(function(){
    $(".mod_box").fadeIn();
});
