<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gnws
 */

?>
<footer class="text-[#b0b0b0]">
	<div
		class="overflow-hidden relative z-1 after:content-[''] after:bg-[#191f23] after:absolute after:-z-1 after:w-full after:h-17.5 after:left-0 after:bottom-0">
		<div class="container">
			<?php if ( have_rows( 'footer_contact', 'option' ) ) : ?>
				<div class="bg-primary rounded-2lg flex maxmd:flex-wrap maxmd:pb-5  wow fadeIn"
					data-wow-duration="2s" data-wow-delay="0.6s">
					<?php while ( have_rows( 'footer_contact', 'option' ) ) :
						the_row();
						$type = get_sub_field( 'type_contact' );
						$icon = '';
						if ( $type == 'phone' )
						{
							$icon = 'icon2.png';
						} else if ( $type == 'email' )
						{
							$icon = 'icon3.png';
						} else if ( $type == 'address' )
						{
							$icon = 'icon1.png';
						}
						?>
						<div
							class="md:flex-[0_0_33.33%] md:max-w-[33.33%] relative lg:py-6.25 lg:pr-5 lg:!pl-28 md:p-5 !pl-[75px] z-1 pt-6.25 pr-5 pb-1.25 group after:content-[''] after:h-full after:w-13.5 after:absolute after:-right-3.75 after:top-0 after:-z-1 after:bg-[url(../images/icon/right.png)] after:bg-contain after:bg-right after:bg-no-repeat after:opacity-50 maxmd:after:hidden">


							<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/<?= $icon ?>"
								alt="icon"
								class="2lg:size-14 size-9 absolute lg:left-10 left-6.25 top-9 duration-700 group-hover:scale-125">

							<h4 class="mb-2.5 text-white text-xxl"><?php the_sub_field( 'tilte' ) ?></h4>
							<div class="mb-0 text-white max2lg:text-sm prose-p:text-white">
								<?php the_sub_field( 'content' ) ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

		</div>
	</div>
	<!-- footer top part -->
	<?php
	$bg = get_field( 'ft_bg', 'option' );
	?>

	<div class="bg-[#191F23] bg-contain bg-center pt-17.5 pb-7.5" <?php if ( $bg )
	{ ?>
			style="background-image:url(<?php echo $bg ?>);" <?php } ?>>
		<div class="container">
			<div class="grid grid-cols-12 gap-x-6">
				<div class="md:col-span-4 col-span-12">
					<div class="md:mb-10 mb-6.25">
						<?php if ( get_field( 'ft1_title_about', 'option' ) ) : ?>
							<h4
								class="text-2xl font-medium pb-5 mb-7.5 relative text-white after:content-[''] after:bg-primary after:w-10 after:h-0.5 after:absolute after:bottom-0 after:left-0">
								<?php the_field( 'ft1_title_about', 'option' ); ?>
							</h4>
						<?php endif; ?>
						<?php if ( get_field( 'ft1_content', 'option' ) ) : ?>
							<div class="text-base/7 text-[#b0b0b0] mb-5">
								<?php the_field( 'ft1_content', 'option' ); ?>
							</div>
						<?php endif; ?>

						<?php
						$button = get_field( 'ft1_button', 'option' );
						if ( $button['title'] ) : ?>

							<a href="<?php echo $button['link']; ?>"
								class="text-primary underline tracking-[1px] font-medium"><?php echo $button['title']; ?></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="md:col-span-4 col-span-12">
					<div class="md:mb-10 mb-6.25">
						<?php if ( get_field( 'ft2_title_about', 'option' ) ) : ?>

							<h4
								class="text-2xl font-medium pb-5 mb-7.5 relative text-white after:content-[''] after:bg-primary after:w-10 after:h-0.5 after:absolute after:bottom-0 after:left-0">
								<?php the_field( 'ft2_title_about', 'option' ); ?>
							</h4>
						<?php endif; ?>
						<?php if ( have_rows( 'ft2_list_menu', 'option' ) ) : ?>
							<ul class="mt-1.25 mb-6 table">
								<?php while ( have_rows( 'ft2_list_menu', 'option' ) ) :
									the_row(); ?>
									<li class="w-1/2 float-left pb-3"><a
											class="underline duration-700 hover:text-primary"
											href="<?php the_sub_field( 'link' ) ?>">
											<?php the_sub_field( 'title' ) ?>
										</a></li>
								<?php endwhile; ?>
							</ul>
						<?php endif; ?>

					</div>
				</div>
				<div class="md:col-span-4 col-span-12">
					<div class="md:mb-10 mb-6.25">
						<?php if ( get_field( 'ft3_title_about', 'option' ) ) : ?>
							<h4
								class="text-2xl font-medium pb-5 mb-7.5 relative text-white after:content-[''] after:bg-primary after:w-10 after:h-0.5 after:absolute after:bottom-0 after:left-0">
								<?php the_field( 'ft3_title_about', 'option' ); ?>
							</h4>

						<?php endif; ?>

						<?php if ( get_field( 'f3_desc', 'option' ) ) : ?>

							<div class="text-base/7 text-[#b0b0b0] mb-3">
								<?php the_field( 'f3_desc', 'option' ); ?>
							</div>
						<?php endif; ?>
						<div class="form_subcribe">
							<?php echo do_shortcode( '[contact-form-7 id="eedfd1e" title="Subcribe"]' ) ?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- footer bottom part -->
	<div class="bg-[#191f23] border-t border-[#303639]">
		<div class="container">
			<div class="flex justify-between maxsm:items-center">
				<?php if ( get_field( 'footer_logo', 'option' ) ) : ?>
					
					<a href="<?php echo get_home_url() ?>" class="bg-primary py-2.5 px-5 inline-block">
						<?php echo wp_get_attachment_image( get_field( 'footer_logo', 'option' ), 'full', '', [ 'class' => 'sm:h-13.5 h-7.5 object-contain sm:max-w-[170px] max-w-[100px]' ] ) ?>
					</a>
				<?php endif; ?>
				<?php if ( have_rows( 'footer_social', 'option' ) ) : ?>
					<div>

						<ul class="inline-block text-center">
							<?php while ( have_rows( 'footer_social', 'option' ) ) :
								the_row();
								$icon=get_sub_field('select_mxh');
								?>
								<li class="inline-block">
									<a class="flex justify-center items-center group border-l border-[#303639] sm:w-14.5 sm:h-17.5 size-10 sm:text-xl/[70px] text-base/10 duration-700 hover:text-primary"
										href="javascript:void(0);"><?php echo svg($icon, '', '', 'md:w-5 md:h-5 w-4 h-4 group-hover:text-primary' ) ?></a>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
					<div>


					</div>
				</div>
			</div>
		</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg( 'back-top', '20', '20', 'm-auto h-full' ) ?>
</div>
<?php wp_footer(); ?>

</body>

</html>