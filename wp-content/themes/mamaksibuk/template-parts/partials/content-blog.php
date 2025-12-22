<div class="card border-0 border-radius-4px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
  <div class="blog-image">
    <a href="<?php the_permalink() ?>" class="d-block">
      <?php if (has_post_thumbnail()) {
        the_post_thumbnail('mamak_blog_image');
      } else {
        ?>
        <img src="https://placehold.co/600x430" alt="" />
      <?php } ?>
    </a>
    <div class="blog-categories">
      <?php
      $cats = get_the_category();
      foreach ($cats as $cat) {
        ?>
        <a href="<?php echo get_category_link($cat) ?>"
          class="categories-btn bg-white text-dark-gray text-dark-gray-hover text-uppercase alt-font fw-700">
          <?php
          echo $cat->name;
          ?>
        </a>
        <?php
        if (array_key_last($cats) !== count($cats) - 1) {
          echo ', ';
        }
      } ?>
    </div>
  </div>
  <div class="card-body p-13 md-p-11">
    <a title="<?php the_title() ?>" href="<?php the_permalink() ?>"
      class="card-title mb-15px alt-font fw-700 fs-18 lh-30 text-dark-gray text-dark-gray-hover d-inline-block"><?php echo wp_strip_all_tags(wp_trim_words(mb_strimwidth(get_the_title(), 0, 30, '...'), 10)) ?></a>
    <p>
      <?php
      if (has_excerpt()) {
        echo wp_strip_all_tags(wp_trim_words(get_the_excerpt(), 15));
      } else {
        echo wp_strip_all_tags(wp_trim_words(get_the_content(), 15));
      }
      ?>
    </p>
    <div
      class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-14 text-uppercase">
      <div class="me-auto">
        <span class="blog-date d-inline-block"><?php the_time('d M Y') ?></span>
        <div class="d-inline-block author-name">By <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"
            class="text-dark-gray text-dark-gray-hover text-decoration-line-bottom fw-500"><?php the_author() ?></a>
        </div>
      </div>
    </div>
  </div>
</div>