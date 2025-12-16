<?php
get_header();
while (have_posts()) {
  the_post();
  ?>
  <!-- start banner -->
  <?php
  $hero_image = get_field('home_header_img');
  $cta_btn_field = get_field('home_cta_link');
  $cta_btn_link = get_permalink($cta_btn_field);
  ?>
  <section id="home" class="full-screen bg-dark-gray ipad-top-space-margin position-relative md-h-600px sm-h-500px py-0"
    data-parallax-background-ratio="0.5"
    style="background-image: url('<?php echo $hero_image ? $hero_image['sizes']['mamak_slider_image'] : 'https://placehold.co/1920x1100' ?>')">
    <div class="opacity-extra-medium bg-gradient-black-green"></div>
    <div class="container h-100">
      <div class="row align-items-center justify-content-center h-100">
        <div class="col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
          data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
          <div>
            <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
              data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_field('home_header_subtitle') ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
            </h1>
          </div>
          <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 mb-45px sm-mb-30px xs-mb-20px"
            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_field('home_header_title') ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
          </h2>
          <div>
            <a href="<?php echo $cta_btn_link ?>" target="_blank"
              class="btn btn-large btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow me-20px xs-m-10px">
              <span>
                <span class="btn-text fw-700"><?php echo get_field('home_cta_text') ?></span>
                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
              </span>
            </a>
          </div>
        </div>
        <div class="text-center position-absolute left-0px bottom-50px md-bottom-30px w-100 animation-float">
          <a href="#about" class="d-block text-white section-link">
            <i class="bi bi-mouse icon-extra-medium lh-0px"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end banner -->
  <!-- start section -->
  <?php
  $about_page_data = get_page_by_path('about');
  $about_sec_image = get_field('about_sec_image', $about_page_data->ID);
  $ext_vid_url = get_field('comp_profile_video_url', $about_page_data->ID);
  ?>
  <section id="about" class="background-position-center-top sm-background-image-none"
    style="background-image: url('<?php echo get_theme_file_uri('assets/images/vertical-line-bg.svg') ?>')">
    <div class="container">
      <div class="row align-items-center justify-content-center mb-8 xs-mb-50px">
        <div class="col-lg-6 col-md-10 position-relative md-mb-50px sm-mb-30px"
          data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <!-- start popup video -->
          <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
            <img
              src="<?php echo $about_sec_image ? $about_sec_image['sizes']['mamak_about_image'] : 'https://placehold.co/800x770' ?>"
              class="w-100 border-radius-6px" alt="<?php echo $about_sec_image['alt'] ?>">
            <?php if ($ext_vid_url) { ?>
              <a href="<?php echo $ext_vid_url ?>"
                class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                <span>
                  <span class="video-icon bg-white">
                    <i class="fa-solid fa-play text-dark-gray"></i>
                    <span class="video-icon-sonar">
                      <span class="video-icon-sonar-bfr border border-color-white"></span>
                    </span>
                  </span>
                </span>
              </a>
            <?php } ?>
          </figure>
          <!-- end popup video -->
        </div>
        <div class="col-xl-4 offset-lg-1 col-lg-5 col-md-10 text-center text-lg-start"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span
            class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-dark-gray ls-1px"><?php echo get_field('about_sec_subtitle', $about_page_data->ID) ?></span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">
            <?php echo get_field('about_sec_title', $about_page_data->ID) ?>
          </h3>
          <p class="mb-35px sm-mb-25px">
            <?php echo wp_trim_words(wp_strip_all_tags(strip_shortcodes($about_page_data->post_content)), 30); ?>
          </p>
          <a href="<?php echo esc_url(site_url('about')) ?>"
            class="btn btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow">
            <span>
              <span class="btn-text"><?php echo get_field('about_sec_text_detail_btn', $about_page_data->ID) ?></span>
              <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
              <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="bg-very-light-gray">
    <div class="container overlap-gap-section">
      <div class="row justify-content-center align-items-center mb-6">
        <div class="col-lg-7 text-center"
          data-anime='{ "el": "childs", "translateY": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
          <span class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-dark-gray ls-1px">Professional
            services</span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">Our expertise.</h3>
        </div>
      </div>
      <div class="row-grid gap-half-4 transition-inner-all justify-content-center"
        data-anime='{ "el": "childs", "translateY": [20, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <?php
        $serviceArgs = [
          'post_type' => 'service',
          'posts_per_page' => 10,
          'orderby' => 'menu_order',
          'order' => 'ASC',
        ];
        $services = new WP_Query($serviceArgs);
        if ($services->have_posts()) {
          while ($services->have_posts()) {
            $services->the_post();
            $service_image = get_field('srv_content_img');
            ?>
            <!-- start fancy text box item -->
            <div class="col-grid">
              <div class="services-box-style-01 hover-box box-shadow-quadruple-large"">
                <div class="position-relative box-image border-radius-6px overflow-hidden">
                  <a href="#popup-modal-<?php the_ID() ?>" class="modal-popup">
                    <img
                      src="<?php echo $service_image ? $service_image['sizes']['mamak_service_image'] : 'https://placehold.co/755x510' ?>"
                      alt="<?php echo $service_image['alt'] ?>">
                    <div class="box-overlay bg-black-transparent-medium"></div>
                    <span
                      class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-65px h-65px rounded-circle border border-color-transparent-white border-1"><i
                        class="bi bi-arrow-right-short text-white icon-very-medium d-flex"></i></span>
                  </a>
                </div>
                <div class="p-25px last-paragraph-no-margin text-center">
                  <h5 class="fs-20 text-dark-gray alt-font fw-600 mb-5px"><?php the_title() ?></h5>
                  <p class="lh-26"><?php echo wp_trim_words(get_field('srv_content'), 5, '...'); ?></p>
                </div>
                <div id="popup-modal-<?php the_ID() ?>"
                  class="white-popup-block mfp-hide col-xl-5 col-lg-6 col-md-7 col-11 mx-auto bg-white text-center modal-popup-main p-50px">
                  <span class="text-dark-gray fw-600 fs-24 mb-10px d-block"><?php the_title() ?></span>
                  <p><?php echo get_field('srv_content') ?></p>
                  <a class="btn btn-small btn-rounded btn-dark-gray popup-modal-dismiss mt-10px" href="#">Dismiss</a>
                </div>
              </div>
            </div>
            <!-- end fancy text box item -->
          <?php }
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <?php
  $upcoming_product = wc_get_product(get_field('upcoming_selected_product'));
  if ($upcoming_product) {
    $ev_start_date = get_field('prod_ev_start_date', $upcoming_product->get_id());
    $ev_end_date = get_field('prod_ev_end_date', $upcoming_product->get_id());
    $upcoming_product_image_url = wp_get_attachment_image_url($upcoming_product->get_image_id(), 'woocommerce_gallery_full_size');
    ?>
    <section class="background-position-center-top overflow-hidden position-relative sm-background-image-none"
      style="background-image: url('<?php echo get_theme_file_uri('assets/images/vertical-line-bg.svg') ?>')">
      <div id="particles-style-03" class="h-100 position-absolute left-0px top-0 w-100" data-particle="true"
        data-particle-options='{"particles": {"number": {"value": 20,"density": {"enable": true,"value_area": 2000}},"color": {"value": ["#8f76f5", "#a65cef", "#c74ad2", "#e754a4", "#ff6472"]},"shape": {"type": "circle","stroke":{"width":0,"color":"#000000"}},"opacity": {"value": 0.4,"random": false,"anim": {"enable": false,"speed": 1,"sync": false}},"size": {"value": 10,"random": true,"anim": {"enable": false,"sync": true}},"line_linked":{"enable":false,"distance":0,"color":"#ffffff","opacity":0.4,"width":1},"move": {"enable": true,"speed":1,"direction": "right","random": false,"straight": false}},"interactivity": {"detect_on": "canvas","events": {"onhover": {"enable": false,"mode": "repulse"},"onclick": {"enable": false,"mode": "push"},"resize": true}},"retina_detect": false}'>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-center mb-7">
          <div class="col-lg-5 md-mb-50px"
            data-anime='{ "el": "childs", "translateY": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue":200, "easing": "easeOutQuad" }'>
            <span class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-dark-gray ls-1px">Upcoming Event</span>
            <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px"><?php echo $upcoming_product->get_name() ?></h3>
            <div class="mt-50px mb-50px sm-mt-40px sm-mb-40px">
              <p class="mb-35px sm-mb-25px">
                <?php echo wp_trim_words(wp_strip_all_tags(strip_shortcodes($upcoming_product->get_short_description())), 30); ?>
              </p>
              <?php if ($ev_start_date) { ?>
                <?php get_template_part('template-parts/partials/content', 'ev-schedule', ['ev_start_date' => $ev_start_date, 'ev_end_date' => $ev_end_date]) ?>
              <?php } ?>
              <span class="upcoming-ev-price d-block mb-3"><?php echo $upcoming_product->get_price_html() ?></span>
              <a href="<?php echo esc_url($upcoming_product->get_permalink()) ?>"
                class="btn btn-gradient-emerald-blue-emerald-green btn-hover-animation-switch btn-round-edge btn-box-shadow">
                <span>
                  <span class="btn-text">Get Ticket Now!</span>
                  <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                  <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                </span>
              </a>
            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 position-relative"
            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start popup video https://placehold.co/800x786 -->
            <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
              <img src="<?php echo $upcoming_product_image_url ?>" class="w-100 border-radius-6px" alt="">
              <!-- <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                class="absolute-middle-center text-center rounded-circle video-icon-box video-icon-large popup-vimeo">
                <span>
                  <span class="video-icon bg-white">
                    <i class="fa-solid fa-play text-dark-gray"></i>
                    <span class="video-icon-sonar">
                      <span class="video-icon-sonar-bfr border border-color-white"></span>
                    </span>
                  </span>
                </span>
              </a> -->
              <!-- <figcaption
                class="position-absolute text-center border-radius-5px right-25px bottom-25px ps-30px pe-30px blur-box bg-white-transparent">
                <h1 class="mx-auto mb-0 fw-700 alt-font text-dark-gray mb-5px mt-25px">4.9</h1>
                <div class="text-base-color fs-19 ls-2px lh-10">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="text-dark-gray text-uppercase fs-13 fw-700 alt-font mb-15px d-inline-block">TrustScore</span>
              </figcaption> -->
            </figure>
            <!-- end popup video -->
          </div>
        </div>
        <?php if (get_field('is_show_countdown_timer')) { ?>
          <div class="row justify-content-center"
            data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-auto icon-with-text-style-08">
              <div class="feature-box">
                <div class="feature-box-content alt-font text-dark-gray fs-22 fw-600">
                  <?php echo get_field('countdown_text') ?> <span class="text-decoration-line-bottom"><?php echo get_field('countdown_text_highlight') ?></span>
                  <div class="d-flex justify-content-center countdown-style-01 countdown-style-brand">
                    <div data-enddate="<?php echo get_field('countdown_timer_end') ?>" class="countdown"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>
  <!-- end section -->
  <!-- start section -->
  <section class="pt-50px pb-50px bg-very-light-gray overflow-hidden">
    <div class="container">
      <div class="row justify-content-center align-items-center md-m-0">
        <div class="col-lg-1 p-0">
          <div class="divider-style-03 divider-style-03-03 border-color-base-color w-50 md-w-100 float-end md-mb-15px">
          </div>
        </div>
        <div class="col-xxl-8 col-xl-9 col-lg-10 position-relative text-center">
          <h5 class="alt-font text-dark-gray fw-500 mb-0 fancy-text-style-4 font-style-italic ls-minus-1px">Committed to
            providing solutions for <span class="fw-700"
              data-fancy-text='{ "effect": "rotate", "string": ["contract creation", "commercial affairs", "negotiation support"] }'></span>
          </h5>
        </div>
        <div class="col-lg-1 p-0">
          <div class="divider-style-03 divider-style-03-03 border-color-base-color w-50 md-w-100 md-mt-15px"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="background-position-center-top position-relative sm-background-image-none"
    style="background-image: url('<?php echo get_theme_file_uri('assets/images/vertical-line-bg.svg') ?>')">
    <div class="container">
      <div class="row justify-content-center mb-1">
        <div class="col-lg-7 text-center"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-dark-gray ls-1px">Stay new update</span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">Latest News.</h3>
          </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-12 px-0">
          <ul
            class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large"
            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1000, "willchange": "transform", "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <li class="grid-sizer"></li>
            <!-- start blog item -->
            <li class="grid-item">
              <?php get_template_part('template-parts/partials/content', 'blog') ?>
            </li>
            <!-- end blog item -->
            <!-- start blog item -->
            <li class="grid-item">
              <?php get_template_part('template-parts/partials/content', 'blog') ?>
            </li>
            <!-- end blog item -->
            <!-- start blog item -->
            <li class="grid-item">
              <?php get_template_part('template-parts/partials/content', 'blog') ?>
            </li>
            <!-- end blog item -->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer();
?>