<?php
if ( is_post_type_archive( 'service' ) || is_singular( 'service' ) || is_tax( 'service_cat' ) ) {
    $bg = get_field( 'banner_service_img', 'option' );
} elseif ( is_post_type_archive( 'project' ) || is_singular( 'project' ) || is_tax( 'project_cat' ) ) {
    $bg = get_field( 'banner_project_img', 'option' );
} elseif ( is_category() ) {
    $bg = get_field( 'cat_page_banner', 'option' );
} else {
    $bg = get_sub_field( 'bg_img' );
}
?>
<div class="relative table md:h-[220px] h-[180px] w-full after:content-[''] after:absolute after:left-0 after:top-0 after:size-full after:bg-black/50 text-center bg-top bg-cover"
	<?php if ( $bg )
	{ ?> style="background-image:url(<?php echo $bg ?>);" <?php } ?>>
	<div class="container relative z-1 table h-full">
		<div
			class="lg:flex table-cell items-center justify-between align-middle text-center md:h-[220px] h-[180px] maxmd:py-3.75">
			<h2
				class="font-semibold md:text-[40px] text-2xl lg:mb-0 mb-2.5 text-white maxmd:leading-8 maxmd:text-center">
				<?php
				if ( is_post_type_archive( 'service' ) ) :
					echo post_type_archive_title();
				elseif ( is_post_type_archive( 'project' ) ) :
					echo post_type_archive_title();
				elseif ( is_category() ) :
					the_archive_title();
				else :
					the_title();
				endif;
				?>
			</h2>
			<?php if ( function_exists( 'rank_math_the_breadcrumbs' ) )
				rank_math_the_breadcrumbs(); ?>

		</div>
	</div>
</div>