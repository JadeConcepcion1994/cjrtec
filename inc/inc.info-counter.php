<section id="info-counter">
  <div class="row row-numbers">
    <div class="col-sm-6 col-lg-3 my-3" data-aos="fade-up" data-aos-delay="50">
      <h2 class="Count">
        <?php
          if (get_theme_mod('info_counter_years_edit')) {
            echo get_theme_mod('info_counter_years_edit');
          } else {
            echo "19";
          }
        ?>
      </h2>
      <h5 class="h5-number-title">
        <strong>YEARS OF EXPERIENCE</strong>
      </h5>
    </div>

    <div class="col-sm-6 col-lg-3 my-3" data-aos="fade-up" data-aos-delay="50">
      <h2 class="Count">
        <?php
          if (get_theme_mod('info_counter_projects_edit')) {
            echo get_theme_mod('info_counter_projects_edit');
          } else {
            echo "966";
          }
        ?>
      </h2>
      <h5 class="h5-number-title">
        <strong>SUCCESSFUL PROJECTS</strong>
      </h5>
    </div>
    
    <div class="col-sm-6 col-lg-3 my-3" data-aos="fade-up" data-aos-delay="50">
      <h2 class="Count">
        <?php
          if (get_theme_mod('info_counter_professionals_edit')) {
            echo get_theme_mod('info_counter_professionals_edit');
          } else {
            echo "64";
          }
        ?>
      </h2>
      <h5 class="h5-number-title">
        <strong>PROFESSIONAL EXPERTS</strong>
      </h5>
    </div>

    <div class="col-sm-6 col-lg-3 my-3" data-aos="fade-up" data-aos-delay="50">
      <h2 class="Count">
        <?php
          if (get_theme_mod('info_counter_customers_edit')) {
            echo get_theme_mod('info_counter_customers_edit');
          } else {
            echo "193";
          }
        ?>
      </h2>
      <h5 class="h5-number-title">
        <strong>HAPPY CUSTOMERS</strong>
      </h5>
    </div>
  </div>
</section>