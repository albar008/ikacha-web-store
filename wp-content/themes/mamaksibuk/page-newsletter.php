<?php
get_header();
?>
<!-- start section -->
<section class="cover-background full-screen ipad-top-space-margin md-h-550px"
  style="background-image: url(images/404-bg.jpg);">
  <div class="container h-100">
    <div class="row justify-content-center h-100">
      <div class="col-12 col-xl-6 col-lg-7 col-md-9"
        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <?php
        if (have_posts()):

          // Load posts loop
          while (have_posts()):
            the_post();
            ?>
            <h1 class="alt-font text-center text-dark-gray text-uppercase ls-minus-1px mb-25px"><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
            <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<?php get_footer(); ?>