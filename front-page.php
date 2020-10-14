
<?php 
get_header();
?>
	
	<div class="container-fluid cntr-top-content">
		<div class="row row-content">
			<img src="
			<?php 
			if(wp_get_attachment_urL(get_theme_mod('cjrtec_top_home_image')) ){
				echo wp_get_attachment_urL(get_theme_mod('cjrtec_top_home_image'));
			}else{
				echo get_template_directory_uri(). "/assets/img/default.jpg";
			}
			?>
			" class="img-main-top">

		<div class="div-content-image">
		 	<h1 id="h1_fade"> <strong>
		 		<?php
		 		 if(get_theme_mod('cjrtec_image_header_edit')){
		 		 	echo get_theme_mod('cjrtec_image_header_edit');
		 		 }else{
		 		 	echo "Sample Ideal Text";
		 		 }
		 		  
		 		?>	
		 		</strong></h1>

		 	<div class="row"  id="row_fade">
		 			<div class="first-box">
		 				<?php
		 				if(get_theme_mod('cjrtec_first_box_edit')){
		 					echo get_theme_mod('cjrtec_first_box_edit');
		 				}else{
		 					echo "Sample Text";
		 				} 
		 				 ?>
		 			</div>
		 			<div class="second-box">
		 			   <?php 
		 			   if(get_theme_mod('cjrtec_first_box_edit')){
		 			   	echo get_theme_mod('cjrtec_first_box_edit');
		 			   }else{
		 			   	echo "Sample Text";
		 			   }
		 			   
		 			   ?>
		 			</div>
		 	</div>
		 </div>
		</div>
	
		 <div class="row">
		 	<div class="col-md-6 half-content-text">
		 		<div  data-aos="fade-up" data-aos-delay="150">
		 		<h1 class="h1-text">
		 		   <?php 
		 		   if(get_theme_mod('cjrtec_header_second_edit')){
		 		   	echo get_theme_mod('cjrtec_header_second_edit');
		 		   }else{
		 		   	echo "Sample Text Here";
		 		   }
		 		    
		 		   ?>
		 		   </h1>
		 		<br>
		 		<p class="p-text">
		 			<?php 
		 			if(get_theme_mod('cjrtec_paragraph_content_edit')){
		 			 echo get_theme_mod('cjrtec_paragraph_content_edit');
		 			}else{
		 			 echo "	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam";
		 			}
		 			?>
		 		</p>
		 		<br>
		 		<a href="<?php echo get_permalink(get_theme_mod('cjrtec_link_edit')); ?>" class="btn btn-black">
		 			<?php
		 			if(get_theme_mod('cjrtec_link_title_edit')){
		 				echo get_theme_mod('cjrtec_link_title_edit');
		 			}else{
		 				echo "Read More";
		 			}
		 			
		 			?>	
		 			</a>
		 		</div>
		 	</div>
		 	<div class="col-md-6 half-content-image">
		 <div class="row test-row">
		 	<section class="hero-section" id="js-hero">
					<img src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_second_row_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_second_row_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/default.jpg";
						}
						?>
					">
			</section>
		 </div>	
		 	</div>
		 </div>

		 <div class="row">
		 	<div class="col-md-12" data-aos="fade-up" data-aos-delay="50">
		 		<h1 class="row-title-h1">
		 			<?php 
		 			if(get_theme_mod('cjrtec_cards_title_edit')){
		 			  echo get_theme_mod('cjrtec_cards_title_edit');
		 			}else{
		 			  echo "Our Services";
		 			}
		 			 
		 			?>
		 			</h1>
		 	</div>
		 </div>

		 <div class="container-fluid cnt-flu">
		 	<div class="row">
		 		<div class="col-md-6">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/default.jpg";
						}
						?>
					  " alt="Card image cap">
					  <div class="card-body">
					  	<div data-aos="fade-up" data-aos-delay="50">
					  	<h5 class="card-title"><?php echo get_theme_mod('cjrtec_first_title_edit'); ?></h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_first_paragraph_edit'); ?></p>
					    <a href="<?php echo get_permalink(get_theme_mod('cjrtec_first_link_edit'));  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_first_link_title_edit'); ?></strong></a>
					  	</div>
					  </div>
					</div>
		 		</div>
		 		<div class="col-md-6">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/default.jpg";
						}
						?>

					  " alt="Card image cap">
					  <div class="card-body">
					  	<div  data-aos="fade-up" data-aos-delay="50">
					    <h5 class="card-title"><?php echo get_theme_mod('cjrtec_second_title_edit'); ?></h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_second_paragraph_edit'); ?></p>
					    <a href="<?php echo get_permalink(get_theme_mod('cjrtec_first_link_edit'));  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_second_link_title_edit'); ?></strong></a>
					    </div>
					  </div>
					</div>
		 		</div>
		 	</div>
		 	<br>
		 	<div class="row">
		 		<div class="col-md-6">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/default.jpg";
						}
						?>

					  " alt="Card image cap">
					  <div class="card-body">
					  	<div data-aos="fade-up" data-aos-delay="50">
					  	<h5 class="card-title"><?php echo get_theme_mod('cjrtec_third_title_edit'); ?></h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_third_paragraph_edit'); ?></p>
					    <a href="<?php echo get_permalink(get_theme_mod('cjrtec_third_link_edit'));  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_third_link_title_edit'); ?></strong></a>
					  	</div>
					  </div>
					</div>
		 		</div>
		 		<div class="col-md-6">
		 			<div class="card">
					  <img class="card-img-top" src="
					    <?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/default.jpg";
						}
						?>
					  " alt="Card image cap">
					  <div class="card-body">
					  	<div  data-aos="fade-up" data-aos-delay="50">
					    <h5 class="card-title"><?php echo get_theme_mod('cjrtec_fourth_title_edit'); ?></h5>
					    <p class="card-text"><?php echo get_theme_mod('cjrtec_fourth_paragraph_edit'); ?></p>
					    <a href="<?php echo get_permalink(get_theme_mod('cjrtec_fourth_link_edit'));  ?>" class="btn btn-cjr"><strong><?php echo get_theme_mod('cjrtec_fourth_link_title_edit'); ?></strong></a>
					    </div>
					  </div>
					</div>
		 		</div>
		 	</div>
		 	<br>
		 	<div class="row">
		 		<div class="col-md-12">
		 		<div class="zoom-wrap">
		 		
						<img src="<?php 
						if(wp_get_attachment_urL(get_theme_mod('cjrtec_lower_main_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_lower_main_image'));
						}else{
							echo get_template_directory_uri(). "/assets/img/default.jpg";
						}
						

						?>">
		
		 			<div class="centered">
		 				<div data-aos="fade-up" data-aos-delay="50">
		 				<h1 class="centered-text"><strong>
		 					<?php 
		 						if(get_theme_mod('cjrtec_lower_title_edit')){
		 							echo get_theme_mod('cjrtec_lower_title_edit');	
		 						}else{
		 							echo "Sample Text Here";
		 						}

		 					?>
		 				</strong></h1>
		 				</div>
		 			</div>
		 		</div>	 	
		 		</div>	
		 	</div>
		 	<div class="container-fluid">
		 	<div class="row">
		 		<div class="col-md-4 r-1">
		 			<div  data-aos="fade-up" data-aos-delay="50">
		 			<i class="fa fa-cubes" aria-hidden="true"></i>
		 			<h2 class="h2-text"><strong>

		 					<?php 
		 						if(get_theme_mod('cjrtec_c1_title_edit')){
		 							echo get_theme_mod('cjrtec_c1_title_edit');	
		 						}else{
		 							echo "Sample Text Here";
		 						}

		 					?>
		 			</strong></h2>
		 		    </div>
		 		</div>
		 		<div class="col-md-4 r-2">
		 			<div  data-aos="fade-up" data-aos-delay="50">
		 			<i class="fa fa-cubes" aria-hidden="true"></i>
		 			<h2 class="h2-text"><strong>
		 				    <?php 
		 						if(get_theme_mod('cjrtec_c2_title_edit')){
		 							echo get_theme_mod('cjrtec_c2_title_edit');	
		 						}else{
		 							echo "Sample Text Here";
		 						}

		 					?>
		 		    </strong></h2>
		 		    </div>
		 		</div>
		 		<div class="col-md-4 r-3">
		 			<div  data-aos="fade-up" data-aos-delay="50">
		 			<i class="fa fa-cubes" aria-hidden="true"></i>
		 		    <h2 class="h2-text"><strong>
		 		  			<?php 
		 						if(get_theme_mod('cjrtec_c3_title_edit')){
		 							echo get_theme_mod('cjrtec_c3_title_edit');	
		 						}else{
		 							echo "Sample Text Here";
		 						}

		 					?>

		 			</strong></h2>
		 		    </div>
		 		</div>
		 	</div>
		 	</div>
		 </div><br>

		 <div class="row">
		 	<div class="col-md-12">
		 		<div data-aos="fade-down" data-aos-delay="510">
		 		<h2 class="row-title-h1">Our Happy Customers</h2>	
		 		</div>
		 	</div>
		 </div>
		 <div class="row" style="margin-bottom: 100px">
		 	<div class="col-md-12 col-car-customers">
		 		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <p style="color: black; padding: 0px 100px 0 100px" align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				      quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
				      <p style="color: black" align="center">Sample Name</p>
				    </div>
				    <div class="carousel-item">
				    <!--   <img class="d-block w-100" src="..." alt="Second slide"> -->
				      <p style="color: black; padding: 0px 100px 0 100px" align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				      quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
				      <p style="color: black" align="center">Sample Name 1</p>
				    </div>
				    <div class="carousel-item">
				      <!-- <img class="d-block w-100" src="..." alt="Third slide"> -->
				      <p style="color: black; padding: 0px 100px 0 100px" align="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				      quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
				      <p style="color: black" align="center">Sample Name 2</p>
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <i class="fa fa-chevron-left" aria-hidden="true" style="color: black; font-size: 30px"></i>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				   <i class="fa fa-chevron-right" aria-hidden="true" style="color: black; font-size: 30px"></i>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
		 	</div>	
		 </div>

		<div data-aos="fade-up" data-aos-delay="510">
		 <div class="row">
		 	<div class="col-md-12 col-car-company">
		 		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				    	<div class="flex-container">
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    	</div>
				    </div>
				    <div class="carousel-item">
				    	<div class="flex-container">
				    		<div>
				    			<img src="<?php echo get_template_directory_uri(). "/assets/img/default.jpg" ?>" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="<?php echo get_template_directory_uri(). "/assets/img/default.jpg" ?>" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="<?php echo get_template_directory_uri(). "/assets/img/default.jpg" ?>" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="<?php echo get_template_directory_uri(). "/assets/img/default.jpg" ?>" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="<?php echo get_template_directory_uri(). "/assets/img/default.jpg" ?>" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    	</div>
				    </div>
				    <div class="carousel-item">
		  				<div class="flex-container">
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    		<div>
				    			<img src="https://source.unsplash.com/random/1920x1080" alt="Image Alt" height="100px" width="100px" />
				    		</div>
				    	</div>
				    </div>
				  </div>
				</div>
		 	</div>
		 </div>
		</div>

	</div>
  </div>

<?php 
get_footer();
?>