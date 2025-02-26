<?php 
$i = get_query_var('post_index', 0);
?>
<div class="md:col-span-6 lg:col-span-4 col-span-12 wow fadeInUp" data-wow-duration="2s"
	data-wow-delay="0.2s">
	<div
		class="sm:py-13.5 py-9 px-7.5 h-full bg-white shadow-wraper z-1 relative after:content-[''] after:h-full after:w-0 after:bg-primary after:absolute after:bottom-0 after:right-0 after:-z-1 after:origin-left after:duration-700 hover:after:origin-right hover:after:right-auto hover:after:left-0 hover:after:w-full group">
		<div class="w-20 mb-6.25 inline-block text-center">
			<a href="<?php the_permalink(); ?>" class="icon-cell text-primary">
				<?php echo svg_dir( get_field( 'service_avatar' ), '', '', 'w-[70px] h-[70px] group-hover:text-white' ); ?>
			</a>
		</div>
		<div
			class="absolute right-7.5 top-4 text-[100px]/[80px] font-bold text-black/5 duration-500 pointer-events-none group-hover:text-white/20">
			<?= sprintf( '%02d', $i ); ?>
		</div>
		<div class="overflow-hidden">
			<h3 class="text-xl/[30px] font-semibold group-hover:text-white mb-3.75">
				<a href="<?php the_permalink(); ?>" class="hover:text-white">
					<?php the_title(); ?>
				</a>
			</h3>
			<div class="mb-0 group-hover:text-white">
				<?php the_field( 'ser_short_desc' ); ?>
			</div>
		</div>
	</div>
</div>