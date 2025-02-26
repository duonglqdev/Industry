<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gnws
 */

get_header();
?>
<main>
<?php get_template_part( 'components/page-banner' ) ?>

	<!-- inner page banner END -->
	<!-- contact area -->
	<div class="content-block">
		<!-- Portfolio Details -->
		<div class="relative max2lg:bg-scroll md:pt-20 md:pb-13.5 sm:pb-5 pt-7.5 bg-white">
			<div class="container">
				<div class="grid grid-cols-12 gap-x-6">
					<div class="lg:col-span-6 col-span-12 mb-7.5">
                        <?php if( get_field('pj_title') ): ?>
                            <h2 class="text-black mb-3.75 font-bold text-3xl"><?php the_field('pj_title'); ?></h2>
                            <?php else : ?>
                                <h2 class="text-black mb-3.75 font-bold text-3xl"><?php _e('Thông tin dự án', 'gnws') ?></h2>
                        <?php endif; ?>
                        <?php if( get_field('pj_desc') ): ?>
                            <div class="desc the_content">
                                <?php the_field('pj_desc'); ?>
                            </div>
                        <?php endif; ?>
					

						<div class="grid grid-cols-12 mb-10 bg-[#f5f5f5] p-7.5 pb-0">
                            <?php if( get_field('pj_customer') ): ?>
                                
                                <div class="sm:col-span-6 col-span-12">
                                    <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                        <i
                                            class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg( 'person', '20', '20' ) ?></i>
    
                                        <strong class="font-semibold block"><?php _e('Khách hàng', 'gnws') ?></strong> <?php the_field('pj_customer'); ?>
                                        
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('pj_location') ): ?>
                                
                                <div class="sm:col-span-6 col-span-12">
                                    <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                        <i
                                            class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg( 'geo-alt', '20', '20' ) ?></i>
                                        <strong class="font-semibold block"><?php _e('Vị trí', 'gnws') ?></strong><?php the_field('pj_location'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('pj_area') ): ?>
                                
                                <div class="sm:col-span-6 col-span-12">
                                    <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                        <i
                                            class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg( 'arrows-angle-expand', '20', '20' ) ?></i>
                                        <strong
                                            class="font-semibold block"><?php _e('Diện tích', 'gnws') ?></strong><?php the_field('pj_area'); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if( get_field('pj_type') ): ?>
                                
                                <div class="sm:col-span-6 col-span-12">
                                    <div class="pl-[55px] mb-7.5 font-semibold relative text-2sm">
                                        <i
                                            class="flex justify-center items-center absolute bg-primary size-10 text-white rounded-full leading-10 text-center left-0 top-0"><?php echo svg( 'houses', '20', '20' ) ?></i>
                                        <strong class="font-semibold block"><?php _e('Loại', 'gnws') ?></strong><?php the_field('pj_type'); ?>
                                        
                                    </div>
                                </div>
                            <?php endif; ?>
						</div>
                        <?php if( get_field('pj_scope_title') ): ?>
                            <h2 class="text-black mb-3.75 font-bold text-3xl"><?php the_field('pj_scope_title'); ?></h2>
                            <?php else : ?>
                                <h2 class="text-black mb-3.75 font-bold text-3xl"><?php _e('Phạm vi công việc', 'gnws') ?></h2>
                        <?php endif; ?>
                        <?php if( get_field('pj_scope_desc') ): ?>
                            <div class="the_content">
                                <?php the_field('pj_scope_desc'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if( have_rows('pj_scope_list') ): ?>
                            <div class="space-y-7 mt-5">
                            <?php while( have_rows('pj_scope_list') ): the_row();
                            $icon= get_sub_field('icon');
                            ?>
                            <div class="relative">
									<div class="float-left mr-2.5 w-14.5">
										<p 
											class="icon-cell text-primary">
											 <?php echo svg_dir($icon, '50','50') ?>
										</p>
									</div>
									<div class="overflow-hidden">
                                        <?php if( get_sub_field('title') ): ?>
                                            
                                            <h5 class="dlab-tilte font-bold text-xl"><?php the_sub_field('title'); ?></h5>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('desc') ): ?>
                                            <p class="mb-0"><?php the_sub_field('desc'); ?></p>
                                        <?php endif; ?>
									</div>
								</div>
                            <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
							
					</div>
					<div class="lg:col-span-6 col-span-12">
                    <?php
                        $gallery = get_field('pj_list_image'); // Lấy danh sách ID ảnh từ ACF
                        if ($gallery) :
                        ?>
                            <div class="grid grid-cols-12 gap-x-6">
                                <?php foreach ($gallery as $index => $image_id) : ?>
                                    <?php 
                                    $image_url = wp_get_attachment_image_url($image_id, 'full'); 
                                    
                                    if ($index % 3 === 0) : ?>
                                        <div class="col-span-12 mb-7.5">
                                            <img alt="" src="<?php echo esc_url($image_url); ?>">
                                        </div>
                                    <?php else : ?>
                                        <div class="sm:col-span-6 col-span-12 mb-7.5">
                                            <img alt="" src="<?php echo esc_url($image_url); ?>">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Portfolio Details End -->
	</div>

</main>
<?php
get_footer();