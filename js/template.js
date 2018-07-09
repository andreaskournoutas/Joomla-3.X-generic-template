jQuery.noConflict();
jQuery(function() {
	//jQuery.material.init()
	//jQuery(".parallax").parallax();
	//jQuery("").slicknav();
	//jQuery("").superfish();
	//jQuery("").responsiveSlides();
	//smoothScroll.init({selector: 'a[href^="#"]'});
	//jQuery("").slideshowify({parentEl:""});
	//jQuery("span.slicknav_icon").html('<i class="fa fa-th"></i>').css('margin-top', '0'); // Mobile menu grid icon (instead of bars)
});
var view = "";
jQuery(function() { // View declaration
	if (jQuery("div#visible-lg").css('display') == 'block') {
		view = "lg";
	}
	else if (jQuery("div#visible-md").css('display') == 'block') {
		view = "md";
	}
	else if (jQuery("div#visible-sm").css('display') == 'block') {
		view = "sm";
	}
	else if (jQuery("div#visible-xs").css('display') == 'block') {
		view = "xs";
	}
	jQuery(window).resize(function() {
		if (jQuery("div#visible-lg").css('display') == 'block') {
			view = "lg";
		}
		else if (jQuery("div#visible-md").css('display') == 'block') {
			view = "md";
		}
		else if (jQuery("div#visible-sm").css('display') == 'block') {
			view = "sm";
		}
		else if (jQuery("div#visible-xs").css('display') == 'block') {
			view = "xs";
		}
	});
	//alert(view);
});
jQuery("button#mobile-menu-button").click(function() {
  	jQuery("div#dark-layer").toggleClass('inactive active');
  	jQuery("div#off-canvas").toggleClass('closed open');
});
jQuery("div#dark-layer, div#mobile-menu-close").click(function() {
  	jQuery("div#off-canvas").toggleClass('closed open');
  	jQuery("div#dark-layer").toggleClass('active inactive');
});
jQuery(function() {
	jQuery("article.contained").addClass(' container');
	jQuery("section.contained").addClass(' container');	
});	
/*jQuery(function() {  /  jQuery(window).on("load", function (e) { // Same height calculation
	var items = jQuery("item").length;
	var counter = 0;
	var maxheight = 0;
	var highest = 0;
	for (counter = 1; counter <= items; counter++) {
		if (jQuery("item:nth-of-type("+ counter +") inner-item").height() > maxheight) {
			maxheight = jQuery("item:nth-of-type("+ counter +") inner-item").height();
			highest = counter;
		}
	}
	jQuery("item inner-item").height(maxheight);
	jQuery(window).resize(function() {
		jQuery("item:nth-of-type("+ highest +") inner-item").height('auto');
		maxheight = jQuery("item:nth-of-type("+ highest +") inner-item").height();
		jQuery("item inner-item").height(maxheight);
	});
});*/
// ***Rest of code***