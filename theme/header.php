<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */
?>


<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>




	<header class="relative z-99999 block header">
		<div class="bg-white border-b border-black/5 max-md:py-1.25 top-bar">
			<div class="container">
				<div class="row flex flex-wrap md:justify-between justify-center items-center">
					<div class="px-3.75 max-md:py-[3px]">
						<ul>
							<li
								class="inline-block relative pr-3.75 after:content-[''] after:h-3.75 after:w-px after:bg-black after:absolute after:right-1.25 after:opacity-20 after:top-1">
								<a href="/about">Về chúng tôi</a>
							</li>
							<li
								class="inline-block relative pr-3.75 after:content-[''] after:h-3.75 after:w-px after:bg-black after:absolute after:right-1.25 after:opacity-20 after:top-1">
								<a href="privacy-policy.html">Chính sách hoàn tiền</a>
							</li>
							<li class="inline-block relative pr-3.75"><a href="help-desk.html">Trợ giúp</a></li>
						</ul>
					</div>
					<div class="px-3.75 max-md:py-[3px] max-sm:hidden">
						<a href="contact-1.html"
							class="btn bg-primary rounded-none relative overflow-hidden z-1 after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:bg-primaryhover after:duration-300 after:-translate-x-full hover:after:translate-x-0 after:delay-200 before:content-[''] before:absolute before:top-0 before:left-0 before:size-full before:-z-1 before:bg-black/50 before:duration-300 before:-translate-x-full hover:before:translate-x-0">NHẬN
							BÁO GIÁ</a>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="relative w-full bg-white main-bar">
				<div class="container relative">
					<!-- website logo -->
					<div
						class="table float-left align-middle xl:w-45 xl:h-17.5/ w-36 md:h-16 h-13.5 relative z-9 logo-header logo-dark">
						<a href="index.html" class="table-cell align-middle">
							<img src="https://industry.dexignzone.com/tailwind/demo/assets/images/logo.png" alt=""
								class="max-w-45 max-xl:w-36">
						</a>
					</div>
					<!-- nav toggle button -->
					<button
						class="navbar-toggler lg:hidden w-5 h-4.5 relative rotate-0 duration-500 ease-in-out cursor-pointer md:mt-6.25 mt-4.5 md:mb-4.5 mb-3.5 md:ml-3.75 ml-2.5 float-right"
						type="button">
						<span
							class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-0"></span>
						<span
							class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-[7px]"></span>
						<span
							class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-3.5"></span>
					</button>
					<!-- extra nav -->
					<div
						class="float-right md:pt-5 md:pb-4 py-2.5 relative z-9 border-l border-white/10 max-md:mr-3.75 max-sm:!mr-px">
						<div class="ml-2.5 inline-block">
							<button id="quik-search-btn" type="button"
								class="inline-block py-[3px] px-1.25 xl:text-[25px] xl:leading-[25px] text-xxl leading-[22px]"><?php echo svg('search', '20', '20', '') ?></button>
						</div>
					</div>
					<!-- Quik search -->
					<div class="dlab-quik-search bg-black/90 fixed left-0 top-0 size-full z-999 overflow-hidden hidden">
						<form action="#"
							class="w-full max-w-25 m-auto relative top-1/2 duration-500 -translate-y-1/2 opacity-0">
							<input name="search" value="" type="text"
								class="p-3.75 pr-14.5 w-full h-[90px] bg-transparent text-white text-xl border-b-2 border-white/20 outline-none"
								placeholder="Type to search">
							<span id="quik-search-remove"
								class="absolute right-3.75 top-1/2 -my-3.75 h-6.25 text-xl cursor-pointer text-white/20"><i
									class="ti-close"></i></span>
						</form>
					</div>
					<!-- main nav -->
					<div class="header-nav lg:flex justify-end max-lg:fixed max-lg:h-screen max-lg:top-0 max-lg:left-[-300px] max-lg:z-99 max-lg:bg-white max-lg:w-72 max-lg:overflow-y-scroll max-lg:duration-700"
						id="navbarNavDropdown">
						<div
							class="float-none align-middle w-full h-auto relative z-9 lg:hidden max-lg:py-7.5 max-lg:px-3.75">
							<a href="index.html"
								class="table-cell align-middle max-md:w-full max-md:text-center max-md:block">
								<img src="images/logo.png" alt="" class="max-w-45 max-xl:w-36">
							</a>
						</div>
						<ul
							class="lg:flex flex-wrap lg:flex-row lg:float-right max-lg:bg-white max-lg:w-full navbar-nav">
							<li class="max-lg:px-6.25 max-lg:font-roboto group homedemo">
								<a href="javascript:void(0);"
									class="lg:py-5.5 py-2 xl:px-4.5 lg:px-3.75 xl:font-semibold font-medium lg:inline-block flex relative lg:border-l max-lg:border-b border-black/10 xl:text-base lg:text-sm text-lg max-lg:leading-[30px] duration-500 text-primary after:content-[''] after:h-1.25 after:bg-primary after:absolute after:bottom-0 after:duration-700 after:w-full after:right-0 after:left-auto after:origin-right max-lg:after:hidden">Trang
									chủ
								</a>
								<ul
									class="bg-white lg:flex hidden left-0 lg:opacity-0 lg:absolute right-0 lg:invisible w-full lg:mt-5 z-9 lg:shadow-menu duration-700 group-hover:opacity-100 group-hover:visible group-hover:mt-0 max-lg:py-2.5 max-lg:border-b border-black/10 flex-wrap overflow-y-auto mega-menu">
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-[0_0_20%] lg:max-w-[25%] max-w-full group/second">
										<a href="index.html"
											class="lg:px-5 pl-3.75 max-lg:py-1.25 max-lg:relative block max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0">
											<img src="<?php echo get_stylesheet_directory_uri() ?>https://industry.dexignzone.com/tailwind/demo/assets/demo/pic1.jpg"
												alt=""
												class="w-full duration-500 mb-3.75 shadow-menu-img group-hover/second:-translate-y-2.5 max-lg:hidden">
											<span class="capitalize block">Trang chủ - Mặc định</span>
										</a>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-[0_0_20%] lg:max-w-[25%] max-w-full group/second">
										<a href="index-2.html"
											class="lg:px-5 pl-3.75 max-lg:py-1.25 max-lg:relative block max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0">
											<img src="<?php echo get_stylesheet_directory_uri() ?>https://industry.dexignzone.com/tailwind/demo/assets/demo/pic2.jpg"
												alt=""
												class="w-full duration-500 mb-3.75 shadow-menu-img group-hover/second:-translate-y-2.5 max-lg:hidden">
											<span class="capitalize block">Home - Oil/Gas Plant</span>
										</a>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-[0_0_20%] lg:max-w-[25%] max-w-full group/second">
										<a href="index-3.html"
											class="lg:px-5 pl-3.75 max-lg:py-1.25 max-lg:relative block max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0">
											<img src="<?php echo get_stylesheet_directory_uri() ?>https://industry.dexignzone.com/tailwind/demo/assets/demo/pic3.jpg"
												alt=""
												class="w-full duration-500 mb-3.75 shadow-menu-img group-hover/second:-translate-y-2.5 max-lg:hidden">
											<span class="capitalize block">Home - Steel Plant</span>
										</a>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-[0_0_20%] lg:max-w-[25%] max-w-full group/second">
										<a href="index-4.html"
											class="lg:px-5 pl-3.75 max-lg:py-1.25 max-lg:relative block max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0">
											<img src="<?php echo get_stylesheet_directory_uri() ?>https://industry.dexignzone.com/tailwind/demo/assets/demo/pic4.jpg"
												alt=""
												class="w-full duration-500 mb-3.75 shadow-menu-img group-hover/second:-translate-y-2.5 max-lg:hidden">
											<span class="capitalize block">Home - Factory</span>
										</a>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-[0_0_20%] lg:max-w-[25%] max-w-full group/second">
										<a href="index-5.html"
											class="lg:px-5 pl-3.75 max-lg:py-1.25 max-lg:relative block max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0">
											<img src="<?php echo get_stylesheet_directory_uri() ?>https://industry.dexignzone.com/tailwind/demo/assets/demo/pic5.jpg"
												alt=""
												class="w-full duration-500 mb-3.75 shadow-menu-img group-hover/second:-translate-y-2.5 max-lg:hidden">
											<span class="capitalize block">Home - Construct</span>
										</a>
									</li>
								</ul>
							</li>
							<li class="max-lg:px-6.25 max-lg:font-roboto group">
								<a href="javascript:void(0);"
									class="lg:py-5.5 py-2 xl:px-4.5 lg:px-3.75 xl:font-semibold font-medium lg:inline-block block relative lg:border-l max-lg:border-b border-black/10 xl:text-base lg:text-sm text-lg max-lg:leading-[30px] duration-500 hover:text-primary after:content-[''] after:h-1.25 after:bg-primary after:w-0 after:absolute after:bottom-0 after:-right-px after:origin-left after:duration-700 group-hover:after:w-full group-hover:after:left-0 group-hover:after:right-auto group-hover:after:origin-right max-lg:after:hidden">Trang
								</a>
								<ul
									class="bg-white lg:flex hidden left-0 lg:opacity-0 lg:absolute right-0 lg:invisible w-full lg:mt-5 z-9 lg:shadow-menu duration-700 group-hover:opacity-100 group-hover:visible group-hover:mt-0 max-lg:py-2.5 max-lg:border-b border-black/10 mega-menu">
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Pages</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="about-1.html">About us 1</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="about-2.html">About us 2</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="/services">Services 1</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-detail">Services 2</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-agricultural-processing.html">agricultural
													process</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Pages</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-power-energy.html">Power and energy</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-oil-lubricant.html">oil and lubricant</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-materials-engineering.html">materials engineering</a>
											</li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-chemical-research.html">chemical & research</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="services-alternate-energy.html">alternate energy</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Pages</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="team-1.html">Team 1</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="team-2.html">Team 2</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="faq-1.html">Faqs 1</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="faq-2.html">Faqs 2</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="portfolio-grid-2.html">portfolio Grid 2</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Pages</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="portfolio-grid-3.html">Portfolio Grid 3</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="portfolio-grid-4.html">Portfolio Grid 4</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="portfolio-details.html">Portfolio Details</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="error-403.html">Error 403</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="error-404.html">Error 404</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Pages</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="error-405.html">Error 405</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="coming-soon-1.html">Coming Soon 1</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="coming-soon-2.html">Coming Soon 2</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="help-desk.html">Help Desk</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="privacy-policy.html">Privacy Policy</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="relative max-lg:px-6.25 max-lg:font-roboto group">
								<a href="javascript:void(0);"
									class="lg:py-5.5 py-2 xl:px-4.5 lg:px-3.75 xl:font-semibold font-medium lg:inline-block block relative lg:border-l max-lg:border-b border-black/10 xl:text-base lg:text-sm text-lg max-lg:leading-[30px] duration-500 hover:text-primary after:content-[''] after:h-1.25 after:bg-primary after:w-0 after:absolute after:bottom-0 after:-right-px after:origin-left after:duration-700 group-hover:after:w-full group-hover:after:left-0 group-hover:after:right-auto group-hover:after:origin-right max-lg:after:hidden">Cửa
									hàng
								</a>
								<ul
									class="bg-white max-lg:hidden left-0 lg:opacity-0 lg:absolute lg:invisible w-[200px] z-9 lg:shadow-menu duration-700 group-hover:opacity-100 group-hover:visible group-hover:mt-0 lg:py-1.25 py-2.5 max-lg:border-b border-black/10 sub-menu">
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop.html">Shop</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-sidebar.html">Shop Sidebar</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-product-details.html">Product Details</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-cart.html">Cart</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-wishlist.html">Wishlist</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-checkout.html">Checkout</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-login.html">Login</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="shop-register.html">Register</a></li>
								</ul>
							</li>
							<li class="max-lg:px-6.25 max-lg:font-roboto group">
								<a href="javascript:void(0);"
									class="lg:py-5.5 py-2 xl:px-4.5 lg:px-3.75 xl:font-semibold font-medium lg:inline-block block relative lg:border-l max-lg:border-b border-black/10 xl:text-base lg:text-sm text-lg max-lg:leading-[30px] duration-500 hover:text-primary after:content-[''] after:h-1.25 after:bg-primary after:w-0 after:absolute after:bottom-0 after:-right-px after:origin-left after:duration-700 group-hover:after:w-full group-hover:after:left-0 group-hover:after:right-auto group-hover:after:origin-right max-lg:after:hidden">Blog
								</a>
								<ul
									class="bg-white lg:flex hidden left-0 lg:opacity-0 lg:absolute right-0 lg:invisible w-full lg:mt-5 z-9 lg:shadow-menu duration-700 group-hover:opacity-100 group-hover:visible group-hover:mt-0 max-lg:py-2.5 max-lg:border-b border-black/10 mega-menu">
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Blog</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="/blog">Half image</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="/blog">Half image sidebar</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="/blog">Half image sidebar left</a>
											</li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="/blog">Large image</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Blog</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-large-img-sidebar.html">Large image sidebar</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-large-img-left-sidebar.html">Large image sidebar left</a>
											</li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-2.html">Grid 2</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Blog</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-3.html">Grid 3</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
										</ul>
									</li>
									<li
										class="block lg:pt-7.5 lg:pb-6.25 relative align-top flex-1 after:content-[''] after:bg-black/10 after:absolute after:right-0 after:top-0 after:block after:w-px after:h-full max-lg:after:hidden">
										<a href="javascript:void(0);"
											class="lg:px-5 pb-3.75 pl-3.75 border-b border-black/10 block font-semibold max-lg:hidden">Blog</a>
										<ul class="lg:mt-2.5 w-full">
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-grid-4.html">Grid 4</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-single.html">Single</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-single-sidebar.html">Single sidebar</a></li>
											<li><a class="py-2.5 max-lg:py-1.5 lg:px-4.5 pl-3.75 block capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
													href="blog-single-left-sidebar.html">Single sidebar left</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="relative max-lg:px-6.25 max-lg:font-roboto group">
								<a href="javascript:void(0);"
									class="lg:py-5.5 py-2 xl:px-4.5 lg:px-3.75 xl:font-semibold font-medium lg:inline-block block relative lg:border-x max-lg:border-b border-black/10 xl:text-base lg:text-sm text-lg max-lg:leading-[30px] duration-500 hover:text-primary after:content-[''] after:h-1.25 after:bg-primary after:w-0 after:absolute after:bottom-0 after:-right-px after:origin-left after:duration-700 group-hover:after:w-full group-hover:after:left-0 group-hover:after:right-auto group-hover:after:origin-right max-lg:after:hidden">Liên
									hệ chúng tôi
								</a>
								<ul
									class="bg-white max-lg:hidden left-0 lg:opacity-0 lg:absolute lg:invisible w-[200px] z-9 lg:shadow-menu duration-700 group-hover:opacity-100 group-hover:visible group-hover:mt-0 lg:py-1.25 py-2.5 max-lg:border-b border-black/10 sub-menu right">
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="contact-1.html">Contact us 1</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="contact-2.html">Contact us 2</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="contact-3.html">Contact us 3</a></li>
									<li class="group"><a
											class="block text-2sm py-2.5 max-lg:py-1.5 lg:px-6.25 pl-3.75 capitalize duration-500 hover:text-primary hover:bg-gray-100 max-lg:after:content-['\f105'] max-lg:after:font-['Font_Awesome_5_Free'] max-lg:after:font-semibold max-lg:after:top-1 max-lg:after:absolute max-lg:after:left-0 max-lg:relative"
											href="contact-4.html">Contact us 4</a></li>
								</ul>
							</li>

						</ul>
						<div class="lg:hidden mt-7.5 mb-3.75">
							<ul class="text-center">
								<li class="inline-block ">
									<a class="size-7 leading-7 rounded-full text-center text-xs border border-[#3B5998] text-[#3B5998] facebook fab fa-facebook-f"
										href="javascript:void(0);"></a>
								</li>
								<li class="inline-block ">
									<a class="size-7 leading-7 rounded-full text-center text-xs border border-[#000] text-[#000] twitter fa-brands fa-x-twitter"
										href="javascript:void(0);"></a>
								</li>
								<li class="inline-block ">
									<a class="size-7 leading-7 rounded-full text-center text-xs border border-[#007BB6] text-[#007BB6] linkedin fab fa-linkedin-in"
										href="javascript:void(0);"></a>
								</li>
								<li class="inline-block ">
									<a class="size-7 leading-7 rounded-full text-center text-xs border border-[#8A5A4E] text-[#8A5A4E] instagram fab fa-instagram"
										href="javascript:void(0);"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main header END -->
	</header>