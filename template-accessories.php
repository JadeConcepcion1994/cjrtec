<?php
  /*
  Template Name: Accessories
  */
?>

<?php get_header(); ?>

<section id="accessories">
  <div class="container">
    <h1 class="my-4"><?php the_title(); ?></h1>
    <div class="mb-5"><?php the_content(); ?></div>
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
      <div class="col-md-6 col-lg-4 mb-4"> 
        
      
        <div class="card h-100">
          <img class="card-img-top" src="<?php echo the_field('image', $post); ?>" alt="card image">
          <div class="card-body">
            <h5 class="card-title">
              <?php the_title(); ?>
            </h5>
            <p class="card-text">
              Model: <?php echo the_field('model_number', $post) ?> <br>
              Description: <?php echo the_field('description', $post) ?> <br>
              Type: 
                <?php 
                  $term = get_field('category_group'); 
                  if ($term) {
                    echo esc_html($term->name);
                  }
                ?>
            </p>
          </div>
        </div>


      </div>
      <?php endwhile; ?>
      
      <?php wp_reset_query(); ?> 

      <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>