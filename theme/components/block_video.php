<?php
$bg = get_sub_field( 'bg_img' );
?>
<div class="relative max-lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-white bg-no-repeat bg-right-bottom"
	<?php if ( $bg )
	{ ?> style="background-image:url(<?php echo $bg ?>);" <?php } ?>>
	<div class="container">
		<div class="section-content">
			<div class="grid grid-cols-12 gap-x-6">
				<div class="lg:col-span-6 col-span-12 mb-7.5">
					<div class="relative z-1 rounded-md overflow-hidden">
                         <?php echo wp_get_attachment_image(get_sub_field('img_video'), 'full') ?>
						<?php if( get_sub_field('video_link') ): ?>
                            <div
                                class="absolute z-2 top-1/2 left-1/2 [transform:translate(-50%,_-50%)]">
                                <a href="<?php the_sub_field('video_link'); ?>"
                                    class="relative popup-youtube video bg-primary size-20 rounded-full text-center leading-[80px] text-white shadow-[0_0_0_10px_rgba(238,_49,_49,_0.2)] block text-[28px] m-auto duration-500"><?php echo svg( 'play-fill', '30', '30', 'absolute top-1/2 left-1/2 [transform:translate(-50%,_-50%)]' ) ?></a>
                            </div>
                        <?php endif; ?>
					</div>
				</div>
				<div class="lg:col-span-6 col-span-12 mb-7.5 align-self-center video-infobx">
					<div class="lg:pl-7.5">
                        <?php if( get_sub_field('main_title') ): ?>
                           
                            <h2 class="lg:text-3xl text-xl font-semibold mb-1"> <?php the_sub_field('main_title'); ?></h2>
                        <?php endif; ?>

                        <?php if( get_sub_field('sub_title') ): ?>
                           
                          <div class="text-primary lg:text-3xl text-xl font-semibold "> dịch vụ, bảo trì</div>
                       <?php endif; ?>
                       <?php if( get_sub_field('desc') ): ?>
                           
                           <div class="mb-7.5 mt-2 "><?php the_sub_field('desc'); ?></div>
                       <?php endif; ?>
                       <?php
                         $button = get_sub_field( 'signature' );
                       if ( $button['name'] ) : ?>
                       
                         <?php echo wp_get_attachment_image($button['img'], 'full','',['class'=>'max-w-[200px]']) ?>
						
						<h4 class="mb-0 font-semibold text-[22px]"><?php echo $button['name']; ?></h4>
						<span class="text-sm "><?php echo $button['pos']; ?></span>
                       <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>