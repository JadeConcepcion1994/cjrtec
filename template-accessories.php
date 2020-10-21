<?php
  /*
  Template Name: Accessories
  */
?>

<?php get_header(); ?>

<section id="accessories">
  <div class="container">

    <h1>Clicker Press Accessories</h1>

    <p>Our presses do amazing things all on their own – but there are many time-saving accessories and supportive equipment that can make a job go faster and more smoothly.</p>

    <p>We invite you to take a look at the products below – they represent some of the solutions that we’ve provided for previous customers. Most of this equipment has been designed and built by our engineers to meet unique customer needs.</p>

    <p>Just tell us what you’d like your press to do and we’ll get to work providing you with possible solutions.</p>
    
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