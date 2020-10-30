<?php
  /*
  Template Name: Accessories
  */
?>

<?php get_header(); ?>

<section id="accessories" class="my-5">
  <div class="container">
    
    <!-- Pull the content from WP -->
    <?php the_content(); ?>

    <div class="mb-5"></div>

    <!-- get items from CP Accessories CPT -->
    <div class="row mb-5">
      <?php 
        $args = array('post_type' => 'cp_accessories');
          $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_the_ID();
      ?>
      <div class="col-md-6 my-3"> 
        
        <div class="card h-100 aos-init aos-animate" data-aos="fade-up">
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