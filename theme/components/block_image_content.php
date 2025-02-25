<?php if ( have_rows( 'list_content' ) ) : ?>
	<div class="container py-7.5">
		<div class="grid grid-cols-12 gap-x-6">
			<?php while ( have_rows( 'list_content' ) ) :
				the_row();
                $icon = get_sub_field('icon');
                ?>
				<div class="lg:col-span-4 md:col-span-6 col-span-12 mb-7.5">
					<div class="border border-black/20 bg-white p-7.5 text-sm">
						<div class="float-left mr-2.5 w-14.5 inline-block text-center text-primary mb-5">
							<p 
								class="text-primary">
                                <?php echo svg_dir( $icon, '50', '50' ) ?>
                            </p>
						</div>
						<div class="overflow-hidden">
							<h5 class="text-lg font-bold"><?php the_sub_field('title')  ?></h5>

							<p class="mb-0"><?php the_sub_field('desc')  ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
<?php endif; ?>