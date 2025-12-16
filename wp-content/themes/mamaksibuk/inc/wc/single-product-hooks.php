<?php

if (!defined('ABSPATH')) {
  die;
}

function single_product_hooks_customizations()
{
  // REMOVALS
  remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');
  remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
  remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
  remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash');

  remove_action('woocommerce_review_before', 'woocommerce_review_display_gravatar');
  remove_action('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating');
  remove_action('woocommerce_review_meta', 'woocommerce_review_display_meta');

  // ACTIONS

  add_action('woocommerce_before_single_product', 'mamak_wc_wrapper_single_product_open', 11);
  function mamak_wc_wrapper_single_product_open()
  {
    ?>
    <div class="container">
      <div class="'row">
        <div class="col-12">
          <?php
  }

  add_action('woocommerce_after_single_product', 'mamak_wc_wrapper_single_product_close');
  function mamak_wc_wrapper_single_product_close()
  {
    ?>
        </div>
      </div>
    </div>
    <?php
  }

  add_action('woocommerce_after_single_product_summary', 'mamak_wc_clearfix', 9);
  function mamak_wc_clearfix()
  {
    ?>
    <div class="clearfix"></div>
    <?php
  }

  add_action('woocommerce_after_single_product', 'wc_mamak_tabs_container_open', 11);

  function wc_mamak_tabs_container_open()
  {
    ?>
    <section id="tab" class="pt-4 sm-pt-40px">
      <div class="container">
        <div class="row">
          <div class="col-12 tab-style-04">
            <?php
  }

  add_action('woocommerce_after_single_product', 'woocommerce_output_product_data_tabs', 12);

  add_action('woocommerce_after_single_product', 'wc_mamak_tabs_container_close', 13);
  function wc_mamak_tabs_container_close()
  {
    ?>
          </div>
        </div>
      </div>
    </section>
    <?php
  }

  // Single Review
  add_action('woocommerce_review_before', 'mamak_wc_review_display_gravatar_wrapper', 9);
  function mamak_wc_review_display_gravatar_wrapper($comment)
  {
    ?>
    <div class="w-300px md-w-250px sm-w-100 sm-mb-10px text-center">
      <?php
  }

  add_action('woocommerce_review_before', 'mamak_wc_review_display_gravatar', 10);

  function mamak_wc_review_display_gravatar($comment)
  {
    echo get_avatar($comment, 200, '', 'reviewer avatar', array('class' => 'rounded-circle w-90px mb-10px'));
  }

  add_action('woocommerce_review_before', 'woocommerce_review_display_meta', 11);


  add_action('woocommerce_review_before_comment_meta', 'mamak_wc_review_display_gravatar_wrapper_close', 9);

  function mamak_wc_review_display_gravatar_wrapper_close($comment)
  {
    ?>
    </div>
    <?php
  }

  add_action('woocommerce_review_before_comment_text', 'mamak_wc_review_comment_content_wrapper_open');
  function mamak_wc_review_comment_content_wrapper_open($comment)
  {
    ?>
    <div class="w-100 last-paragraph-no-margin sm-ps-0 position-relative text-center text-md-start">
      <?php
  }

  add_action('woocommerce_review_comment_text', 'woocommerce_review_display_rating', 9);

  add_action('woocommerce_review_after_comment_text', 'mamak_wc_review_comment_content_wrapper_close');
  function mamak_wc_review_comment_content_wrapper_close($comment)
  {
    ?>
    </div>
    <?php
  }

  function mamak_product_meta()
  {
    global $product;
    $cats = wp_get_post_terms($product->get_id(), 'product_cat', ['fields' => 'names']);
    if ($cats) {
      $cats = array_map('strtolower', $cats);
    }
    if (in_array('webinar', $cats)) {
      $ev_start_date = get_field('prod_ev_start_date', $product->get_id());
      $ev_end_date = get_field('prod_ev_end_date', $product->get_id());
      ?>
      <?php if ($ev_start_date) { ?>
        <?php get_template_part('template-parts/partials/content', 'ev-schedule', ['ev_start_date' => $ev_start_date, 'ev_end_date' => $ev_end_date]) ?>
      <?php } ?>
    <?php
    }
  }

  add_action('woocommerce_single_product_summary', 'mamak_product_meta', 21);


  // FILTERS

  add_filter('woocommerce_product_price_class', 'custom_price_class');
  function custom_price_class($class)
  {
    $class .= ' product-price mb-10px';
    return $class;
  }

  add_filter('woocommerce_product_get_rating_html', 'custom_rating_html', 10, 3);

  function custom_rating_html($html, $rating, $count)
  {
    return '<span class="text-golden-yellow ls-minus-1px mb-5px sm-me-10px sm-mb-0 d-inline-block d-md-block">' . $html . '</span>';
  }


}

add_action('wp', 'single_product_hooks_customizations');