<?php
  /*
  Template Name: Accessories
  */
?>

<?php get_header(); ?>

<div class="container">
  <h1><?php the_title(); ?></h1>

  <div class="row">
    
    <?php 
      $args = array('post_type' => 'cp_accessories');
        $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
    <?php 
      while ( $the_query->have_posts() ) : $the_query->the_post();
        $post = get_the_ID();
    ?>
    <div class="col-lg-6">
      <h4><?php the_title(); ?></h4>
      
      <p>Model: <?php echo the_field('model_number', $post) ?></p>
      <p>Description: <?php echo the_field('description', $post) ?></p>
      
      <!-- SHOW ALL CATEGORIES -->
      <p>
        Type: 
        <?php 
          $term = get_field('category_group'); 
          if ($term) {  
           
              echo esc_html($term->name); 
           
          }
        ?>
      </p>

      <img style="width: 50%; " src="<?php echo the_field('image', $post); ?>" alt="image">
    </div>
    <?php endwhile; ?>
    
    <?php wp_reset_query(); ?> 

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
  </div>
</div>

<?php get_footer(); ?>