<div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-white contact-style-1">
	<div class="container">

		<?php if ( have_rows( 'list_contact' ) ) : ?>
			<div class="grid grid-cols-12 gap-x-6 dzseth">
				<?php while ( have_rows( 'list_contact' ) ) :
					the_row();
					$icon = get_sub_field( 'icon' );
					?>
					<div class="lg:col-span-3 sm:col-span-6 col-span-12 mb-7.5">
						<div class="px-5 py-7.5 text-center rounded border text-sm h-full">
							<div class="w-20 inline-block text-center  mb-5">
								<p class="flex justify-center items-center text-primary">
									<?php echo svg( $icon, '50', '50', 'text-center' ) ?></p>
							</div>
							<div class="overflow-hidden">
								<?php if ( get_sub_field( 'title' ) ) : ?>
									<h5 class="uppercase font-bold text-lg "><?php the_sub_field( 'title' ); ?>
									</h5>
								<?php endif; ?>
								<?php if ( get_sub_field( 'content' ) ) : ?>
									<div class="mt-2 text-gray-600 text-sm">
										<?php the_sub_field( 'content' ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>



		<div class="grid grid-cols-12 gap-x-6">
			<!-- Left part start -->
			<div class="lg:col-span-6 col-span-12 mb-7.5">
				<div class="sm:p-7.5 p-5 border rounded form_contact">
					<?php echo do_shortcode( '[contact-form-7 id="7ea6e50" title="Liên hệ"]' ) ?>
				</div>
			</div>
		<?php if( get_sub_field('iframe_map') ): ?>
			<div class="lg:col-span-6 col-span-12 mb-7.5 flex">
                <div class="contact-map w-full">
                    <?php the_sub_field('iframe_map'); ?>
                </div>
			</div>
        <?php endif; ?>
			<!-- right part END -->
		</div>
	</div>
</div>