<?php
  /*
  Template Name: Customer Tests
  */
?>

<?php get_header(); ?>

<section id="customer-tests">
  <div class="container">
    <h1 class="text-center">Customer Test Cutting</h1>

    <div class="row mb-5">
      <?php 
        $args = array('post_type' => 'cjrtec_cust_tests');
        $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
        <?php 
          while ( $the_query->have_posts() ) :
            $the_query->the_post();
            $post = get_the_ID();
        ?>

        <div class="col-lg-6 mb-5">
          <div class="aos-init aos-animate" data-aos="fade-up"> 
            <div class="embed-container">
              <?php the_field('customer_test_link'); ?>
            </div>

            <h5 class="text-center mt-3">
              <?php the_field('customer_test_title'); ?>
            </h5>
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