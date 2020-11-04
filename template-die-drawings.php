<?php
  /*
  Template Name: Die Drawings
  */
?>

<?php get_header(); ?>

<section id="die-drawings">
  <div class="container">

    <?php the_content(); ?>

  </div>

  <div class="clicker-die-samples mb-5">
    <div class="container">

      <div class="row mt-4">
        <div class="col-md-6 col-lg-4 mb-3">
          <a href="#beam-press">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/die-big-3-2.jpg" alt="Beam Clicker Press Die">
            <h4 class="mt-2 text-center">Beam Clicker Press Die</h4>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
          <a href="#receding-beam-press">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/die-big-4-2.jpg" alt="Receding Head Press Die">
            <h4 class="mt-2 text-center">Receding Head Press Die</h4>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
          <a href="#conveyor-press">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/die-big-13-1.jpg" alt="Clicker Die for Conveyor Beam Press">
            <h4 class="mt-2 text-center">Clicker Die for Conveyor Beam Press</h4>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
          <a href="#swing-arm-press">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/die-big-16-2.jpg" alt="Leather Clicker Die for Swing Arm Press">
            <h4 class="mt-2 text-center">Leather Clicker Die for Swing Arm Press</h4>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
          <a href="#swing-arm-press">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/die-big-16-1.jpg" alt="Leather Goods Cut with Swing Arm Clicker Die">
            <h4 class="mt-2 text-center">Leather Goods Cut with Swing Arm Clicker Die</h4>
          </a>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
          <a href="#traveling-head-press">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/diecut-puzzle-pieces.jpg" alt="Puzzle Pieces Die for Travel Head Press">
            <h4 class="mt-2 text-center">Puzzle Pieces Die for Travel Head Press</h4>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="cta-strip">
    <div class="container">
      <h2>Create an Account with CJRTec Now</h2>
      <a href="#" class="btn-cta-strip"
        >Get Started Today <i class="fa fa-angle-right"></i
      ></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>