<?php
  /*
  Template Name: Videos
  */
?>

<?php get_header(); ?>

<div class="container">
  <h1 class="mb-5"><?php the_title(); ?></h1>

  <div class="row">
    
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
      <div class="card">
        <div class="card-body">
          
          <h5 class="card-title"><?php the_title(); ?></h5>
          
          <p class="card-text">
            Category: 
              <?php 
                $term = get_field('video_category'); 
                if ($term) {
                  echo esc_html($term->name);
                }
              ?>
          </p>
          <div class="embed-container">
            <?php the_field('video_link'); ?>
          </div>
        </div>
      </div>

      <style>
        .embed-container { 
          position: relative; 
          padding-bottom: 56.25%;
          overflow: hidden;
          max-width: 100%;
          height: auto;
        } 

        .embed-container iframe,
        .embed-container object,
        .embed-container embed { 
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
      </style>
    </div>
    <?php endwhile; ?>
    
    <?php wp_reset_query(); ?> 

    <?php else : ?>
      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
    
  </div>
</div>

<?php get_footer(); ?>