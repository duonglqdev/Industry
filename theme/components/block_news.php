<div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-gray-100 wow fadeIn"
	data-wow-duration="2s" data-wow-delay="0.4s">
	<div class="container">
		<div class="md:mb-13.5 mb-6.25 text-center">
			<?php if ( get_sub_field( 'main_title' ) ) : ?>
				<h2 class="mb-2.5 text-[40px]/[45px] maxlg:text-3xl font-semibold">
					<?php the_sub_field( 'main_title' ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( get_sub_field( 'desc' ) ) : ?>
				<p class="mx-auto max-w-[700px] text-2sm"><?php the_sub_field( 'desc' ); ?></p>
			<?php endif; ?>
		</div>
		<div class="blog-carousel owl-none owl-carousel">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 10,
				'orderby' => 'date',
				'order' => 'DESC',
			);

			$query = new WP_Query( $args );

			if ( $query->have_posts() ) :
				while ( $query->have_posts() ) :
					$query->the_post();
					get_template_part( 'template-parts/content', get_post_type() );
				endwhile;
				wp_reset_postdata();

			endif;
			?>
		</div>
	</div>
</div>