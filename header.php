<!DOCTYPE html>
<html>
<head>

<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device=width, initial-scale=1.0">
<meta name="description" content="CJRTEC Site Template">
<meta name="author" content=" https://www.linkedin.com/in/jade-concepcion-16b9b0186/">

<?php 
wp_head();
?>


</head>
<body>



  <div class="upper-content" id="content_top_fixed" align="center">
    <small>
      <?php
      if(get_theme_mod('cjrtec_address_content_edit')){
       echo get_theme_mod('cjrtec_address_content_edit');
      }else{
        echo '<i class="fa fa-map-marker" aria-hidden="true"></i> 7023 S 700 W Building B, Midvale UT 84047 USA         <i class="fa fa-phone" aria-hidden="true"></i>  800-733-2302    <i class="fa fa-clock-o" aria-hidden="true"></i>  09:00 - 05:00 Mountain Standard Time (MST)';
      }
      ?>  
      </small>
  </div>
<nav class="navbar navbar-expand-lg" id="navbar">
  <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
        <?php 
          if(function_exists('the_custom_logo')){
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
            
          }
          
        ?>
        <img src="<?php echo $logo[0]; ?>" alt="Logo" height="43px">
      </a>

  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarTogglerContent" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="icon-bar top-bar"></span>
  <span class="icon-bar middle-bar"></span>
  <span class="icon-bar bottom-bar"></span>       
</button>


<div class="collapse navbar-collapse hidden-md-upflex-last" id="navbarTogglerContent" >
  <?php 

    wp_nav_menu(

      array(
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
            if(get_theme_mod('cjrtec_free_quote_edit')){
               echo get_theme_mod('cjrtec_free_quote_edit');
             }else{
               echo "Free Quote";
             }
           
            ?>  
          </p>
      </div>

   </div>  
  </div>
</nav>


  <div class="main-wrapper"> 
        
      