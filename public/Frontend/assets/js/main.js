(function($){
    "use strict";
    jQuery(document).on('ready',function() {
		// Menu JS
		$('.demo-btn, ul .navlink').on('click', function(e){
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - -5
			}, 1500);
			e.preventDefault();
		});
		
		// Go to Top
        $(function(){
            //Scroll event
            $(window).on('scroll', function(){
                var scrolled = $(window).scrollTop();
                if (scrolled > 300) $('.go-top').fadeIn('slow');
                if (scrolled < 300) $('.go-top').fadeOut('slow');
            });  
            //Click event
            $('.go-top').on('click', function() {
                $("html, body").animate({ scrollTop: "0" },  500);
            });
        });
    });
	
	// Preloader Area
    jQuery(window).on('load', function() {
	    $('.preloader-area').fadeOut();
	});
}(jQuery));
