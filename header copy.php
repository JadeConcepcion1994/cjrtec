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

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v8.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>

  <!-- Your Chat Plugin code -->
  <div 
    class="fb-customerchat" 
    attribution=setup_tool 
    page_id="388705728372709" 
    theme_color="#e96b20" 
    logged_in_greeting="Hi! How can we help you?" logged_out_greeting="Hi! How can we help you?"
  ></div>




  <div class="upper-content" id="content_top_fixed">
    <div class="container cnt-test">
      <div class="row">
        <div class="col-md-12">
           <small id="test-this">
            <i class="fa fa-map-marker" aria-hidden="true"></i> 7023 S 700 W Bldg B, Midvale, UT 84047   
            <strong style="margin-left: 10px; margin-right: 10px">|</strong>
             <i class="fa fa-phone" aria-hidden="true"></i>  + 1(800) 733-2302 / 09:00AM - 5:00PM MST  
           </small> 

           <div class="float-right-icons">
             <small>
                <a href="#"><i class="fa fa-facebook fb" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter tw" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-youtube yt" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin li" aria-hidden="true"></i></a>
                <strong style="margin-left: 10px; margin-right: 10px">|</strong>
                <i class="fa fa-search" aria-hidden="true"></i>
             </small>
           </div>
        </div>
      </div>
    </div>
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
        
      