<?php
get_header();
while (have_posts()) {
  the_post();
  ?>
  <!-- start page title -->
  <?php
  $image_header = get_field('page_header_img');
  ?>
  <section
    class="page-title-big-typography bg-dark-gray xs-py-0 cover-background background-position-center-top"
    style="background-image: url('<?php echo $image_header ? $image_header['sizes']['mamak_slider_image'] : 'https://placehold.co/1920x1100' ?>')">
    <div class="opacity-extra-medium bg-gradient-black-green"></div>
    <div class="container">
      <div class="row align-items-center justify-content-center small-screen">
        <div class="col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
          data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
          <div>
            <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
              data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_field('page_header_subtitle') ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
            </h1>
          </div>
          <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700"
            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_field('page_header_title') ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->
  <!-- start section -->
  <section>
    <div class="container position-relative">
      <!-- start dropcaps item -->
      <div class="row justify-content-center">
        <div class="col-12 position-relative dropcap-style-05 last-paragraph-no-margin">
          <div class="text-w-image__container">
            <?php
            $image = get_field('about_sec_image');
            $ext_vid_url = get_field('comp_profile_video_url');
            ?>
            <div class="text-w-image__image-wrapper sm-mb-30px mb-15px"
              data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
              <figure class="position-relative mb-0 border-radius-6px overflow-hidden">
                <img src="<?php echo $image ? $image['sizes']['mamak_about_image'] : 'https://placehold.co/800x770' ?>"
                  class="w-100 border-radius-6px " alt="<?php echo $image['alt'] ?>">
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
            </div>
            <div class="text-w-image__content"
              data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
              <span
                class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-base-color ls-1px"><?php echo get_field('about_sec_subtitle') ?></span>
              <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px mb-3">
                <?php echo get_field('about_sec_title') ?>
              </h3>
              <p><span class="text-dark-gray opacity-5"><?php esc_html(the_content()) ?></span></p>
            </div>
          </div>
        </div>
      </div>
      <!-- end dropcaps item -->
      <?php if (get_field('comp_profile_doc')) { ?>
        <div class="row mt-5 sm-mt-30px"
          data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div class="col-12 text-center">
            <a href="<?php echo get_field('comp_profile_doc') ?>"
              class="d-inline-block bg-dark-gray fw-600 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-10px">
              Download</a>
            <div class="d-inline-block align-middle"><span
                class="fs-24 alt-font text-dark-gray d-block fw-600 ls-minus-1px mb-0">Download our company profile</span>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="bg-very-light-gray">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span
            class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-base-color ls-1px"><?php echo get_field('core_value_sec_subtitle') ?></span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">
            <?php echo get_field('core_value_sec_title') ?>
          </h3>
        </div>
      </div>
      <div class="row-grid gap-half-4"
        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <?php
        if (have_rows('core_value_content')) {
          while (have_rows('core_value_content')) {
            the_row();
            ?>
            <!-- start features box item -->
            <div class="col-grid icon-with-text-style-07 transition-inner-all">
              <div
                class="hover-box border-radius-6px dark-hover p-55px lg-p-30px feature-box-grid-child overflow-hidden bg-dark-slate-blue text-start box-shadow-double-large-hover">
                <div class="feature-box-icon min-h-150px sm-min-h-100px mb-20 z-index-9">
                  <i class="<?php echo get_sub_field('core_value_icon') ?> icon-extra-large text-white"></i>
                </div>
                <div class="feature-box-title fs-200 fw-600 text-black opacity-2 ls-minus-10px">
                  <?php echo get_sub_field('core_value_name') ?>
                </div>
                <div class="feature-box-content last-paragraph-no-margin">
                  <span class="d-inline-block text-white mb-5px fs-18"><?php echo get_sub_field('core_value_title') ?></span>
                  <p class="w-90 xl-w-100 lh-30 text-light-opacity lh-30 text-light-opacity">
                    <?php echo get_sub_field('core_value_desc') ?>
                  </p>
                </div>
                <div class="feature-box-overlay bg-base-color"></div>
              </div>
            </div>
            <!-- end features box item -->
          <?php }
        } ?>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section>
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-10 text-center text-lg-start"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <div class="vision-container">
            <div class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-base-color ls-1px">
              <?php echo get_field('comp_vision_sec_subtitle') ?>
            </div>
            <h3 class="alt-font text-dark-gray mb-30px md-mb-25px fw-600 ls-minus-1px">
              <?php echo get_field('comp_vision_sec_title') ?>
            </h3>
            <span class="d-inline-block w-95 md-w-100"><?php echo get_field('comp_vision_content') ?></span>
          </div>
        </div>
        <?php
        $visi_image = get_field('comp_vision_img1');
        $visi_image_url = $visi_image ? $visi_image['sizes']['mamak_vis_mis1_image'] : 'https://placehold.co/638x638';
        $visi_alt = $visi_image ? $visi_image['alt'] : '';

        $visi_image2 = get_field('comp_vision_img2');
        $visi_image_url2 = $visi_image2 ? $visi_image2['sizes']['mamak_vis_mis2_image'] : 'https://placehold.co/750x800';
        $visi_alt2 = $visi_image2 ? $visi_image2['alt'] : '';
        ?>
        <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative text-end md-mb-6 sm-mb-10 xs-mb-12">
          <div class="text-end w-80 md-w-75 ms-auto"
            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <img src="<?php echo esc_url($visi_image_url2) ?>" alt="<?php echo esc_attr($visi_alt2) ?>"
              class="border-radius-5px">
          </div>
          <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px"
            data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <img src="<?php echo esc_url($visi_image_url) ?>" alt="<?php echo esc_attr($visi_alt) ?>"
              class="border-radius-5px" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <section class="bg-very-light-gray">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center md-mb-50px"
          data-anime='{ "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <?php
          $misi_image = get_field('comp_mission_img');
          $misi_image_url = $misi_image ? $misi_image['sizes']['mamak_core_value_image'] : 'https://placehold.co/600x750';
          $misi_alt = $misi_image ? $misi_image['alt'] : '';
          ?>
          <figure class="position-relative m-0">
            <div class="position-relative d-inline-block">
              <img class="w-90 border-radius-5px" src="<?php echo $misi_image_url ?>" alt="<?php echo $misi_alt ?>" />
            </div>
            <figcaption
              class="position-absolute bg-white box-shadow-quadruple-large border-radius-5px bottom-50px xs-bottom-35px left-minus-30px md-left-minus-0px ps-50px pe-50px pt-35px pb-35px xs-p-20px w-320px xs-w-250px text-center last-paragraph-no-margin">
              <div class="icon-with-text-style-06">
                <div class="bg-white feature-box feature-box-left-icon-middle">
                  <div class="feature-box-icon me-15px">
                    <i class="line-icon-Thumb icon-double-large text-gradient-emerald-blue-emerald-green"></i>
                  </div>
                  <div class="feature-box-content last-paragraph-no-margin">
                    <div class="alt-font fw-600 text-dark-gray lh-26">We provide quality services to customers.</div>
                  </div>
                </div>
              </div>
            </figcaption>
          </figure>
        </div>
        <div class="col-xl-5 offset-xl-1 col-lg-6 col-md-8"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span
            class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-base-color ls-1px"><?php echo get_field('comp_mission_sec_subtitle') ?></span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">
            <?php echo get_field('comp_mission_sec_title') ?>
          </h3>
          <span class="d-inline-block w-95 md-w-100"><?php echo get_field('comp_mission_content') ?></span>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- end section -->
  <!-- start section -->
  <?php
  $coachArgs = [
    'post_type' => 'coach',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
  ];
  $coaches = new WP_Query($coachArgs);
  ?>
  <section class="background-position-center-top sm-background-image-none">
    <div class="container">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-7 text-center"
          data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <span class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-base-color ls-1px">Core people</span>
          <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">Expert Coach.</h3>
        </div>
      </div>
      <div class="row-grid row-grid--4 gap-half-3 justify-self-center"
        data-anime='{ "el": "childs", "translateY": [15, 0], "translateX": [-15, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <!-- start team member item -->
        <?php
        if ($coaches->have_posts()) {
          while ($coaches->have_posts()) {
            $coaches->the_post();
            $coach_image = get_field('coach_content_img');
            $coach_name = get_field('');
            $coach_role = get_field('coach_role');
            $coach_role_text = get_field('coach_role_text');

            // Sosmed URLS
            $coach_fb_url = get_field('fb_url');
            $coach_insta_url = get_field('insta_url');
            $coach_linkedin_url = get_field('linkedin_url');

            if ($coach_role['value'] === 'founder' || $coach_role['value'] === 'co-founder') {
              $coach_role_text = $coach_role['label'];
            }
            ?>
            <div class="col-grid text-center team-style-01 md-mb-30px">
              <figure
                class="mb-0 border-radius-6px overflow-x-hidden overflow-y-hidden hover-box box-hover bg-white light-hover position-relative box-shadow-quadruple-large">
                <img src="<?php echo $coach_image ? $coach_image['sizes']['large'] : 'https://placehold.co/600x759' ?>"
                  alt="<?php echo $coach_image['alt'] ?>" />
                <figcaption class="w-100 p-30px bg-white">
                  <div class="position-relative z-index-1 overflow-hidden">
                    <span class="d-block alt-font fw-700 text-dark-gray lh-26 fs-18"><?php the_title() ?></span>
                    <span class="text-light-opacity fs-15"><?php echo $coach_role_text ?></span>
                    <div class="social-icon hover-text mt-20px lg-mt-10px">
                      <a rel="noopener noreferrer" href="<?php if ($coach_fb_url) {
                        echo $coach_fb_url;
                      } else {
                        echo '#';
                      } ?>" target="_blank"><i class="fa-brands fa-facebook-f icon-small"></i></a>
                      <a rel="noopener noreferrer" href="<?php if ($coach_insta_url) {
                        echo $coach_insta_url;
                      } else {
                        echo '#';
                      } ?>" target="_blank"><i class="fa-brands fa-instagram icon-small"></i></a>
                      <a rel="noopener noreferrer" href="<?php if ($coach_insta_url) {
                        echo $coach_insta_url;
                      } else {
                        echo '#';
                      } ?>" target="_blank"><i class="fa-brands fa-linkedin-in icon-small"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
            </div>
          <?php }
        }
        wp_reset_postdata();
        ?>
        <!-- end team member item -->
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer();
?>