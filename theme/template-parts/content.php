<div class="item">
	<div class="bg-white rounded overflow-hidden shadow-blog relative mb-7.5 group">
		<div class="overflow-hidden">
			<a href="<?php echo the_permalink() ?>">
				<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
					class="duration-700 block group-hover:[transform:scale(1.5)_rotate(-20deg)] aspect-square object-cover">
			</a>
		</div>
		<div class="p-7.5">
			<div
				class="relative border-b border-black/10 pb-3 mb-2.5 after:content-[''] after:w-13.5 after:h-0.5 after:bg-primary after:absolute after:-bottom-px after:left-0">
				<ul>
					<li
						class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
						<strong class="font-semibold"><?php echo get_the_date( 'd/m/y' ) ?></strong>
					</li>
					<li class="inline-block text-primary font-semibold text-2xs uppercase">
						By <?php the_author(); ?>
					</li>
				</ul>
			</div>
			<div>
				<h3 class="text-xl/[34px] font-semibold mb-1.25 mt-5"><a
						href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
				</h3>
			</div>
			<div class="mt-3.75">
				<a href="<?php echo the_permalink() ?>" title="<?php _e( 'Đọc thêm', 'gnws' ) ?>"
					class="btn bg-primary relative overflow-hidden z-1 after:content-[''] after:absolute after:top-0 after:left-0 after:size-full after:-z-1 after:bg-primaryhover after:duration-300 after:-translate-x-full hover:after:translate-x-0 after:delay-200 before:content-[''] before:absolute before:top-0 before:left-0 before:size-full before:-z-1 before:bg-black/50 before:duration-300 before:-translate-x-full hover:before:translate-x-0">
					<?php _e( 'Đọc thêm', 'gnws' ) ?>
				</a>
			</div>
		</div>
	</div>
</div>