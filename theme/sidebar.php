<div class="xl:col-span-3 lg:col-span-4 col-span-12">
	<aside class="side-bar lg:sticky top-25">
		<div class="mb-7.5">
			<h5
				class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
				<?php _e('TÌm kiếm', 'gnws') ?>
			</h5>
			<div>
				<form action="<?php echo get_home_url() ?>">
					<div class="relative flex flex-wrap items-stretch w-full border">
						<input name="text"
							class="w-[1%] flex-auto h-13.5 py-2.5 px-5 rounded-s bg-white outline-none text-2sm"
							placeholder="Nhập từ khóa..." type="text" name="s">
						<span class="input-group-btn flex items-center justify-center mr-2">
							<button type="submit" class="flex items-center justify-center">
								<?php echo svg('search', '20', '20', 'text-primary') ?>
							</button>
						</span>
					</div>
				</form>
			</div>
		</div>

		<div class="mb-7.5">
			<h5
				class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
				<?php _e('Bài đăng gần đây', 'gnws') ?>
			</h5>
			<div class="widget-post-bx">
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 3,
					'orderby' => 'date',
					'order' => 'DESC',
				);

				$query = new WP_Query($args);

				if ($query->have_posts()):
					while ($query->have_posts()):
						$query->the_post(); ?>
						<div class="overflow-hidden mb-2.5">
							<div class="table-cell align-middle w-[125px] overflow-hidden pr-3.75">
								<img src="<?php gnws_post_thumbnail_full() ?>" alt="<?php the_title() ?>" width="200"
									height="143" class="rounded">

							</div>
							<div class="table-cell align-middle">
								<div>
									<ul>
										<li
											class="inline-block text-primary font-semibold text-2xs uppercase after:content-['|'] after:inline-block after:font-normal after:ml-1.25 after:opacity-50">
											<strong class="font-semibold"><?php echo get_the_date('d/m') ?></strong>
										</li>
										<li class="inline-block text-primary font-semibold text-2xs uppercase">
											Bởi <?php the_author() ?> </li>
									</ul>
								</div>
								<div>
									<h6 class="leading-5 mb-2 text-2sm font-medium"><a href="<?php echo the_permalink() ?>">
											<?php the_title() ?>
										</a></h6>
								</div>
							</div>
						</div>
						<?php
					endwhile;
					wp_reset_postdata();

				endif;
				?>


			</div>
		</div>



		<div class="mb-7.5">
			<h5
				class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
				<?php _e('Thư viện của chúng tôi', 'gnws') ?>
			</h5>
			<ul id="lightgallery" class="lightgallery table ">


			</ul>
			<?php
			$gallery = get_field('ns_post_gallery', 'option');

			if (!empty($gallery)): ?>
				<ul id="lightgallery" class="lightgallery table">
					<?php foreach ($gallery as $image_id): ?>

						<li class="inline-block float-left w-1/4 p-0.5 duration-500 hover:opacity-70">
							<div class="relative overflow-hidden">
								<a href="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" data-fancybox="gallery"
									class="mfp-image">
									<?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'aspect-square object-cover size-full']); ?>
								</a>
							</div>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>

		<div class="mb-7.5">
			<h5
				class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
				<?php _e('Danh mục', 'gnws') ?>
			</h5>
			<?php
			$categories = get_categories(array(
				'taxonomy' => 'category',
				'hide_empty' => true,
			));

			if (!empty($categories)): ?>
				<ul class="text-body">
					<?php foreach ($categories as $category): ?>
						<li class="border-b border-black/10 relative p-2.5 ps-3.75 leading-5">
							<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
								<?php echo esc_html($category->name); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>



		<?php
		$galleryProject = get_field('ns_post_gallery_pj', 'option');

		if (!empty($galleryProject)): ?>
			<div class="mb-7.5">
				<h5
					class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
					<?php _e('Dự án của chúng tôi', 'gnws') ?>
				</h5>
				<div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
					<?php foreach ($galleryProject as $image_id): ?>
						<div class="item">
							<a href="<?php echo esc_url(wp_get_attachment_url($image_id)); ?>" data-fancybox="gallery-pj"
								class="mfp-image">
								<?php echo wp_get_attachment_image($image_id, 'full', false, ['class' => 'aspect-square object-cover size-full']); ?>
							</a>
						</div>

					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>


		<?php
		$tags = get_tags(array(
			'taxonomy' => 'post_tag',
			'hide_empty' => true,
		));

		if (!empty($tags)): ?>
			<div class="mb-7.5">
				<h5
					class="relative align-middle uppercase border-b border-black/15 mb-5 pb-3.75 font-semibold leading-3 after:-bottom-0.5 after:content-[''] after:inline-block after:h-[3px] after:left-0 after:absolute after:align-bottom after:w-13.5 after:bg-primary">
					Tags
				</h5>
				<div class="tagcloud">
					<?php foreach ($tags as $tag): ?>
						<a class="py-[7px] px-2.5 rounded-full border border-black/10 inline-block text-xs font-semibold text-[#555] mb-1.25 duration-500 hover:bg-primary hover:text-white"
							href="javascript:void(0);">
							<?php echo esc_html($tag->name); ?>
						</a>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>

	</aside>
</div>