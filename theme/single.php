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

<div class=" bg-white">
	<div class="md:pt-14.5 md:pb-13.5 py-7.5">
		<div class="container">
			<div class="grid grid-cols-12 gap-x-6">
				<!-- Left part start -->
				<div class="xl:col-span-9 lg:col-span-8 col-span-12 mb-7.5">
					<!-- blog start -->
					<div class="relative mb-7.5">
						<div>
							<ul>
								<li
									class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
									<strong
										class="font-semibold"><?php echo get_the_date( 'd/m/y' ) ?></strong>
								</li>
								<li
									class="inline-block text-primary font-semibold text-2xs uppercase">
									By <?php the_author() ?> </li>
							</ul>
						</div>
						<div class="mb-1.25">
							<h1 class="my-4 text-3xl font-bold">
								<?php the_title() ?>

							</h1>
						</div>
						<div class="relative overflow-hidden rounded-t group">
							<img src="<?php gnws_post_thumbnail_full() ?>"
								alt="<?php the_title() ?>"
								class="w-full block duration-[10s] group-hover:scale-125">

						</div>
						<div class="mt-5 mb-3.75">
							<?php the_content() ?>
						</div>

					</div>

					<!-- blog END -->
				</div>
				<!-- Left part END -->
				<!-- Side bar start -->
				<div class="xl:col-span-3 lg:col-span-4 col-span-12">
					<aside class="side-bar lg:sticky top-25">
						<div class="mb-7.5">
							<h5
								class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
								<?php _e( 'TÌm kiếm', 'gnws' ) ?>
							</h5>
							<div>
								<form action="<?php echo get_home_url() ?>">
									<div
										class="relative flex flex-wrap items-stretch w-full border">
										<input name="text"
											class="w-[1%] flex-auto h-13.5 py-2.5 px-5 rounded-s bg-white outline-none text-2sm"
											placeholder="Enter your keywords..." type="text"
											name="s">
										<span
											class="input-group-btn flex items-center justify-center mr-2">
											<button type="submit"
												class="flex items-center justify-center">
												<?php echo svg( 'search', '20', '20', 'text-primary' ) ?>
											</button>
										</span>
									</div>
								</form>
							</div>
						</div>

						<div class="mb-7.5">
							<h5
								class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
								<?php _e( 'Bài đăng gần đây', 'gnws' ) ?>
							</h5>
							<div class="widget-post-bx">
								<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 3,
									'orderby' => 'date',
									'order' => 'DESC',
								);

								$query = new WP_Query( $args );

								if ( $query->have_posts() ) :
									while ( $query->have_posts() ) :
										$query->the_post(); ?>
										<div class="overflow-hidden mb-2.5">
											<div
												class="table-cell align-middle w-[125px] overflow-hidden pr-3.75">
												<img src="<?php gnws_post_thumbnail_full() ?>"
													alt="<?php the_title() ?>" width="200" height="143"
													class="rounded">

											</div>
											<div class="table-cell align-middle">
												<div>
													<ul>
														<li
															class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
															<strong
																class="font-semibold"><?php echo get_the_date( 'd/m' ) ?></strong>
														</li>
														<li
															class="inline-block text-primary font-semibold text-2xs uppercase">
															By <?php the_author() ?> </li>
													</ul>
												</div>
												<div>
													<h6 class="leading-5 mb-2 text-2sm font-medium"><a
															href="<?php echo the_permalink() ?>">
															<?php the_title() ?>
														</a></h6>
												</div>
											</div>
										</div>
										<?php
									endwhile;
									wp_reset_postdata();

								endif;
								?>


							</div>
						</div>



						<div class="mb-7.5">
							<h5
								class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
								<?php _e( 'Thư viện của chúng tôi', 'gnws' ) ?>
							</h5>
							<ul id="lightgallery" class="lightgallery table ">
								

							</ul>
							<?php
							$gallery = get_field( 'ns_post_gallery', 'option' );

							if ( ! empty( $gallery ) ) : ?>
								<ul id="lightgallery" class="lightgallery table">
									<?php foreach ( $gallery as $image_id ) : ?>

										<li
											class="inline-block float-left w-1/4 p-0.5 duration-500 hover:opacity-70">
											<div class="relative overflow-hidden">
												<a href="<?php echo esc_url( wp_get_attachment_url( $image_id ) ); ?>" data-fancybox="gallery"
													class="mfp-image">
													<?php echo wp_get_attachment_image( $image_id, 'medium', false, [ 'class' => 'aspect-square object-cover size-full' ] ); ?>
												</a>
											</div>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
				</div>

				<div class="mb-7.5">
					<h5
						class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
						Danh mục</h5>
					<ul class="text-body">
						<li class="border-b border-black/10 relative p-2.5 ps-3.75 leading-5">
							<a href="javascript:void(0);">Electronic Materials</a>
						</li>
						<li class="border-b border-black/10 relative p-2.5 ps-3.75 leading-5">
							<a href="javascript:void(0);">Auto Parts</a>
						</li>
						<li class="border-b border-black/10 relative p-2.5 ps-3.75 leading-5">
							<a href="javascript:void(0);">Building Management</a>
						</li>
						<li class="border-b border-black/10 relative p-2.5 ps-3.75 leading-5">
							<a href="javascript:void(0);">Power Systems</a>
						</li>
						<li class="border-b border-black/10 relative p-2.5 ps-3.75 leading-5">
							<a href="javascript:void(0);">Power & Energy</a>
						</li>
					</ul>
				</div>

				<div class="mb-7.5">
					<h5
						class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
						Dự án của chúng tôi</h5>
					<div
						class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
						<div class="item"><img
								src="https://industry.dexignzone.com/tailwind/demo/assets/images/gallery/pic1.jpg"
								alt=""></div>
						<div class="item"><img
								src="https://industry.dexignzone.com/tailwind/demo/assets/images/gallery/pic1.jpg"
								alt=""></div>
						<div class="item"><img
								src="https://industry.dexignzone.com/tailwind/demo/assets/images/gallery/pic1.jpg"
								alt=""></div>
					</div>
				</div>

				<div class="mb-7.5">
					<h5
						class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
						Tags</h5>
					<div class="tagcloud">
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">Design</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">User interface</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">SEO</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">WordPress</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">Development</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">Joomla</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">Design</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">User interface</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">SEO</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">WordPress</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">Development</a>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">Joomla</a>
					</div>
				</div>

				</aside>
			</div>
			<!-- Side bar END -->
		</div>
	</div>
</div>
</div>

<?php
get_footer();
