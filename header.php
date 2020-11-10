<!DOCTYPE html>
<html>
<head>

<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device=width, initial-scale=1.0">
<meta name="description" content="CJRTEC Site Template">
<meta name="author" content=" https://www.linkedin.com/in/jade-concepcion-16b9b0186/">

<?php wp_head(); ?>

</head>
<body>

<div class="upper-content" id="content_top_fixed">
  <!-- <div class="container cnt-test"> -->
  <div class="container">
    <div class="row">

      <div class="col">

        <div class="upper-content-left" id="test-this">
          <i class="fa fa-map-marker" aria-hidden="true"></i> 7023 S 700 W Bldg B, Midvale, UT 84047   
          <strong style="margin-left: 10px; margin-right: 10px">|</strong>
          <i class="fa fa-phone" aria-hidden="true"></i>  + 1(800) 733-2302 / 09:00AM - 5:00PM MST  
        </div> 

        <div class="upper-content-right float-right-icons">
          <div>
            <a href="#"><i class="fa fa-facebook fb" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter tw" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube yt" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin li" aria-hidden="true"></i></a>
            <!-- <strong style="margin-left: 10px; margin-right: 10px">|</strong>
            <i class="fa fa-search" aria-hidden="true"></i> -->
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg" id="navbar">
  <!-- <div class="container-fluid"> -->
  <!-- <div class="container"> -->
    <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
      <?php 
        if(function_exists('the_custom_logo')){
          $custom_logo_id = get_theme_mod('custom_logo');
          $logo = wp_get_attachment_image_src($custom_logo_id); 
        }
      ?>
      <!-- <img src="<?php // echo $logo[0]; ?>" alt="Logo" height="43px"> -->
      <img src="<?php echo $logo[0]; ?>" alt="Logo">
    </a>

    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerContent" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>       
    </button>


    <div class="collapse navbar-collapse hidden-md-upflex-last" id="navbarTogglerContent" >
      <?php 
        wp_nav_menu(array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'menu_class' => 'navbar-nav mx-auto',
            'walker' => new Bootstrap_Walker_Nav_Menu(),
            'list_item_class'  => 'nav-item',
            'link_class'   => 'nav-link',
            'current_menu_item' => 'active', 
          )
        );
      ?>

      <div class="my-2 my-lg-0">
        <p class="free-quote" align="center">
          <?php 
          if (get_theme_mod('cjrtec_free_quote_edit')){
              echo get_theme_mod('cjrtec_free_quote_edit');
            } else {
              echo "Register Now";
            }
          ?>  
        </p>
      </div>

    </div>  
  <!-- </div> -->
</nav>


<div class="main-wrapper"> 
        
      