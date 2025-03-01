<div class="relative max2lg:bg-scroll bg-white md:py-20 py-7.5 wow fadeIn project_list"
	data-wow-duration="2s" data-wow-delay="0.6s">
	<div class="container">
		<div class="mb-7.5 text-center">

			<?php if ( get_sub_field( 'main_title' ) ) : ?>
				<h2 class="mb-2.5 text-[40px]/[45px] maxlg:text-3xl font-semibold">
					<?php the_sub_field( 'main_title' ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( get_sub_field( 'desc' ) ) : ?>
				<p class="mx-auto max-w-[700px] text-2sm"><?php the_sub_field( 'desc' ); ?></p>
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
						<ul class="filter_container-nav flex flex-wrap mx-2.5" data-bs-toggle="buttons">
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