<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gnws
 */

get_header();
$post_type = get_post_type();
?>

<main>
	<?php get_template_part( 'components/page-banner' ) ?>

	<?php if ( $post_type === 'service' ) : ?>

		<div class="relative max2lg:bg-scroll bg-gray-100 md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5">
			<div class="container">
				<div class="md:mb-13.5 mb-6.25 text-center">
					<?php if ( get_field( 'title_cat_service', 'option' ) ) : ?>

						<h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">
							<?php the_field( 'title_cat_service', 'option' ); ?>
						</h2>
					<?php endif; ?>
					<?php if ( get_field( 'desc_cat_service', 'option' ) ) : ?>

						<div class="mx-auto max-w-[700px] pt-2.5 text-2sm ">
							<?php the_field( 'desc_cat_service', 'option' ); ?>
						</div>
					<?php endif; ?>
				</div>
				<?php if ( have_posts() ) : ?>
					<div class="grid grid-cols-12 gap-6">
						<?php
						$i = 0;
						while ( have_posts() ) :
							the_post();
							$i++;
							set_query_var( 'post_index', $i );

							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
						?>
					</div>
					<div class="text-center mt-10">
						<?php gnws_pagination(); ?>
					</div>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content-none' ); ?>
				<?php endif; ?>

			</div>
		</div>


	<?php elseif ( $post_type === 'project' ) : ?>

		<div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 project_list">
			<div class="container">
				<div class="md:mb-13.5 mb-6.25 text-center">
					<?php if ( get_field( 'st_title_project', 'option' ) ) : ?>

						<h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">
							<?php the_field( 'st_title_project', 'option' ); ?>
						</h2>
					<?php endif; ?>
					<?php if ( get_field( 'st_desc_project', 'option' ) ) : ?>

						<div class="mx-auto max-w-[700px] pt-2.5 text-2sm ">
							<?php the_field( 'st_desc_project', 'option' ); ?>
						</div>
					<?php endif; ?>
				</div>

				<div class="grid grid-cols-12 gap-x-6">
					<div class="col-span-12 text-center">
						<div class="mb-7.5 filters2">
							<?php
							$terms = get_terms( array(
								'taxonomy' => 'project_cat',
								'hide_empty' => true, // Chỉ lấy danh mục có bài viết
							) );

							if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
								?>
								<ul class="filter_container-nav flex flex-wrap mx-2.5"
									data-bs-toggle="buttons">
									<?php
									$i = 0;
									foreach ( $terms as $term ) :
										$i++;
										// Lấy ID của hình ảnh từ ACF field
										$image = get_field( 'pj_cat_image', 'project_cat_' . $term->term_id );
										$image_url = wp_get_attachment_image_url( $image, 'full' );
										?>
										<li data-filter=".<?php echo esc_attr( $term->slug ); ?>"
											class="lg:w-1/4 w-1/2 px-2.5 inline-block cursor-pointer <?php echo $i == 1 ? 'active' : ''; ?>">

											<a class="w-full flex py-3 px-2.5 gap-3 lg:text-xl text-lg border-b-3 border-[#eee] items-center justify-center font-roboto-condensed relative after:content-[''] after:h-[3px] after:bg-primary after:w-0 after:absolute after:-bottom-[3px] after:-right-px after:duration-700"
												href="javascript:void(0);">
												<div class="text-primary">
													<?php echo svg_dir( $image_url, '40', '40' ) ?>
												</div>
												<span><?php echo esc_html( $term->name ); ?></span>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php
				// Lấy danh sách bài viết của post type "project"
				$args = array(
					'post_type' => 'project',
					'posts_per_page' => -1,
				);
				$query = new WP_Query( $args );

				if ( $query->have_posts() ) :
					?>
					<div class="row !pl-0 sp10">
						<div class="w-full">
							<ul class="dlab-gallery-listing gallery mfp-gallery text-center filter_wrap">
								<?php while ( $query->have_posts() ) :
									$query->the_post();
									// Lấy danh sách terms của taxonomy "project_cat"
									$terms = get_the_terms( get_the_ID(), 'project_cat' );
									$filter_classes = '';

									if ( ! empty( $terms ) && ! is_wp_error( $terms ) )
									{
										$term_slugs = wp_list_pluck( $terms, 'slug' );
										$filter_classes = implode( ' ', $term_slugs ); // Gộp các slug thành chuỗi
									}
									?>
									<li class="card-container filter_wrap-item lg:w-1/3 sm:w-1/2 w-full px-[5px] <?php echo esc_attr( $filter_classes ); ?>"
										data-filter="<?php echo esc_attr( $filter_classes ); ?>">

										<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

									</li>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</ul>
						</div>
					</div>
				<?php endif; ?>


			</div>
		</div>

	<?php else : ?>
		<div class="md:pt-14.5 md:pb-13.5 py-7.5">
			<div class="container">
				<div class="grid grid-cols-12 gap-x-6">
					<!-- Left part start -->
					<?php if ( have_posts() ) : ?>
						<div class="lg:col-span-9 col-span-12">
							<?php while ( have_posts() ) :
								the_post(); ?>
								<?php get_template_part( 'template-parts/content-default' ); ?>
							<?php endwhile; ?>

							<!-- Pagination start -->
							<div class="text-center">
								<?php gnws_pagination(); ?>
							</div>
							<!-- Pagination END -->
						</div>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content-none' ); ?>
					<?php endif; ?>
					<!-- Left part END -->
					<!-- Side bar start -->
					<?php get_sidebar()  ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</main>

<?php
get_footer();
