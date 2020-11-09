
<div class="container">
	<div class="row">
		<div class="col-md-12" data-aos="fade-up" data-aos-delay="50">
			<h1 class="row-title-h1">
				<?php 
					if(get_theme_mod('cjrtec_cards_title_edit')){
						echo get_theme_mod('cjrtec_cards_title_edit');
					}else{
						echo "Our Bestsellers";
					}
				?>
			</h1>
		</div>
	</div>



	<!-- <div class="row">
		<div class="col-md-3">
			<div class="card">
				<img class="card-img-top" src="
				<?php 
				// if(wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image')) ){
				// 	echo wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image'));
				// }else{
				// 	echo get_template_directory_uri(). "/assets/img/Swingarm.png";
				// }
				?>
				" alt="Card image cap">
				<div class="card-body">
					<div data-aos="fade-up" data-aos-delay="50">
					<h5 class="card-title">
						<?php 
						// if(get_theme_mod('cjrtec_first_title_edit')){
						// echo get_theme_mod('cjrtec_first_title_edit'); 
						// }else{
						// echo "Swing Arm Press";
						// }
						

						?>
						</h5>
					<p class="card-text"><?php // echo get_theme_mod('cjrtec_first_paragraph_edit'); ?></p>
					<a href="<?php // echo get_theme_mod('cjrtec_first_link_edit');  ?>" class="btn btn-cjr"><strong><?php // echo get_theme_mod('cjrtec_first_link_title_edit'); ?></strong></a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
				<img class="card-img-top" src="
					<?php 
				// if(wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image')) ){
				// 	echo wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image'));
				// }else{
				// 	echo get_template_directory_uri(). "/assets/img/Beampress.png";
				// }
				?>

				" alt="Card image cap">
				<div class="card-body">
					<div  data-aos="fade-up" data-aos-delay="50">
					<h5 class="card-title">
						<?php
						// if(get_theme_mod('cjrtec_second_title_edit')){

						//  echo get_theme_mod('cjrtec_second_title_edit'); 
						// }else{
						//   echo "Beam Press";
						// }
						?>		
						</h5>
					<p class="card-text"><?php // echo get_theme_mod('cjrtec_second_paragraph_edit'); ?></p>
					<a href="<?php // echo get_theme_mod('cjrtec_first_link_edit');  ?>" class="btn btn-cjr"><strong><?php // echo get_theme_mod('cjrtec_second_link_title_edit'); ?></strong></a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
				<img class="card-img-top" src="
					<?php 
				// if(wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image')) ){
				// 	echo wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image'));
				// }else{
				// 	echo get_template_directory_uri(). "/assets/img/Travelhead.png";
				// }
				?>

				" alt="Card image cap">
				<div class="card-body">
					<div data-aos="fade-up" data-aos-delay="50">
					<h5 class="card-title">
						<?php 
						// if(get_theme_mod('cjrtec_third_title_edit')){
						// echo get_theme_mod('cjrtec_third_title_edit');
						// }else{
						// echo "Traveling Head Press";
						// }
						
							?>
						</h5>
					<p class="card-text"><?php // echo get_theme_mod('cjrtec_third_paragraph_edit'); ?></p>
					<a href="<?php // echo get_theme_mod('cjrtec_third_link_edit');  ?>" class="btn btn-cjr"><strong><?php // echo get_theme_mod('cjrtec_third_link_title_edit'); ?></strong></a>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-3">
			<div class="card">
				<img class="card-img-top" src="
					<?php 
				// if(wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image')) ){
				// 	echo wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image'));
				// }else{
				// 	echo get_template_directory_uri(). "/assets/img/Conveyor.png";
				// }
				?>
				" alt="Card image cap">
				<div class="card-body">
					<div  data-aos="fade-up" data-aos-delay="50">
					<h5 class="card-title">
						<?php 
						// if(get_theme_mod('cjrtec_fourth_title_edit')){
						// echo get_theme_mod('cjrtec_fourth_title_edit'); 
						// }else{
						// echo "Conveyor Press";
						// }
						
						?> 		
						</h5>
					<p class="card-text"><?php // echo get_theme_mod('cjrtec_fourth_paragraph_edit'); ?></p>
					<a href="<?php // echo get_theme_mod('cjrtec_fourth_link_edit');  ?>" class="btn btn-cjr"><strong><?php // echo get_theme_mod('cjrtec_fourth_link_title_edit'); ?></strong></a>
					</div>
				</div>
			</div>
		</div>
	</div> -->



	<div class="row mb-5">
		<div class="col-md-6 col-lg-3 my-3">
			<div class="card h-100">
				<img 
					class="card-img-top img-fluid" 
					src="
					<?php 
						if (wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_first_card_image'));
						} else {
							echo get_template_directory_uri(). "/assets/img/Swingarm.png";
						}
					?>" 
					alt="Card image cap"
				>
				<div class="card-body">
					<div class="aos-fade-up" data-aos="fade-up" data-aos-delay="50">
						<div class="bestseller-text">
							<h5 class="card-title">
								<?php 
									if (get_theme_mod('cjrtec_first_title_edit')) {
										echo get_theme_mod('cjrtec_first_title_edit'); 
									} else {
										echo "Swing Arm Press";
									}
								?>
							</h5>
							<p class="card-text mb-3">
								<?php 
									if (get_theme_mod('cjrtec_first_paragraph_edit')) {
										echo get_theme_mod('cjrtec_first_paragraph_edit'); 
									} else {
										echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque architecto culpa doloribus assumenda harum quo sequi enim aliquid facilis voluptatum.";
									}
								?>
							</p>
						</div>

						<div class="bestseller-cta">
							<a 
								href="<?php echo get_theme_mod('cjrtec_first_link_edit');  ?>" 
								class="btn btn-cjr"
							>
								<strong>
									<?php 
										if (get_theme_mod('cjrtec_first_link_title_edit')){
											echo get_theme_mod('cjrtec_first_link_title_edit'); 
										} else {
										echo "CTA Text Here";
										}
									?>
								</strong>
							</a>
						</div>
					</div><!-- aos -->
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- col-md-3 -->

		<div class="col-md-6 col-lg-3 my-3">
			<div class="card h-100">
				<img 
					class="card-img-top img-fluid" 
					src="
					<?php 
						if (wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_second_card_image'));
						} else {
							echo get_template_directory_uri(). "/assets/img/Beampress.png";
						}
					?>" 
					alt="Card image cap"
				>
				<div class="card-body">
					<div class="aos-fade-up" data-aos="fade-up" data-aos-delay="50">
						<div class="bestseller-text">
							<h5 class="card-title">
								<?php 
									if (get_theme_mod('cjrtec_second_title_edit')) {
										echo get_theme_mod('cjrtec_second_title_edit'); 
									} else {
										echo "Beam Press";
									}
								?>
							</h5>
							<p class="card-text mb-3">
								<?php 
									if (get_theme_mod('cjrtec_second_paragraph_edit')) {
										echo get_theme_mod('cjrtec_second_paragraph_edit'); 
									} else {
										echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum temporibus eligendi voluptate accusantium. Quo doloribus itaque exercitationem quis illo id minus eaque.";
									}
								?>
							</p>
						</div>

						<div class="bestseller-cta">
							<a 
								href="<?php echo get_theme_mod('cjrtec_second_link_edit');  ?>" 
								class="btn btn-cjr"
							>
								<strong>
									<?php 
										if (get_theme_mod('cjrtec_second_link_title_edit')){
											echo get_theme_mod('cjrtec_second_link_title_edit'); 
										} else {
										echo "CTA Text Here";
										}
									?>
								</strong>
							</a>
						</div>
					</div><!-- aos -->
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- col-md-3 -->

		<div class="col-md-6 col-lg-3 my-3">
			<div class="card h-100">
				<img 
					class="card-img-top img-fluid" 
					src="
					<?php 
						if (wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_third_card_image'));
						} else {
							
							echo get_template_directory_uri(). "/assets/img/Travelhead.png";
						}
					?>" 
					alt="Card image cap"
				>
				<div class="card-body">
					<div class="aos-fade-up" data-aos="fade-up" data-aos-delay="50">
						<div class="bestseller-text">
							<h5 class="card-title">
								<?php 
									if (get_theme_mod('cjrtec_third_title_edit')) {
										echo get_theme_mod('cjrtec_third_title_edit'); 
									} else {
										echo "Traveling Head Press";
									}
								?>
							</h5>
							<p class="card-text mb-3">
								<?php 
									if (get_theme_mod('cjrtec_third_paragraph_edit')) {
										echo get_theme_mod('cjrtec_third_paragraph_edit'); 
									} else {
										echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit reiciendis culpa et illum sequi dolores!";
									}
								?>
							</p>
						</div>

						<div class="bestseller-cta">
							<a 
								href="<?php echo get_theme_mod('cjrtec_third_link_edit');  ?>" 
								class="btn btn-cjr"
							>
								<strong>
									<?php 
										if (get_theme_mod('cjrtec_third_link_title_edit')){
											echo get_theme_mod('cjrtec_third_link_title_edit'); 
										} else {
										echo "CTA Text Here";
										}
									?>
								</strong>
							</a>
						</div>
					</div><!-- aos -->
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- col-md-3 -->

		<div class="col-md-6 col-lg-3 my-3">
			<div class="card h-100">
				<img 
					class="card-img-top img-fluid" 
					src="
					<?php 
						if (wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image')) ){
							echo wp_get_attachment_urL(get_theme_mod('cjrtec_fourth_card_image'));
						} else {
							echo get_template_directory_uri(). "/assets/img/Conveyor.png";
						}
					?>" 
					alt="Card image cap"
				>
				<div class="card-body">
					<div class="aos-fade-up" data-aos="fade-up" data-aos-delay="50">
						<div class="bestseller-text">
							<h5 class="card-title">
								<?php 
									if (get_theme_mod('cjrtec_fourth_title_edit')) {
										echo get_theme_mod('cjrtec_fourth_title_edit'); 
									} else {
										echo "Conveyor Press";
									}
								?>
							</h5>
							<p class="card-text mb-3">
								<?php 
									if (get_theme_mod('cjrtec_fourth_paragraph_edit')) {
										echo get_theme_mod('cjrtec_fourth_paragraph_edit'); 
									} else {
										echo "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad tempore laboriosam magni!"; 
									}
								?>
							</p>
						</div>

						<div class="bestseller-cta">
							<a 
								href="<?php echo get_theme_mod('cjrtec_fourth_link_edit');  ?>" 
								class="btn btn-cjr"
							>
								<strong>
									<?php 
										if (get_theme_mod('cjrtec_fourth_link_title_edit')){
											echo get_theme_mod('cjrtec_fourth_link_title_edit'); 
										} else {
										echo "CTA Text Here";
										}
									?>
								</strong>
							</a>
						</div>
					</div><!-- aos -->
				</div><!-- card-body -->
			</div><!-- card -->
		</div><!-- col-md-3 -->
	</div><!-- row -->
</div>