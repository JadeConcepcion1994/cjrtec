	
	<div class="row">
		<div class="col-md-12">
			<div class="row row-foot-c">
		 	<div class="col-md-6 col-foot-c">
		 		<div data-aos="fade-up" data-aos-delay="510">
		 		<h2 style="color: white">Get Your Free Qoute</h2>
		 		<p>
		 			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 			tempor incididunt ut labore et dolo
		 		</p>	
		 		</div>
		 	</div>
		 	<div class="col-md-6" style="padding: 100px 50px 100px 50px">
		 		<div class="row">
		 			<div class="col-md-6">
		 				<label>Moving From Zip Code *</label>
		 				<input type="text" name="" class="form-control">
		 			</div>
		 			<div class="col-md-6">
		 				<label>Moving To Zip Code *</label>
		 				<input type="text" name="" class="form-control">
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="col-md-6">
		 				<label>Moving Data *</label>
		 				<input type="date" name="" class="form-control">
		 			</div>
		 			<div class="col-md-6">
		 				<label>Number of Rooms *</label>
		 				<select class="form-control">
		 					<option selected disabled></option>
		 					<option>Option 1</option>
		 					<option>Option 2</option>
		 				</select>
		 			</div>
		 		</div>
		 		<div class="row" style="margin-bottom: 30px">
		 			<div class="col-md-6">
		 				<label>Name</label>
		 				<input type="text" name="" class="form-control">
		 			</div>
		 			<div class="col-md-6">
		 				<label>Phone</label>
		 				<input type="text" name="" class="form-control">
		 			</div>
		 		</div>
		 		<div class="row">
		 			<div class="col-md-12">
		 					<button class="btn btn-black form-control">Submit</button>	
		 			</div>
		 	
		 		</div>
		 	</div>
		 </div>



		</div>
	</div>
	
<div class="row">
	<div class="col-md-12">
		<footer class="footer text-center py-2 ">
		<div class="row">
			<div class="col-md-3 f-c-1">
				    <?php 
			          if(function_exists('the_custom_logo')){
			            $custom_logo_id = get_theme_mod('custom_logo');
			            $logo = wp_get_attachment_image_src($custom_logo_id);
			          }
			        ?>
				<img src="<?php echo $logo[0]?>" height="30px" width="30px" style="margin-bottom: 30px">

				<p style="margin-bottom: 40px">Licence Number: 123-456-7890</p>
				<small>© 2023 by Fly Right Movers. Proudly created with Wix.com</small>
			</div>
			<div class="col-md-3 f-c-2">
				<p style="margin-bottom: 30px">CONTACT</p>
				<p>
					<small>Phone:</small> <small>123-456-7890</small> <br>
					<small>Email:</small> <small>info@mysite.com</small>
				</p>

				<small>500 Terry Francois Street,<br> San Francisco, CA 94158</small>
			</div>
			<div class="col-md-3 f-c-3">
				<p style="margin-bottom: 30px">WORKING HOURS</p>
				<p align="center">
					<small>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					
					</small>
				</p>
			</div>
			<div class="col-md-3 f-c-4">
				<p style="margin-bottom: 30px">Resources</p>
				<small>Locations</small><br>
				<small>Tips</small><br>
				<small>FAQs</small><br>
				<small>Privacy & Terms</small>
			</div>
		</div>
<!-- 		<p class="copyright"><a href="#">CJRTEC</a></p> -->
  <button onclick="topFunction()"  id="myBtn" title="Go to top" ><i class="fa fa-chevron-up" aria-hidden="true"></i></button>
	</footer>

	</div>

</div>
	
	
<?php 
wp_footer();
?>


</body>
</html>