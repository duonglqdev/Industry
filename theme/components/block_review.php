<?php
$bg = get_sub_field( 'bg_img' );
?>
<div class="relative max2lg:bg-scroll after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 bg-[#152332] md:py-20 py-7.5 wow fadeIn"
	data-wow-duration="2s" data-wow-delay="0.2s" <?php if ( $bg )
	{ ?>
		style="background-image:url(<?php echo $bg ?>);" <?php } ?>>
	<div class="container relative z-1">
		<div class="md:mb-13.5 mb-6.25 text-center">
			<?php if ( get_sub_field( 'main_title' ) ) : ?>

				<h2 class="mb-1.25 sm:text-4xl/[45px] text-2.5xl/[30px] font-semibold text-white">
					<?php the_sub_field( 'main_title' ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( get_sub_field( 'desc' ) ) : ?>

				<p class="mx-auto max-w-[700px] pt-2.5 text-2sm text-white  ">
					<?php the_sub_field( 'desc' ); ?></p>
			<?php endif; ?>
		</div>
		<?php if ( have_rows( 'list_review' ) ) : ?>
			<div class="testimonial-two-dots swiper pagination-1">
				<div class="swiper-wrapper">
					<?php while ( have_rows( 'list_review' ) ) :
						the_row(); ?>
						<div class="swiper-slide">
							<div
								class="relative mb-5 after:content-[''] after:w-px after:h-full after:absolute after:-right-0.5 after:bg-white after:top-0 after:opacity-20 text-white">
								<div class="relative pt-10 pr-7.5 pb-5 text-2sm ">
									<?php echo svg( 'quote', '25', '25', 'text-primary' ) ?>
                                    <?php if( get_sub_field('content') ): ?>
                                        <div class="text-lg/8 font-light mb-0 text-white"><?php the_sub_field('content'); ?></div>
                                    <?php endif; ?>
								</div>
								<div class="flex items-center gap-3">
                                <?php echo wp_get_attachment_image(get_sub_field('img'), 'full',false,['class'=>'rounded-full w-16 h-16 object-cover shrink-0 border-3 border-white'],) ?>
									<div class="content">
										<strong class="block text-lg font-medium"><?php the_sub_field('name'); ?></strong>
										<span class="text-sm text-white/80 block"><?php the_sub_field('job'); ?></span>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
                    
				</div>
                <div class="swiper-pagination mt-5 static"></div>
			</div>
		<?php endif; ?>


	</div>
</div>