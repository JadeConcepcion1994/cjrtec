<section id="get-help">
	<div class="container">

		<h3 class="text-center">
			<?php
				if (get_theme_mod('get_help_heading_edit')) {
					echo get_theme_mod('get_help_heading_edit');
				} else {
					echo "Get help with choosing the right machine that <br>
					will satisfy your business needs";
				}
			?>
		</h3>
		<br>
		<p class="text-center">
			<?php
				if (get_theme_mod('get_help_description_edit')) {
					echo get_theme_mod('get_help_description_edit');
				} else {
					echo "If you are not sure about which of our cutting machines fits your requirements best, you can always reach us via phone, chat, or email. From purchasing to setting up your press to diagnosing issues, CJR Support Team has you covered.";
				}
			?>
		</p>

		<div class="row my-3">
			<div class="col-sm-4 text-center">
				<div class="get-help-icons">
					<i class="fa fa-comments-o" aria-hidden="true"></i>
				</div>
				<p>
					<?php
						if (get_theme_mod('get_help_column_1_edit')) {
							echo get_theme_mod('get_help_column_1_edit');
						} else {
							echo "Get real-time assistance from a CJR expert right on your computer or mobile device.";
						}
					?>
				</p>
			</div>

			<div class="col-sm-4 text-center">
				<div class="get-help-icons">
					<i class="fa fa-phone" aria-hidden="true"></i>
				</div>
				<p>
					<?php
						if (get_theme_mod('get_help_column_2_edit')) {
							echo get_theme_mod('get_help_column_2_edit');
						} else {
							echo "You can call us anytime or schedule a time for us to call you.";
						}
					?>
				</p>
			</div>

			<div class="col-sm-4 text-center">
				<div class="get-help-icons">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
				</div>
				<p>
					<?php
						if (get_theme_mod('get_help_column_3_edit')) {
							echo get_theme_mod('get_help_column_3_edit');
						} else {
							echo "For questions about any of our products, send us an email and we’ll answer you as soon as possible.";
						}
					?>
					
				</p>
			</div>
		</div>

		<div class="text-center">
			<!-- <a 
				href="<?php // site_url() ?>/contact" 
				class="btn btn-cjr"
			>
				Contact Us Now
			</a> -->

			<a 
				href="
					<?php 
						if (get_theme_mod('get_help_cta_link_edit')) {
							echo get_theme_mod('get_help_cta_link_edit');
						} else {
							site_url(); ?>/contact 
							<?php
						}
					?>
				" 
				class="btn btn-cjr"
			>	
				<?php
					if (get_theme_mod('get_help_cta_title_edit')) {
						echo get_theme_mod('get_help_cta_title_edit');
					} else {
						echo "Contact Us Now";
					}
				?>
			</a>
		</div>
	</div>
</section>