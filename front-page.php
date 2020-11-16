
<?php get_header(); ?>
	
<div class="cntr-top-content">
	<?php 
		// Banner Carousel Section
		include get_theme_file_path('/inc/inc.banner_carousel.php');

		// Header Second Section
		include get_theme_file_path('/inc/inc.header_second.php');

		// Know The Difference Section
		include get_theme_file_path('/inc/inc.know_the_difference.php');

		// Info Counter Section
		include get_theme_file_path('/inc/inc.info-counter.php');

		// Best Sellers Section
		include get_theme_file_path('/inc/inc.best_sellers.php');

		// Why Choose Section
		include get_theme_file_path('/inc/inc.why_choose.php');

		// Get Help Contact Section
		include get_theme_file_path('/inc/inc.get_help.php');

		// Testimonials Section
		include get_theme_file_path('/inc/inc.cjr_testimonials.php');

		// Client Carousel Section
		include get_theme_file_path('/inc/inc.client_carousel.php');

		// Take Advantage Section
		include get_theme_file_path('/inc/inc.take_advantage.php');
	?>
</div> <!-- cntr-top-content -->

<?php get_footer(); ?>