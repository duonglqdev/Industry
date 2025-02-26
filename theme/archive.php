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
					<?php if ( get_field( 'title_cat_service','option' ) ) : ?>

						<h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">
							<?php the_field( 'title_cat_service','option' ); ?>
						</h2>
					<?php endif; ?>
					<?php if ( get_field( 'desc_cat_service','option' ) ) : ?>

						<div class="mx-auto max-w-[700px] pt-2.5 text-2sm ">
							<?php the_field( 'desc_cat_service','option' ); ?>
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
		project
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
					<?php get_template_part( 'sidebar' ) ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</main>

<?php
get_footer();
