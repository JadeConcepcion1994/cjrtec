<?php
  /*
  Template Name: Testimonials
  */
?>

<?php get_header(); ?>

<section id="testimonials">
  <div class="container">
    <h1 class="text-center">Customer Reviews and Testimonials</h1>

    <h4 class="text-center mb-5 text-muted">
      Our customers are our biggest assets. Take a look at what they say about our machines and services.
    </h4>

    <div class="banner-testimonial mb-5">
      <div class="card aos-init aos-animate" data-aos="fade-up">
        <div class="img-container">
          <img class="img-fluid" src="<?php echo site_url(); ?>/wp-content/uploads/2020/10/the-oakwood-group.png" alt="the oakwood group">
        </div>

        <div class="card-body">
          <p class="card-text text-center">
            We've been using CJR Clicker Press since 2014, and I have to say that it has transformed the way we do business. It is certainly a cost-effective solution that doubled our company's production.
          </p>

          <h5 class="card-text text-right client-name">
            Joel Cormier
          </h5>
          
          <h6 class="card-text text-right client-company">
            The Oakwood Group
          </h6>
        </div>
      </div>
    </div>

    <h2 class="text-center mb-4">
      Read what CJR Customers are saying about our <em>Clicker Presses</em>:
    </h2>

    <div class="row mb-5">

      <?php 
        $args = array('post_type' => 'cjrtec_testimonials');
          $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_the_ID();
      ?>

      <div class="col-md-6 col-lg-4 my-3">
        <div class="card h-100 aos-init aos-animate" data-aos="fade-up">
          <div class="img-container">
            <img class="img-fluid" src="<?php the_field('company_logo');; ?>" alt="<?php the_field('company_name'); ?>">
          </div>

          <div class="card-body">
            <p class="card-text text-center">
              <?php the_field('client_testimonial'); ?>
            </p>

            <h5 class="card-text text-right client-name">
              <?php the_field('client_name'); ?>
            </h5>
            
            <h6 class="card-text text-right client-company">
              <?php the_field('company_name'); ?>
            </h6>
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