(() => {
	jQuery(document).ready(function ($) {
		backToTop();
		opensearch();
		menuMobile();
		gridLayout();
		countUp();
		handleSlider();
		new WOW().init();
	});

	function handleSlider() {
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
		
	}

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
	function gridLayout() {
		// Khởi tạo Isotope
		var $grid = $('.filter_wrap').isotope({
			itemSelector: '.filter_wrap-item ',
			layoutMode: 'fitRows',
		});

		// Khi nhấn vào các nút lọc
		$('.filter_container-nav li').on('click', function (e) {
			e.preventDefault();

			var filterValue = $(this).attr('data-filter');

			// Áp dụng bộ lọc
			$grid.isotope({ filter: filterValue });

			// Đổi class "active" cho nút được chọn
			$('.filter_container-nav li').removeClass('active');
			$(this).addClass('active');
		});

		setTimeout(function () {
			$('.project_list .filter_container-nav li:first-child').trigger(
				'click'
			);
		}, 200);
	}
	function countUp() {
		$('.counter-block').each(function () {
			var $this = $(this),
				countTo = $this.attr('data-count');

			$({ countNum: $this.text() }).animate(
				{
					countNum: countTo,
				},

				{
					duration: 5000,
					easing: 'linear',
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					},
				}
			);
		});
	}
	function opensearch() {
		var t = jQuery('#quik-search-btn'),
			e = jQuery('#quik-search-remove');
		t.on('click', function () {
			jQuery('.dlab-quik-search').fadeIn(500),
				jQuery('.dlab-quik-search').addClass('On');
		}),
			e.on('click', function () {
				jQuery('.dlab-quik-search').fadeOut(500),
					jQuery('.dlab-quik-search').removeClass('On');
			});
	}
	function backToTop() {
		var $backToTop = $('.back-to-top');
		$backToTop.hide();

		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 200) {
				$backToTop.fadeIn();
			} else {
				$backToTop.fadeOut();
			}
		});

		$backToTop.on('click', function (e) {
			$('html, body').animate({ scrollTop: 0 }, 50);
		});
	}
})();
