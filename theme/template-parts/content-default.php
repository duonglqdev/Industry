<div class="relative mb-7.5 overflow-hidden">
	<div class="relative overflow-hidden rounded md:w-[350px] w-full table-cell align-top group">
		<a href="<?php echo the_permalink() ?>">
			<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>"
				class="block duration-[10s] group-hover:scale-125 object-cover aspect-square">

		</a>
	</div>
	<div class="md:table-cell align-middle md:pl-7.5 maxmd:mt-3.75">
		<div class="mb-2.5">
			<ul>
				<li
					class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
					<strong class="font-semibold"><?php echo get_the_date('d/m/y') ?></strong>
				</li>
				<li class="inline-block text-primary font-semibold text-2xs uppercase">
					<?php _e('Bởi', 'gnws') ?> <?php the_author() ?> </li>
			</ul>
		</div>
		<div class="mb-1.25">
			<h4 class="mb-1.25"><a href="<?php echo the_permalink() ?>">
					<?php the_title() ?>
				</a>
			</h4>
		</div>
		<div class="mb-3.75">
			<div class="mb-0 text-2sm text-[#999]">
				<?php the_excerpt() ?>
			</div>
		</div>
		<div>
			<a href="<?php echo the_permalink() ?>" title="READ MORE"
				class="btn bg-primary text-white duration-500 hover:bg-primaryhover">
				<?php _e('Đọc thêm', 'gnws') ?>
			</a>
		</div>
	</div>
</div>