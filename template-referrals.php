<?php
  /*
  Template Name: Referrals
  */
?>

<?php get_header(); ?>

<section id="referrals">
  <div class="container">
    <h1 class="text-center">
      Refer Us By Telling Your CJR Experience
    </h1>

    <div class="row d-flex justify-content-center align-items-center mb-5">
      <div class="col-md-6">
        <img class="img-fluid d-block mx-auto mb-5" src="<?php echo get_template_directory_uri(); ?>/assets/img/referrals.png" alt="Referrals">
      </div>

      <div class="col-md-6">
        <p>Our greatest asset is our customers. We work hard to cultivate the kind of relationship that warrants their referral. A sales person will always tell you want you want to hear, but customers are the only real testament to a company&apos;s integrity. And to those who become our customers, we encourage you to remember what it was like when you were looking to buy and were anxious for other&apos;s generous time. We promise not to abuse the gesture, but to those who ask, we appreciate your honest opinion.</p>

        <a href="<?php echo site_url(); ?>/testimonials">
          See customer reviews and testimonials 
          <i class="fa fa-chevron-right"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>