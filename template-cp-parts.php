<?php
  /*
  Template Name: Clicker Press Parts
  */
?>

<?php get_header(); ?>

<section id="cp-parts">
  <div class="container">
    <!-- <h1><?php // the_title(); ?></h1> -->
    <?php the_content(); ?>

    <div class="row">

      <?php 
        $args = array('post_type' => 'cp_parts');
          $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_the_ID();
      ?>


      <div class="col-md-6 col-lg-3 my-3">

        <div class="card h-100 aos-init aos-animate" data-aos="fade-up">
          
          <div class="card-body">
            <img src="<?php echo the_field('image', $post); ?>" alt="image">
            <h5 class="card-title">
              <?php the_title(); ?>
            </h5>
            <div class="card-text">
              <div class="card-text-item">
                Item#: <?php echo the_field('item_number', $post) ?>
              </div>
              <div class="card-text-features">
                <!-- LOOP THROUGH FEATURES -->
                <?php if( have_rows('features') ): ?>
                  <?php while( have_rows('features') ): the_row(); 

                    // Get sub field values.
                    $feature_1 = get_sub_field('feature_1');
                    $feature_2 = get_sub_field('feature_2');
                    $feature_3 = get_sub_field('feature_3');
                    $feature_4 = get_sub_field('feature_4');
                    $feature_5 = get_sub_field('feature_5');
                    
                    ?>
                    
                    <!-- Display field values. -->
                    <ul>
                      <li><?php echo $feature_1; ?></li>
                      <li><?php echo $feature_2; ?></li>
                      <li><?php echo $feature_3; ?></li>
                      <li><?php echo $feature_4; ?></li>
                      <li><?php echo $feature_5; ?></li>
                    </ul>
                      
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <div class="card-text-category">
                Category:
                <?php 
                  $term = get_field('category_group'); 
                  if ($term) {
                    echo esc_html($term->name);
                  }
                ?>
              </div>
              
              <a href="#login" class="card-text-cta btn btn-success">View Price</a>
              
            </div>
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
