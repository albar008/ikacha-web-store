<?php
get_header();
while (have_posts()) {
  the_post();
  $contact_header_img = get_theme_mod('set_contact_header_image');
  $contact_header_img_url = wp_get_attachment_image_url($contact_header_img, 'mamak_slider_image');
  $contact_header_img_alt = get_post_meta($contact_header_img, '_wp_attachment_image_alt', true);
  ?>
  <!-- start page title -->
  <section
    class="page-title-big-typography bg-dark-gray xs-py-0 cover-background background-position-center-top"
    style="background-image: url('<?php if ($contact_header_img_url) {
      echo $contact_header_img_url;
    } else {
      echo 'https://placehold.co/1920x1100';
    } ?>')">
    <div class="opacity-extra-medium bg-gradient-black-green"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center small-screen">
        <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
          data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
          <div>
            <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
              data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_theme_mod('set_contact_header_subtitle'); ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
            </h1>
          </div>
          <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100"
            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_theme_mod('set_contact_header_title'); ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
          </h2>
        </div>
        <?php if (false) { ?>
          <!-- <div class="down-section text-center"
          data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <a href="#down-section" class="section-link">
            <div class="text-white">
              <i class="line-icon-Down icon-medium"></i>
            </div>
          </a>
        </div> -->
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- end page title -->
  <!-- start section -->
  <section class="bg-very-light-gray">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center"
        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
        <!-- start features box item -->
        <div class="col icon-with-text-style-04 sm-mb-40px">
          <div class="feature-box last-paragraph-no-margin">
            <div class="feature-box-icon">
              <i class="line-icon-Geo2-Love icon-extra-large text-base-color mb-25px"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">Our office</span>
              <p><?php the_field('comp_address', 'option'); ?></p>
            </div>
          </div>
        </div>
        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col icon-with-text-style-04 sm-mb-40px">
          <div class="feature-box last-paragraph-no-margin">
            <div class="feature-box-icon">
              <i class="line-icon-Headset icon-extra-large text-base-color mb-25px"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">Call us directly</span>
              <div class="w-100 d-block">
                <?php if (get_field('comp_phone_number', 'option')) { ?>
                  <span class="d-block">Phone 1: <a href="tel:<?php the_field('comp_phone_number', 'option'); ?>"
                      class="text-base-color-hover"><?php the_field('comp_phone_number', 'option'); ?></a></span>
                <?php } ?>
                <?php if (get_field('comp_phone_number_2', 'option')) { ?>
                  <span class="d-block">Phone 2: <a href="tel:<?php the_field('comp_phone_number_2', 'option'); ?>"
                      class="text-base-color-hover"><?php the_field('comp_phone_number_2', 'option'); ?></a></span>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end features box item -->
        <!-- start features box item -->
        <div class="col icon-with-text-style-04">
          <div class="feature-box last-paragraph-no-margin">
            <div class="feature-box-icon">
              <i class="line-icon-Mail-Read icon-extra-large text-base-color mb-25px"></i>
            </div>
            <div class="feature-box-content last-paragraph-no-margin">
              <span class="d-inline-block alt-font fw-600 text-dark-gray mb-5px fs-20">E-mail us</span>
              <div class="w-100 d-block">
                <?php if (get_field('comp_email', 'option')) { ?>
                  <a href="mailto:<?php the_field('comp_email', 'option'); ?>"
                    class="d-block text-base-color-hover"><?php the_field('comp_email', 'option'); ?></a>
                <?php } ?>
                <?php if (get_field('comp_email_2', 'option')) { ?>
                  <a href="mailto:<?php the_field('comp_email_2', 'option'); ?>"
                    class="d-block text-base-color-hover"><?php the_field('comp_email_2', 'option'); ?></a>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end features box item -->
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section>
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-dark-gray ls-1px">Feel free to get in
            touch!</span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">How we can help you?</h3>
        </div>
      </div>
      <div class="row row-cols-md-1 justify-content-center">
        <div class="col-xl-9 overflow-hidden">
          <?php echo do_shortcode('[contact-form-7 id="0c25f0f" title="Contact"]') ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="p-0 bg-dark-slate-blue" id="location"
    data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 p-0">
          <iframe
            src="https://maps.google.com/maps?q=<?php the_field('comp_lat', 'option') ?>,<?php the_field('comp_long', 'option') ?>&z=15&output=embed"
            width="100%" height="500" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer(); ?>