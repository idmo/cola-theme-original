require.config({
	"baseUrl": "wp-content/themes/cola/js",
	"paths": {
		"jquery": "vendor/jquery/jquery"
	}
});

require(['jquery'], function($) {
	console.log('Working!!');
});

	var mySwiper = new Swiper('.swiper-container', {
	loop: true,
	autoplay: '4000',
	pagination: '.swiper-pagination',
	nextButton: '.swiper-button-next',
	prevButton: '.swiper-button-prev',
	direction: 'horizontal',
	effect: 'fade'
	});
