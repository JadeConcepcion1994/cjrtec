<section id="banner-carousel">
	<div 
		id="carouselExampleIndicators" 
		class="carousel slide carousel-top" 
		data-ride="carousel"
	>
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
		</ol>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid" 
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_1st_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_1st_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/pickandplacenew-1400.jpg";
							}
						?>" 
					alt="First slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid"
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_2nd_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_2nd_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/lg-ad-1400.jpg";
							}
						?>"
					alt="Second slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid" 
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_3rd_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_3rd_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/owens-corning-ad-1400.jpg";
							}
						?>" 
					alt="Third slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid" 
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_4th_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_4th_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/honeywell-1400.jpg";
							}
						?>" 
					alt="Fourth slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid"
					src="
						<?php 
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_5th_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_5th_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/flying-gale-1400.jpg";
							}
						?>" 
					alt="Fifth slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid"
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_6th_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_6th_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/porth-feet-1400.jpg";
							}
						?>" 
					alt="Sixth slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid"
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_7th_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_7th_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/penguinamusement-1400.jpg";
							}
						?>" 
					alt="Seventh slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid"
					src="
						<?php
							if(wp_get_attachment_urL(get_theme_mod('cjrtec_8th_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_8th_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/surgical-face-shield-making-machine-cjrtec-full.png";
							}
						?>" 
					alt="Eigth slide"
				>
			</div>

			<div class="carousel-item">
				<img 
					class="img-car d-block w-100 mx-auto img-fluid" 
					src="
						<?php
							if (wp_get_attachment_urL(get_theme_mod('cjrtec_9th_carousel_image'))) {
								echo wp_get_attachment_urL(get_theme_mod('cjrtec_9th_carousel_image'));
							} else {
								echo get_template_directory_uri(). "/assets/img/mask-making-machine-cjrtec-1400.jpg";
							}
						?>"
					alt="Ninth slide"
				>
			</div>

			<div class="div-content-image">
				<div class="container">
					<h1 class="mb-5" id="h1_fade">
						<strong>
							<?php
								if (get_theme_mod('cjrtec_image_header_edit')) {
									echo get_theme_mod('cjrtec_image_header_edit');
								} else {
									echo "#1 American Clicker Press Distributor";
								}
							?>	
						</strong>
					</h1>

					<div class="row mx-0"  id="row_fade">
						<a href="" class="first-box">
							<div>
								<h3>CALL US</h3>
								<p>800-733-2302</p>
							</div>
						</a>

						<a href="" class="second-box">
							<div>
								<h3>GET STARTED</h3>
								<p>Request a FREE quote now</p>
							</div>
						</a>

						<!-- <div class="first-box">
							<a href="<?php // echo get_theme_mod('cjrtec_first_box_link_edit'); ?>" class="call-us">
								<?php
									// if (get_theme_mod('cjrtec_first_box_edit')) {
									// 	echo get_theme_mod('cjrtec_first_box_edit');
									// } else {
									// 	echo "CALL US";
									// } 
								?>	
							</a>	
							<p>
								800-733-2302
							</p>
						</div> -->
							
						<!-- <div class="second-box">
							<a href="<?php // echo get_theme_mod('cjrtec_second_box_link_edit'); ?>" class="get-started">
								<?php 
									// if (get_theme_mod('cjrtec_second_box_edit')) {
									// 	echo get_theme_mod('cjrtec_second_box_edit');
									// } else {
									// 	echo "GET STARTED";
									// }
								?>
							</a>
							<p>
								Request a FREE quote now
							</p>
						</div> -->
					</div><!-- row row_fade -->
				</div>
			</div><!-- div-content-image -->
		</div><!-- carousel-inner -->
	</div><!-- carouselExampleIndicators -->
</section>