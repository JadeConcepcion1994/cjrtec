<?php
  /*
  Template Name: Clicker Press Parts
  */
?>

<?php get_header(); ?>

<section id="cp-parts">
  <div class="container">
    
    <h1>Clicker Press Parts</h1>

    <p><em><strong>You deserve to have a relationship with a solution-driven provider</strong></em></p>

    <p>Think about a time when your production was at its highest and everyone was working hard to meet demand. Your business was productive and your customers were happy. Now, consider how differently things could have been if a key piece of equipment had gone down, you needed to get back up and running, but parts were not immediately available.</p>

    <p>This could be an ongoing reality if you innocently trust your operation to providers that aren’t committed to helping you succeed. Continued and consistent growth depends upon the trust built between you and your manufacturers and suppliers.</p>

    <p>We understand how important having this type of relationship is and we work hard to earn your trust and we aim to be a part of the solution for every one of our customers. Simply put, we want you to feel that we will be there when you need us.</p>

    <p><em><strong> Avoid making an expensive mistake</strong></em></p>

    <p>Equipment failure is never convenient for anyone. Few are the times when someone can foresee when a machine will go down. However, the vision becomes very clear when a machine does fail, noticing that every hour of down-time is costly – and if you purchased a used piece of equipment in order to save some money, you may now see that the savings just wasn’t worth it.</p>

    <p>As much as 70&percnt; of the clicker presses available in the second-hand market are no longer being manufactured and neither are their replacement parts. This means that if a used, out-of-date machine goes down and/or you need a part replaced, you may be left with a large piece of steel that’s never going to work. This could be an expensive mistake.</p>

    <p><em><strong>The Only Clicker Press Manufacturer in America</strong></em></p>

    <p>There are, of course, some good second-hand presses out there. You just need to be more careful as you check out the vendor and the machine. A good way to avoid a potential problem is to deal with providers that give warranty for their products. At CJRTec, we offer a 12-month full warranty on all of our presses. We even offer extended warranties for as long as five years.</p>

    <p class="mb-4">The bottom line is, CJRTec is the only clicker press manufacturer in America – which means we can get parts and service to you far quicker than any other company and you can be back up and running right away, should something unexpected happen.</p>

    <ul class="mb-4">
      <li>
        <a href="<?php echo site_url(); ?>/accessories">
          View Our Press Accessories Here <i class="fa fa-chevron-right"></i>
        </a>
      </li>  
      <li>
        <a href="<?php echo site_url(); ?>/used-clicker-press">
          Learn About Used Presses <i class="fa fa-chevron-right"></i>
        </a>
      </li>
      <li>
        <a href="<?php echo site_url(); ?>/warranty">
          Read Our Warranty Policy <i class="fa fa-chevron-right"></i>
        </a>
      </li>
    </ul>

    <!-- get items from CP Parts CPT -->
    <div class="row mb-5">
      <?php 
        $args = array('post_type' => 'cp_parts');
          $the_query = new WP_Query( $args );
      ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php 
        while ( $the_query->have_posts() ) : $the_query->the_post();
          $post = get_the_ID();
      ?>

      <div class="col-sm-6 col-lg-3 my-3">
        <div class="card h-100 aos-init aos-animate" data-aos="fade-up">
          <div class="card-body">
            <div class="card-heading">
              <img class="mb-3" src="<?php echo the_field('image', $post); ?>" alt="image">
              
              <h5 class="card-title">
                <?php the_title(); ?>
              </h5>
            </div>

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
            </div>
          </div>

          <a href="#login" class="card-cta btn btn-success">View Price</a>
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
