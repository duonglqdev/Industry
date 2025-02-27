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
				<div class="xl:col-span-9 lg:col-span-8 col-span-12 mb-7.5">
					<div class="relative mb-7.5">
						<div>
							<ul>
								<li
									class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
									<strong class="font-semibold"><?php echo get_the_date('d/m/y') ?></strong>
								</li>
								<li class="inline-block text-primary font-semibold text-2xs uppercase">
									By <?php the_author() ?> </li>
							</ul>
						</div>
						<div class="mb-1.25">
							<h1 class="my-4 text-3xl font-bold">
								<?php the_title() ?>

							</h1>
						</div>
						<div class="relative overflow-hidden rounded-t group">
							<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
								class="w-full block duration-[10s] group-hover:scale-125">

						</div>
						<div class="mt-5 mb-3.75 the_content">
							<?php the_content() ?>
						</div>

					</div>

					<!-- blog END -->
					<?php if (comments_open() || get_comments_number()) { ?>
						<div class="block_comment">
							<?php comments_template(); ?>
						</div>
					<?php } ?>

				</div>
				<?php get_template_part('sidebar') ?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
