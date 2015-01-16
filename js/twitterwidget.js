(function ($) {
    Drupal.behaviors.twitterwidget = {
    		attach: function(context, settings) {
    			$('.twitter-line', context).bxSlider({
    				speed: 1500,
    				mode: 'fade',
    				minSlides: 1,
    				maxSlides: 1,
    				slideWidth: 650,
                    slideHeight: 100, 
    				slideMargin: 10,
    				auto: true,
    				infiniteLoop: true,
    				controls: false,
    				pause: 7000    				
    			});
    			$('.twitter-hour', context).bxSlider({
    				speed: 1500,
    				mode: 'fade',
    				minSlides: 1,
    				maxSlides: 1,
    				slideWidth: 400,
                    slideHeight: 100, 
    				slideMargin: 10,
    				auto: true,
    				infiniteLoop: true,
    				controls: false,
    				pause: 7000  
    			});
    		}
    };
})(jQuery);