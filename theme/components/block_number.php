<?php
$bg = get_sub_field( 'bg_img' );
?>
<div class="max-lg:bg-scroll text-white bg-cover md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 relative after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/80 counter-staus-box"
	<?php if ( $bg )
	{ ?> style="background-image:url(<?php echo $bg ?>);" <?php } ?>>
	<div class="container relative z-1">
		<div class="grid grid-cols-12 gap-x-6">
			<div class="lg:col-span-4 col-span-12 wow fadeInLeft" data-wow-duration="2s"
				data-wow-delay="0.2s">
				<div class="md:mb-13.5 mb-6.25 text-white">
					<?php if ( get_sub_field( 'title' ) ) : ?>
						<h2
							class="xl:text-4.5xl/[55px] sm:text-4xl/[46px] text-2.5xl/10 font-bold mb-1.25 text-white">
							<?php the_sub_field( 'title' ); ?>
						</h2>
					<?php endif; ?>
				</div>
			</div>
			<?php if ( have_rows( 'list_number' ) ) : ?>
				<div class="lg:col-span-8 col-span-12">
					<div class="grid grid-cols-12 gap-x-4">
						<?php while ( have_rows( 'list_number' ) ) :
							the_row();
                            $icon = get_sub_field('icon');
                            ?>
							<div class="sm:col-span-4 col-span-12 mb-7.5 wow fadeInUp"
								data-wow-duration="2s" data-wow-delay="0.2s">
								<div
									class="text-center sm:py-13.5 sm:px-5 py-7.5 px-2.5 rounded-2lg border border-white/20 relative overflow-hidden duration-700 z-1 after:content-[''] after:h-0 after:w-full after:bg-primary after:absolute after:top-0 after:right-0 after:-z-1 after:origin-top after:duration-700 hover:after:h-full hover:after:top-auto hover:after:bottom-0 hover:after:origin-bottom group">
									<div class="w-[100px] inline-block text-center mb-5">
										 <?php echo svg_dir($icon, '80','80') ?>
									</div>
									<div class="overflow-hidden">
										<div
											class="inline-block h-0.5 w-20 mb-2.5 relative bg-primary group-hover:bg-white">
										</div>
                                        <?php if( get_sub_field('number') ): ?>
                                           
                                            <h3
                                                class="md:text-6xl/[60px] text-4xl/[46px] font-semibold tracking-[3px] md:mb-2.5 mb-1.25 text-white counter-block" data-count="<?php the_sub_field('number'); ?>">
                                               0
                                            </h3>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('title') ): ?>
                                            
                                            <p class="text-lg uppercase font-medium text-white mb-0">
                                            <?php the_sub_field('title'); ?>
                                            </p>
                                        <?php endif; ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>
</div>