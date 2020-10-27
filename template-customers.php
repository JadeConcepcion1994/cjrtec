<?php
  /*
  Template Name: Customers
  */
?>

<?php get_header(); ?>

<section id="customers">
  <div class="container">
    <h1 class="text-center">Customers Page Template</h1>

    <h2 class="text-center text-muted mb-4">
      From Small Businesses to Fortune 500 Companies
    </h2>

    <p class="text-center mb-5">Companies can say anything they want to get the sale, but if you really want to know about a company, ask to speak to their customers. We are proud to have presses with some of the largest manufacturers in the country. If you&apos;re concerned at all about our quality or after the sale service, please give us a call and we will let you speak with customers that have come to rely on our products.</p>

    <div class="row mb-5">
      <!-- get items from CJRTEC Customers CPT -->
      <?php 
        $args = array('post_type' => 'cjrtec_customers');
          $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_the_ID();
      ?>

      <div class="col-md-6 my-3">
        <div class="card h-100 aos-init aos-animate" data-aos="fade-up">
          <img class="img-fluid" src="<?php echo the_field('image', $post); ?>" alt="card image">
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