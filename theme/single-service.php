<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gnws
 */

get_header();
?>
<main>
	<?php get_template_part( 'components/page-banner' ) ?>
	<!-- inner page banner END -->
	<!-- contact area -->
	<div class="content-block">
		<!-- About Us -->
		<div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5">
			<div class="container">
				<div class="grid grid-cols-12 gap-x-6">
					<div class="xl:col-span-3 lg:col-span-4 md:col-span-5 col-span-12">
						<aside class="side-bar md:sticky top-25">
							<div class="mb-10">
								<ul class="menu">
									<li class="leading-5">
										<a class="block rounded py-3.75 px-6.25 mb-2.5 font-semibold border border-black/10 shadow-[5px_12px_20px_0_rgba(0,0,0,0.05)] duration-500 hover:text-white hover:bg-primary 
			<?php echo is_post_type_archive( 'service' ) ? ' active' : ''; ?>"
											href="<?php echo get_post_type_archive_link( 'service' ); ?>">
											All Services
										</a>
									</li>
									<?php
									$terms = get_terms( array(
										'taxonomy' => 'service_cat',
										'hide_empty' => false,
									) );

									if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
										foreach ( $terms as $term ) :
											$active_class = ( is_singular( 'service' ) && has_term( $term->term_id, 'service_cat' ) ) || ( is_tax( 'service_cat', $term->term_id ) ) ? ' active' : '';
											?>
											<li class="leading-5">
												<a class=" block rounded py-3.75 px-6.25 mb-2.5 font-semibold border border-black/10 shadow-[5px_12px_20px_0_rgba(0,0,0,0.05)] duration-500 hover:text-white hover:bg-primary [&:not(.active,:hover)]:bg-white [&:not(.active,:hover)]:text-black bg-primary text-white <?php echo $active_class; ?>"
													href="<?php echo get_term_link( $term ); ?>">
													<?php echo esc_html( $term->name ); ?>
												</a>
											</li>
											<?php
										endforeach;
									endif;
									?>
								</ul>
							</div>

						</aside>
					</div>
					<div class="xl:col-span-9 lg:col-span-8 md:col-span-7 col-span-12 mb-7.5">

						<div class="grid grid-cols-12 gap-x-6">
							<div class="col-span-12 mb-7.5">
								<img alt="" class="rounded-md"
									src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-work/solarplant/pic7.jpg">
								<div class="mt-7.5">
									<h4>Here are a few common sources of renewable energy</h4>
									<p class="">There are many variations of passages of Lorem Ipsum
										typesetting
										industry. Lorem Ipsum has been the industry's standard dummy
										text ever since the
										1500s, when an unknown printer took a galley of type and
										scrambled it to make a
										type specimen book. </p>
									<p class="">There are many variations of passages of Lorem Ipsum
										typesetting
										industry. Lorem Ipsum has been the industry's standard dummy
										text ever since the
										1500s, when an unknown printer took a galley. </p>
									<p class="">There are many variations of passages of Lorem Ipsum
										typesetting
										industry. Lorem Ipsum has been the industry's standard dummy
										text ever since.
									</p>
								</div>
							</div>
							<div class="sm:col-span-6 col-span-12 mb-7.5">
								<img alt="" class="rounded-md"
									src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-work/solarplant/pic7.jpg">
							</div>
							<div class="sm:col-span-6 col-span-12 mb-7.5">
								<img alt="" class="rounded-md"
									src="https://industry.dexignzone.com/tailwind/demo/assets/images/our-work/solarplant/pic7.jpg">
							</div>
							<div class="col-span-12">
								<h4>Renewable energy – powering a safer future</h4>
								<p class="">There are many variations of passages of Lorem Ipsum
									typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever
									since the 1500s, when
									an unknown printer took a galley of type and scrambled it to
									make a type specimen
									book. </p>
								<p class="">There are many variations of passages of Lorem Ipsum
									typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever
									since the 1500s, when
									an unknown printer took a galley. </p>
								<p class="">There are many variations of passages of Lorem Ipsum
									typesetting industry.
									Lorem Ipsum has been the industry's standard dummy text ever
									since. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
