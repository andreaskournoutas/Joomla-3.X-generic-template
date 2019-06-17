var deviceTier, deviceOrientation;

function tierAndOrientation() {
  	if ($(".visible-xl").css('display') == 'block') {
		deviceTier = "xl";
	}
	else if ($(".visible-lg").css('display') == 'block') {
		deviceTier = "lg";
	}
	else if ($(".visible-md").css('display') == 'block') {
		deviceTier = "md";
	}
	else if ($(".visible-sm").css('display') == 'block') {
		deviceTier = "sm";
	}
	else if ($(".visible-xs").css('display') == 'block') {
		deviceTier = "xs";
	}
	if (window.innerHeight >= window.innerWidth) {
		deviceOrientation = "portrait";
	}
	else {
		deviceOrientation = "landscape";
	}
	$("body").removeClass('xl lg md sm xs portrait landscape').addClass(deviceTier).addClass(deviceOrientation);
}

$(function() {
	tierAndOrientation();
});

$(window).on("load", function (e) {
	
});

$(window).resize(function() {
	tierAndOrientation();
});

$(window).scroll(function() {

});