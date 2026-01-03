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
            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["<?php echo get_field('page_header_title') ?: get_the_title() ?>"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
          </h2>
        </div>
      </div>
    </div>
  </section>
  <!-- end page title -->
  <!-- start section -->
  <section>
    <div class="container position-relative">
      <div class="row justify-content-center">
        <div class="col-12 position-relative last-paragraph-no-margin">
          <?php the_content() ?>
        </div>
      </div>
    </div>
  </section>
  <!-- end section -->
  <?php
}
get_footer();
?>