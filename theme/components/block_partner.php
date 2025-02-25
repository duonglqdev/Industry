<div class="relative max2lg:bg-scroll bg-cover py-5 bg-white wow fadeIn" data-wow-duration="2s"
	data-wow-delay="0.6s">
	<div class="container">

		<?php
		$gallery = get_sub_field( 'list_partner' );
		
		if ( ! empty( $gallery ) ) : ?>
			<div
				class="client-logo-carousel mfp-gallery gallery owl-btn-center-lr owl-carousel owl-btn-3">
				<?php foreach ( $gallery as $image_id ) : ?>
					<div class="item">
						<div
							class="bg-white table w-full rounded-md duration-700 hover:shadow-[0_0_30px_0_rgba(0,0,0,0.2)]">
							<div class="table-cell text-center align-middle p-6.25">
								<a href="<?php echo esc_url( wp_get_attachment_url( $image_id ) ); ?>"
									class="mfp-image">
									<?php echo wp_get_attachment_image( $image_id, 'full', false, [ 'class' => 'h-25 !inline-block !w-auto' ] ); ?>
								</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>

	</div>
</div>