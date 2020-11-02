<?php
  /*
  Template Name: Videos
  */
?>

<?php get_header(); ?>

<section id="videos" class="my-5">
  <div class="container">
    
    <!-- Pull the content from WP -->
    <?php the_content(); ?>

    <!-- get items from CJRTEC Videos CPT -->
    <div class="row mb-5">
      <?php 
        $args = array('post_type' => 'cjrtec_videos');
          $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_the_ID();
      ?>
      <div class="col-lg-6 mb-5">
        <div class="card h-100 aos-init aos-animate" data-aos="fade-up">
          <div class="card-body">
            <div class="embed-container mb-3">
              <?php the_field('video_link'); ?>
            </div>
            
            <h5 class="card-title text-center"><?php the_title(); ?></h5>
            
            <p class="card-text">
              Category: 
                <?php 
                  $term = get_field('video_category'); 
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