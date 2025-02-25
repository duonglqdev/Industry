<div
	class="rounded-md mb-2.5 overflow-hidden relative before:content-[''] before:bg-black/0 before:absolute before:left-0 before:top-0 before:size-full before:z-1 before:duration-700 hover:before:size-full hover:before:bg-black/50 group">
	<img src="<?php gnws_post_thumbnail_full(); ?>" alt="<?php the_title(); ?>">
	<div
		class="absolute left-0 bottom-0 size-full text-center z-[10] opacity-0 invisible duration-700 scale-50 group-hover:scale-100 group-hover:opacity-100 group-hover:visible">
		<div
			class="w-[250px] min-w-[250px] absolute z-1 top-1/2 [transform:translate(-50%,_-50%)] left-1/2">
			<div class="bg-white rounded-md p-5">
				<span class="uppercase font-semibold text-sm text-primary">
					<?php the_title(); ?>
				</span>
				<?php if ( get_field( 'pj_short_desc' ) ) : ?>
					<h3 class="text-lg font-semibold">
						<a href="<?php the_permalink(); ?>">
							<?php the_field( 'pj_short_desc' ); ?>
						</a>
					</h3>
				<?php endif; ?>
			</div>
			<div
				class="bg-primary absolute top-13.5 h-full w-[calc(100%_+_20px)] align-bottom flex items-end text-center flex-row rounded-md -z-1 -left-2.5">
				<a href="<?php the_permalink(); ?>"
					class="w-full uppercase font-semibold p-3.75 absolute left-0 bottom-0 flex items-center justify-center ">
					<?php _e( 'Xem chi tiết', 'gnws' ); ?>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
						fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
						<path fill-rule="evenodd"
							d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8" />
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>