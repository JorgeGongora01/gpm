jQuery(document).ready(function($) {
	if (jQuery(window).width() > 767) {
		jQuery('.nav li.dropdown').hover(function() {
			jQuery(this).addClass('open');
		}, function() {
			jQuery(this).removeClass('open');
		});
		jQuery('.nav li.dropdown-menu').hover(function() {
			jQuery(this).addClass('open');
		}, function() {
			jQuery(this).removeClass('open');
		});
	}

	jQuery('.nav li.dropdown').find('.caret').each(function() {
		jQuery(this).on('click', function() {
			if (jQuery(window).width() < 768) {
				jQuery(this).parent().next().slideToggle();
			}
			return false;
		});
	});

	var swiper = new Swiper('.home-slider', {
		pagination: '.slider-page',
		nextButton: '.slider-next',
		prevButton: '.slider-prev',
		spaceBetween:30,
		autoplay:2500,
		
	});

	var swiper = new Swiper('.product-slider', {
		nextButton: '.product-next',
		prevButton: '.product-prev',
		slidesPerView: '4',
        spaceBetween:10,
		autoplay:false,
		hashnav:true,
		breakpoints: {
		1040: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 2,
                spaceBetween: 10
            }		
         }		
	});
	/* Recent Product */
	var swiper = new Swiper('.ec-product-slider', {
		nextButton: '.ec-product-next',
		prevButton: '.ec-product-prev',
		slidesPerView: '4',
        spaceBetween:10,
		autoplay:false,
		hashnav:true,
		breakpoints: {
		1040: {
                slidesPerView: 4,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            320: {
                slidesPerView: 2,
                spaceBetween: 10
            }		
         }		
	});


});

(function($) {
	var gallery = $('.port-gallery .ec-right').simpleLightbox();
})(jQuery);