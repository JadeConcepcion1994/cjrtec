
<?php 
get_header();
?>
   <header class="page-title">
          <h1 class="heading"><?php the_title(); ?></h1>
   </header>


  <p>
  	
  <?php 
  while( have_posts() ) : the_post();
  the_content(); 
  endwhile;
  ?>
  	
  </p>

  </div>


 

<?php 
get_footer();
?>