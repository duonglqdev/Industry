<div class="relative max2lg:bg-scroll bg-gray-100 md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5">
	<div class="container">
		<div class="md:mb-13.5 mb-6.25 text-center">
			<?php if ( get_sub_field( 'main_title' ) ) : ?>

				<h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold">
					<?php the_sub_field( 'main_title' ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( get_sub_field( 'desc' ) ) : ?>

				<p class="mx-auto max-w-[700px] pt-2.5 text-2sm "><?php the_sub_field( 'desc' ); ?></p>
			<?php endif; ?>
		</div>
		<?php if ( have_rows( 'list_staff' ) ) : ?>
			<div class="grid grid-cols-12 gap-x-6">
				<?php while ( have_rows( 'list_staff' ) ) :
					the_row(); ?>
					<div class="lg:col-span-3 sm:col-span-6 col-span-12 wow fadeInUp" data-wow-duration="2s"
						data-wow-delay="0.2s">
						<div class="relative overflow-hidden rounded shadow-team duration-500 mb-7.5 group">
							<div class="dlab-media">
								<?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'full', '', [ 'class' => 'aspect-[3/4] object-cover' ] ) ?>
							</div>
							<div
								class="absolute -bottom-10 bg-white w-full py-5 px-7.5 text-center duration-700 group-hover:bottom-0 group-hover:bg-primary group-hover:duration-700 after:content-[''] after:size-3.75 after:bg-white after:absolute after:top-[-7px] after:left-1/2 after:[transform:translateX(-50%)_rotate(45deg)] after:duration-700 group-hover:after:bg-primary">
								<?php if ( get_sub_field( 'name' ) ) : ?>
									<h3 class="text-xl mb-1 font-semibold duration-700 group-hover:text-white">
										<?php the_sub_field( 'name' ); ?>
									</h3>
								<?php endif; ?>
								<?php if ( get_sub_field( 'pos' ) ) : ?>
									<span
										class="text-primary duration-700 group-hover:text-white"><?php the_sub_field( 'pos' ); ?></span>
								<?php endif; ?>
								<?php if ( have_rows( 'social' ) ) : ?>
									<ul
										class="uppercase font-semibold text-sm tracking-[1px] mt-5 text-primary group-hover:text-white flex items-center gap-3 justify-center">
										<?php while ( have_rows( 'social' ) ) :
											the_row();
                                            $icon = get_sub_field('icon');
                                            ?>
											<li class="inline-block text-xs">
												<a class=""
													href="<?php echo check_link(get_sub_field('link')) ?>">
                                                     <?php echo svg($icon, '16','16') ?>
                                                </a>
											</li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>

						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

</div>
</div>