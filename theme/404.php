<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gnws
 */

get_header();
$bg = get_field( 'bg_404','option' );
?>

<div class="page-wraper ">

	<!-- Error Page -->
	<div class="h-screen bg-no-repeat bg-cover bg-center flex flex-col justify-center relative after:absolute after:w-full after:h-full after:inset-0 after:bg-black/80" <?php if ( $bg )
	{ ?>
			style="background-image:url(<?php echo $bg ?>);" <?php } ?>>
		<div class="container relative z-1">
			<div
				class=" text-white m-auto md:grid grid-cols-12 lg:max-w-[700px] gap-4 md:space-y-0 space-y-5">
				<div class="col-span-4">
					<div class="bg-primary lg:w-[200px] lg:h-[200px] w-[150px] h-[150px] mx-auto rounded-full text-white flex items-center justify-center lg:text-7xl text-5xl font-bold">
						404
					</div>
				</div>
				<div class="col-span-8 md:text-left text-center">
					<?php if ( get_field( 'title_404', 'option' ) ) : ?>
						<h2 class="font-bold mb-3 text-3xl text-white">
							<?php the_field( 'title_404', 'option' ); ?></h2>
					<?php endif; ?>

					<?php if ( get_field( 'content_404', 'option' ) ) : ?>
						<div class="text-white">
							<?php the_field( 'content_404', 'option' ); ?>
						</div>
					<?php endif; ?>
					<a href="<?php echo get_home_url() ?>"
						class="inline-block px-5 py-2 font-bold rounded text-white mt-4 bg-primary transition-all duration-500 hover:opacity-90"><?php _e( 'Về trang chủ', 'gnws' ) ?></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Error Page END -->
</div>

<?php
get_footer();
