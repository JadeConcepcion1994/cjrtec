<?php
  /*
  Template Name: Types of Dies
  */
?>

<?php get_header(); ?>

<section id="types-of-dies">
  <div class="container">

    <?php the_content(); ?>

    <!-- carousel -->
    <div
      id="carousel-testimonials"
      class="carousel-testimonials carousel slide"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block"
            src="<?php bloginfo('template_directory'); ?>/assets/img/wesmar.png"
            alt="First slide"
          />

          <div class="testimonial-message">
            <p class="description">
              With CJR, you can find a nice assortment of top performing
              Clicker Presses at prices that are substantially cheaper than
              other brands.
            </p>
            <h3>Kim Gerhart - <span>Wesmar Leather Goods</span></h3>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block"
            src="<?php bloginfo('template_directory'); ?>/assets/img/us-duty-gear.png"
            alt="Second slide"
          />

          <div class="testimonial-message">
            <p class="description">
              Our company is enjoying the benefits of our CJR automatic
              cutting machine. It continuously improves our production and
              labor practices.
            </p>
            <h3>Jose Luis Flores - <span>US Duty Gear</span></h3>
          </div>
        </div>
        <div class="carousel-item">
          <img
            class="d-block"
            src="<?php bloginfo('template_directory'); ?>/assets/img/philly-rubber.png"
            alt="Third slide"
          />

          <div class="testimonial-message">
            <p class="description">
              While many factors always come into play in producing quality
              products, CJR has helped us achieve these kinds of results.
            </p>
            <h3>Jackie Hindman - <span>Philly Rubber</span></h3>
          </div>
        </div>

        <a
          class="carousel-control-prev"
          href="#carousel-testimonials"
          role="button"
          data-slide="prev"
        >
          <span class="orange"><i class="fa fa-chevron-left"></i></span>
        </a>

        <a
          class="carousel-control-next"
          href="#carousel-testimonials"
          role="button"
          data-slide="next"
        >
          <span class="orange"><i class="fa fa-chevron-right"></i></span>
        </a>
      </div>
    </div><!-- carousel -->
    
  </div>
</section>

<?php get_footer(); ?>