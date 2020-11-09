<div class="row">
	<div class="col-md-6 half-content-text">
		<div data-aos="fade-up" data-aos-delay="150">
			<h3 class="h1-text">
				<?php 
					if (get_theme_mod('cjrtec_header_second_edit')) {
						echo get_theme_mod('cjrtec_header_second_edit');
					} else {
						echo "With automation, the door to maximum productivity could open at any moment.";
					}
				?>
			</h3>

			<br>

			<p class="p-text">
				<?php 
					if (get_theme_mod('cjrtec_paragraph_content_edit')) {
						echo get_theme_mod('cjrtec_paragraph_content_edit');
					} else {
						echo "	Whether it’s leather, rubber, PVC cards, fabric, paper, or cardboard, CJR’s clicker press machines can speed up your cutting operations 10x faster than usual, increasing your production and helping your business achieve maximum efficiency.";
					}
				?>
			</p>

			<br>

			<a 
				href="<?php echo get_theme_mod('cjrtec_link_edit'); ?>" class="btn btn-black"
			>
				<?php
					if (get_theme_mod('cjrtec_link_title_edit')) {
						echo get_theme_mod('cjrtec_link_title_edit');
					} else {
						echo "ABOUT US";
					}
				?>	
			</a>
		</div>
	</div>

	<div class="col-md-6 half-content-image px-0">
		<!-- <div class="row test-row"> -->
			<section class="hero-section" id="js-hero">
				<img src="
					<?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_second_row_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_second_row_image'));
						} else	{
							echo get_template_directory_uri(). "/assets/img/swing.png";
						}
					?>"
				>
			</section>
		<!-- </div> -->
	</div>
</div>



