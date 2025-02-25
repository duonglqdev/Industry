<?php if ( have_rows( 'list_slider' ) ) : ?>
	<div class="main-banner">
		<div class="swiper home-slider2 w-full">
			<div class="swiper-wrapper">
				<?php while ( have_rows( 'list_slider' ) ) :
					the_row(); ?>
					<div class="swiper-slide bg-no-repeat bg-cover bg-[50%] sm:!h-[90vh] !h-[60vh] relative after:content-[''] after:absolute after:left-0 after:bottom-0 after:size-full after:-z-1 after:min-h-[400px] after:bg-[linear-gradient(rgba(0,0,0,0)_0%,_rgba(0,0,0,0.60)_100%)]"
						style="background-image: url('<?php the_sub_field('banner_slider')  ?>');">
						<div class="absolute left-0 bottom-0 md:p-13.5 p-7.5">
                            <?php if( get_sub_field('title') ): ?>
                              
                                <h2
                                    class="font-semibold xl:text-[90px]/[90px] sm:text-[67px]/[61px] text-3xl/9 mb-1.5 text-white">
                                    <?php the_sub_field('title'); ?></h2>
                            <?php endif; ?>
                            <?php if( get_sub_field('desc') ): ?>
                                
                                <div
                                    class="text-white/50 md:inline-block tracking-[1px] text-2sm/6 font-raleway font-medium max-w-[400px] md:m-0">
                                    <?php the_sub_field('desc'); ?>
                                </div>
                            <?php endif; ?>
                            <?php
                              $button = get_sub_field( 'btn' );
                            if ( $button['title'] ) : ?>
                            
                             <a class="btn border border-white/25 sm:min-w-52 duration-500 text-white hover:border-white"
                                 href="<?php echo $button['link']; ?>">
                                 <button ><?php echo $button['title']; ?></button>
                             </a>
                             <a class="btn border border-white/25 px-5 duration-500 text-white hover:border-white"
                                 href="<?php echo $button['link']; ?>">
                                 <?php echo svg( 'angle-right', '20', '20', 'text-white' ) ?>
                             </a>
                            <?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="swiper-pagination !w-auto !left-auto right-[5%] md:pb-13.5 pb-7.5"></div>
		</div>
	</div>
<?php endif; ?>