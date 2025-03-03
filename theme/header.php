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
<html <?php language_attributes(); ?> class="scroll-smooth scroll-pt-10">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('font-body'); ?>>

	<?php wp_body_open(); ?>
	<header class="relative z-99999 block header ">
		<div class="bg-white border-b border-black/5 max-md:py-1.25 top-bar">
			<div class="container">
				<div class="row flex flex-wrap md:justify-between justify-center items-center">
					<?php if (have_rows('header_top_menu', 'option')): ?>
						<div class="px-3.75 max-md:py-[3px]">
							<ul>
								<?php while (have_rows('header_top_menu', 'option')):
									the_row(); ?>
									<li
										class="inline-block relative pr-3.75 after:content-[''] after:h-3.75 after:w-px after:bg-black after:absolute after:right-1.25 after:opacity-20 after:top-1">
										<a
											href="<?php echo check_link(get_sub_field('link')) ?>"><?php the_sub_field('title') ?></a>
									</li>
								<?php endwhile; ?>
							</ul>
						</div>
					<?php endif; ?>

					<?php
					$button = get_field('header_top_button', 'option');
					if ($button['title']): ?>

						<div class="px-3.75 max-md:py-[3px] max-sm:hidden">
							<a href="<?php echo $button['link']; ?>"
								class="btn bg-primary rounded-none relative overflow-hidden z-1 after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:bg-primaryhover after:duration-300 after:-translate-x-full hover:after:translate-x-0 after:delay-200 before:content-[''] before:absolute before:top-0 before:left-0 before:size-full before:-z-1 before:bg-black/50 before:duration-300 before:-translate-x-full hover:before:translate-x-0 uppercase">
								<?php echo $button['title']; ?>
							</a>
						</div>
					<?php endif; ?>

				</div>
			</div>
		</div>

		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="relative w-full bg-white main-bar">
				<div class="container relative">

					<div
						class="table float-left align-middle xl:w-45 xl:h-17.5/ w-36 md:h-16 h-13.5 logo-header logo-dark">

						<?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$image = wp_get_attachment_image_src($custom_logo_id, 'full');

						if ($image) {
							$site_url = get_bloginfo('url');
							$site_description = get_bloginfo('description');
							$logo_url = $image[0];
							?>
							<a href="<?php echo esc_url($site_url); ?>" title="<?php echo esc_attr($site_description); ?>"
								class="table-cell align-middle">
								<img src="<?php echo esc_url($logo_url); ?>" alt="Logo" class="max-w-45 max-xl:w-36">
							</a>
							<?php
						}
						?>
					</div>

					<button id="openNavBtn"
						class="navbar-toggler lg:hidden w-5 h-4.5 relative rotate-0 duration-500 ease-in-out cursor-pointer md:mt-6.25 mt-4.5 md:mb-4.5 mb-3.5 md:ml-3.75 ml-2.5 float-right"
						type="button">
						<span
							class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-0"></span>
						<span
							class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-[7px]"></span>
						<span
							class="block absolute h-0.5 w-full rounded-[1px] opacity-100 left-0 rotate-0 bg-[#666] duration-200 ease-in-out top-3.5"></span>
					</button>
					<button id="closeNavBtn"
						class="navbar-toggler lg:hidden w-5 h-4.5 relative rotate-0 duration-500 ease-in-out cursor-pointer md:mt-6.25 mt-4.5 md:mb-4.5 mb-3.5 md:ml-3.75 ml-2.5 float-right z-999 text-white"
						type="button">
						✖
					</button>

					<div
						class="float-right md:pt-5 md:pb-4 py-2.5 relative z-9 border-l border-white/10 max-md:mr-3.75 max-sm:!mr-px">
						<div class="ml-2.5 inline-block">
							<button id="quik-search-btn" type="button"
								class="inline-block py-[3px] px-1.25 xl:text-[25px] xl:leading-[25px] text-xxl leading-[22px]"><?php echo svg('search', '20', '20', '') ?></button>
						</div>
					</div>

					<div class="dlab-quik-search bg-black/90 fixed left-0 top-0 size-full z-999 overflow-hidden hidden">
						<form action="<?php echo get_home_url()?>"
							class="w-full max-w-25 m-auto relative top-1/2 duration-500 -translate-y-1/2 opacity-0">
							<input name="s" type="text"
								class="p-3.75 pr-14.5 w-full h-[90px] bg-transparent text-white text-xl border-b-2 border-white/20 outline-none"
								placeholder="Nhập để tìm kiếm">
							<span id="quik-search-remove"
								class="absolute right-3.75 top-1/2 -my-3.75 h-6.25 text-xl cursor-pointer text-white/20">
								<?php echo svg('close', '16', '16') ?></span>
						</form>
					</div>

					<div id="overlay" class="md:hidden fixed top-0 left-0 w-full h-screen bg-black/70 z-0 hidden">
					</div>
					<div class="header-nav lg:flex justify-end max-lg:fixed max-lg:h-screen max-lg:top-0 max-lg:left-0 max-lg:-translate-x-[110%] max-lg:z-999 max-lg:bg-white max-lg:w-72 max-lg:overflow-y-scroll max-lg:transition-all max-lg:duration-700"
						id="navbarNavDropdown">
						<div
							class="float-none align-middle w-full h-auto relative z-9 lg:hidden max-lg:py-7.5 max-lg:px-3.75">


							<?php
							$custom_logo_id = get_theme_mod('custom_logo');
							$image = wp_get_attachment_image_src($custom_logo_id, 'full');

							if ($image) {
								$site_url = get_bloginfo('url');
								$site_description = get_bloginfo('description');
								$logo_url = $image[0];
								?>
								<a href="<?php echo esc_url($site_url); ?>"
									title="<?php echo esc_attr($site_description); ?>"
									class="table-cell align-middle max-md:w-full max-md:text-center max-md:block">
									<img src="<?php echo esc_url($logo_url); ?>" alt="Logo" class="max-w-45 max-xl:w-36">
								</a>
								<?php
							}
							?>
						</div>



						<ul
							class="lg:flex flex-wrap lg:flex-row lg:float-right max-lg:bg-white max-lg:w-full navbar-nav">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'container' => false,
								'fallback_cb' => false,
								'items_wrap' => '%3$s',
								'depth' => 3,
								'walker' => new Custom_Menu_Walker()
							));
							?>


						</ul>

					</div>
				</div>
			</div>
		</div>

	</header>