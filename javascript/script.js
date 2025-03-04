(() => {
	jQuery(document).ready(function ($) {
		backToTop();
		opensearch();
		menuMobile();
		gridLayout();
		countUp();
		handleSlider();
		openMobileNav();
		openContent();

		$(window).on('load', function () {
			setEqualCardHeight();
		});
		window.addEventListener('resize', setEqualCardHeight);
		new WOW().init();
	});

	function handleSlider() {
		jQuery('.home-slider2').owlCarousel({
			loop: !0,
			autoplaySpeed: 1e3,
			navSpeed: 3e3,
			paginationSpeed: 3e3,
			slideSpeed: 3e3,
			smartSpeed: 3e3,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			autoplay: 3e3,
			margin: 30,
			dots: true,
			responsive: {
				0: { items: 1 },
				768: { items: 1 },
				991: { items: 1 },
				1e3: { items: 1 },
			},
		});
	}

	jQuery('.owl-carousel').on(
		'initialized.owl.carousel resized.owl.carousel',
		function () {
			setEqualCardHeight();
		}
	);

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

	function openMobileNav() {
		const openNavBtn = document.getElementById('openNavBtn');
		const closeNavBtn = document.getElementById('closeNavBtn');
		const nav = document.getElementById('navbarNavDropdown');
		const overlay = document.getElementById('overlay');

		openNavBtn.addEventListener('click', () => {
			nav.classList.remove('max-lg:-translate-x-[110%]');
			nav.classList.add('max-lg:translate-x-0');

			overlay.classList.remove('hidden');
			overlay.classList.add('block');

			openNavBtn.classList.remove('max-lg:block');
			openNavBtn.classList.add('max-lg:hidden');

			closeNavBtn.classList.remove('max-lg:hidden');
			closeNavBtn.classList.add('max-lg:block');
		});

		closeNavBtn.addEventListener('click', () => {
			nav.classList.remove('max-lg:translate-x-0');
			nav.classList.add('max-lg:-translate-x-[110%]');

			overlay.classList.remove('block');
			overlay.classList.add('hidden');

			closeNavBtn.classList.remove('max-lg:block');
			closeNavBtn.classList.add('max-lg:hidden');

			openNavBtn.classList.remove('max-lg:hidden');
			openNavBtn.classList.add('max-lg:block');
		});
	}

	function openContent() {
		$('.acod-head').on('click', function () {
			let t = $('#' + $(this).attr('data-dz-item')),
				e = $(this).closest('.accordion-wrapper');

			$(this).toggleClass('active').hasClass('active')
				? t.slideDown()
				: t.slideUp();

			e.find('.acod-head').not(this).removeClass('active');
			e.find('.acod-body').not(t).slideUp();
		});

		$('.acod-head.default-open').addClass('active').next().show();
	}

	function setEqualCardHeight() {
		const cards = document.querySelectorAll('.item');
		if (!cards.length) return;

		cards.forEach((card) => (card.style.height = 'auto'));

		setTimeout(() => {
			let maxHeight = 0;

			// Tìm thẻ cao nhất
			cards.forEach((card) => {
				// Buộc tính toán lại bố cục để có được chiều cao chính xác
				const height = card.offsetHeight;
				maxHeight = Math.max(maxHeight, height);
			});

			// Set chiều cao theo card cao nhất
			if (maxHeight > 0) {
				cards.forEach((card) => (card.style.height = `${maxHeight}px`));
			}
		}, 150);
	}
})();
