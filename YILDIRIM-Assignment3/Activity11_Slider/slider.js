$(document).ready(function() {
        	$("#slider").bxSlider({
			  auto: true,
              randomStart:true,
			  minSlides: 1,
			  maxSlides: 1,
              moveSlides:1,
              autoDelay:3,
              captions:true,
			  slideWidth: 250,
			  slideMargin: 10,
              pager: true,
              pagerType:'short',
              pagerShortSeparator:'/'
			});
    	});