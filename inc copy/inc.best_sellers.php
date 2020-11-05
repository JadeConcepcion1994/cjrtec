	<div class="row">
		 		<div class="col-md-3">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/Swingarm.png";
						}
						?>
					  " alt="Card image cap">
					  <div class="card-body">
					  	<div data-aos="fade-up" data-aos-delay="50">
					  	<h5 class="card-title">
					  		<?php 
					  		if(get_theme_mod('cjrtec_first_title_edit')){
					  		echo get_theme_mod('cjrtec_first_title_edit'); 
					  		}else{
					  		echo "Swing Arm Press";
					  		}
					  		

					  		?>
					  		</h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_first_paragraph_edit'); ?></p>
					    <a href="<?php echo get_theme_mod('cjrtec_first_link_edit');  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_first_link_title_edit'); ?></strong></a>
					  	</div>
					  </div>
					</div>
		 		</div>
		 		<div class="col-md-3">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/Beampress.png";
						}
						?>

					  " alt="Card image cap">
					  <div class="card-body">
					  	<div  data-aos="fade-up" data-aos-delay="50">
					    <h5 class="card-title">
					    	<?php
					    	if(get_theme_mod('cjrtec_second_title_edit')){

					    	 echo get_theme_mod('cjrtec_second_title_edit'); 
					    	}else{
					    	  echo "Beam Press";
					    	}
					    	?>		
					    	</h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_second_paragraph_edit'); ?></p>
					    <a href="<?php echo get_theme_mod('cjrtec_first_link_edit');  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_second_link_title_edit'); ?></strong></a>
					    </div>
					  </div>
					</div>
		 		</div>
		
		
		 		<div class="col-md-3">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/Travelhead.png";
						}
						?>

					  " alt="Card image cap">
					  <div class="card-body">
					  	<div data-aos="fade-up" data-aos-delay="50">
					  	<h5 class="card-title">
					  		<?php 
					  		if(get_theme_mod('cjrtec_third_title_edit')){
					  		echo get_theme_mod('cjrtec_third_title_edit');
					  		}else{
					  		echo "Traveling Head Press";
					  		}
					  		
					  		 ?>
					  		</h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_third_paragraph_edit'); ?></p>
					    <a href="<?php echo get_theme_mod('cjrtec_third_link_edit');  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_third_link_title_edit'); ?></strong></a>
					  	</div>
					  </div>
					</div>
		 		</div>
		 		<div class="col-md-3">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/Conveyor.png";
						}
						?>
					  " alt="Card image cap">
					  <div class="card-body">
					  	<div  data-aos="fade-up" data-aos-delay="50">
					    <h5 class="card-title">
					    	<?php 
					    	if(get_theme_mod('cjrtec_fourth_title_edit')){
					    	echo get_theme_mod('cjrtec_fourth_title_edit'); 
					    	}else{
					    	echo "Conveyor Press";
					    	}
					    	
					    	?> 		
					    	</h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_fourth_paragraph_edit'); ?></p>
					    <a href="<?php echo get_theme_mod('cjrtec_fourth_link_edit');  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_fourth_link_title_edit'); ?></strong></a>
					    </div>
					  </div>
					</div>
		 		</div>
		 	</div>