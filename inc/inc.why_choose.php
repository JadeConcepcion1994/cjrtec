<div class="container">
	<div class="row">
		<div class="col px-0">
			<div class="zoom-wrap">
				<img 
					src="
						<?php 
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_lower_main_image')) ){
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_lower_main_image'));
							}else{
								echo get_template_directory_uri(). "/assets/img/pick-and-place-clicker-press.jpg";
							}
						?>" 
					class="img-fluid"
				>

				<div class="centered">
					<div data-aos="fade-up" data-aos-delay="50">
						<h3 class="centered-text">
							<strong>
								<?php 
									if(get_theme_mod('cjrtec_lower_title_edit')){
										echo get_theme_mod('cjrtec_lower_title_edit');	
									}else{
										echo "Why Choose Clicker Press by CJRTec?";
									}
								?>
							</strong>
						</h3>
						
						<p>
							There are other companies out there but we are confident that nobody else can give you the BEST deals in the market
						</p>
					</div>
				</div><!-- centered -->
			</div><!-- zoom-wrap -->
		</div><!-- col -->
	</div><!-- row -->

	<div class="row">
		<div class="col-md-4 r-1">
			<div  data-aos="fade-up" data-aos-delay="50">
				<img src="<?php echo get_template_directory_uri(). "/assets/img/best-warranty.png"; ?>" style="filter: invert(48%) sepia(50%) saturate(3207%) hue-rotate(30deg) brightness(100%) contrast(80%);" id="img_row">
				
				<h5 class="h2-text">
					<strong>
						<?php 
							if(get_theme_mod('cjrtec_c1_title_edit')){
								echo get_theme_mod('cjrtec_c1_title_edit');	
							} else {
								echo "Best Warranty in the Industry";
							}
						?>
					</strong>
				</h5>
				<p>
					Every CJR machine comes with Full Warranty on all parts and service.
				</p>
				<a href="<?php site_url(); ?>/warranty">
					Learn More <i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 10px"></i>
				</a>
			</div>
		</div>

		<div class="col-md-4 r-2">
			<div  data-aos="fade-up" data-aos-delay="50">
				<img src="<?php echo get_template_directory_uri(). "/assets/img/buy-back-protection.png"; ?>" id="img_row">
				<h5 class="h2-text">
					<strong>
						<?php 
							if(get_theme_mod('cjrtec_c2_title_edit')){
								echo get_theme_mod('cjrtec_c2_title_edit');	
							} else {
								echo "Buy Back Protection";
							}
						?>
					</strong>
				</h5>
				<p>
					CJR guarantees to buy back any clicker press up to 40 tons.
				</p>
				<a 
					href="<?php site_url() ?>/buyback"
					class="buyback-link"
				>
				Learn More <i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 10px"></i>
				</a>
			</div>
		</div>

		<div class="col-md-4 r-3">
			<div  data-aos="fade-up" data-aos-delay="50">
				<img src="<?php echo get_template_directory_uri(). "/assets/img/financing-support.png"; ?>" id="img_row">
				<h5 class="h2-text">
					<strong>
						<?php 
							if(get_theme_mod('cjrtec_c3_title_edit')){
								echo get_theme_mod('cjrtec_c3_title_edit');	
							} else {
								echo "Financing Support";
							}
						?>
					</strong>
				</h5>
				<p>
					Apply for special financing and free up your capital.
				</p>
				<a href="<?php site_url() ?>/finance">
					Learn More <i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: 10px"></i>
				</a>
			</div>
		</div>
	</div>
</div>










	 