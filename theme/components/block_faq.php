<div class="container py-7.5">
	<div class="md:mb-13.5 mb-6.25 text-black text-center">
		<?php if ( get_sub_field( 'main_title' ) ) : ?>
			<h2 class="mb-2.5 text-[40px]/[45px] maxlg:text-3xl font-semibold">
				<?php the_sub_field( 'main_title' ); ?>
			</h2>
		<?php endif; ?>
		<?php if ( get_sub_field( 'desc' ) ) : ?>
			<p class="mx-auto max-w-[700px] text-2sm"><?php the_sub_field( 'desc' ); ?></p>
		<?php endif; ?>
	</div>
	<div class="grid grid-cols-12 gap-x-6">
		<div class="lg:col-span-6 col-span-12 mb-7.5">
			<div class="relative">
				<a class="absolute top-1/2 left-1/2 [transform:translate(-50%,_-50%)] popup-youtube"
					href="<?php echo check_link(get_sub_field('video_link')) ?>">
					<?php echo svg( 'play-fill', '50', '50', 'text-white' ) ?></a>
                     <?php echo wp_get_attachment_image(get_sub_field('img'), 'full','',['class'=>'size-full rounded']) ?>
			
			</div>
		</div>
		<div class="lg:col-span-6 col-span-12 mb-7.5">
			<div class="accordion-wrapper mb-7.5" id="accordion1">
                <?php if( have_rows('list_faq') ): ?>
                    <?php
                        $i=0;
                        while( have_rows('list_faq') ): the_row();
                        $i++;
                        ?>
                        
                        <div class="mb-5 duration-500 hover:shadow-[0_0_15px_1px_rgba(0,0,0,0.1)]">
                            <div class="relative acod-head after:absolute after:right-2 after:top-6 after:-translate-x-1/2 after:border-l-[8px] after:border-l-transparent after:border-t-[10px] after:border-t-black after:border-r-[8px] after:border-r-transparent [&:not(.active)]:after:rotate-0 after:rotate-180" data-dz-item="faq<?php echo $i  ?>">
                                <h6 class="mb-0">
                                    <a href="javascript:void(0);"
                                        class="p-5 pr-10 rounded border border-black/20 block font-bold">
                                        <?= $i ?>,&nbsp; <?php the_sub_field('title')  ?>
                                        
                                    </a>
                                </h6>
                            </div>
                            <div id="faq<?php echo $i  ?>" class="acod-body hidden">
                                <div class="border border-black/20 border-t-0 -mt-px rounded-b p-5">
                                    <p class=" mb-0"><?php the_sub_field('content')  ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

			</div>
		</div>
	</div>
</div>