(() => {
	// javascript/script.js

	var swiper = new Swiper('.home-slider2', {
		loop: true,
		effect: 'fade',
		slidesPerView: 'auto',
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: false,
		},
	});

	function menuMobile() {
		$('.navbar-nav li.menu-item-has-children>ul').before(
			`<span class="li-plus"></span>`
		);

		if ($('.li-plus').length) {
			$('.li-plus').click(function (e) {
				$(this).toggleClass('clicked');
				$(this).next('.sub-menu').slideToggle(200);
				$(this)
					.parent()
					.siblings()
					.find('.li-plus')
					.removeClass('clicked')
					.siblings('.sub-menu')
					.slideUp();
			});
		}
	}
	menuMobile();
	$(document).ready(function () {
    setTimeout(function () {
        $('.project_list .filters li:first-child').trigger('click');
    }, 200);
});
})();
