<?php

if (!defined('ABSPATH')) {
  die;
}

function archive_product_hooks_customizations()
{
  // REMOVALS

  remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
  remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
  remove_action('woocommerce_shop_loop_header', 'woocommerce_product_taxonomy_archive_header');
  remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title');
  remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
  remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
  remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);

  // ACTIONS

  add_action('woocommerce_before_main_content', 'mamak_before_top_content', 1);

  function mamak_before_top_content()
  {
    ?>
    <div class="container">
      <div class="row">
        <div class="col-12 breadcrumb breadcrumb-style-01 fs-14 py-3">
          <?php
  }

  add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb2', 2);

  add_action('woocommerce_before_main_content', 'mamak_close_breadcrumb_open_title', 3);

  function mamak_close_breadcrumb_open_title()
  {
    ?>
        </div>
        <div class="col-12">
          <?php
  }

  add_action('woocommerce_before_main_content', 'woocommerce_product_taxonomy_archive_header', 4);

  add_action('woocommerce_before_main_content', 'mamak_close_title', 5);

  function mamak_close_title()
  {
    ?>
        </div>
        <?php
  }

  add_action('woocommerce_before_main_content', 'mamak_after_top_content', 7);
  function mamak_after_top_content()
  {
    ?>
      </div>
    </div>
    </div>
    <?php
  }


  add_action('woocommerce_before_main_content', 'mamak_before_main_content', 9);

  function mamak_before_main_content()
  {
    ?>
    <section class="<?php echo is_product() ? 'half-section' : 'pt-0' ?>">
      <div class="container">
        <div class="row">
          <div class="col-12 <?php echo (is_shop() || is_product_category()) ? 'col-md-8 order-last order-md-first' : '' ?>">
            <?php
  }

  add_action('woocommerce_after_main_content', 'mamak_after_main_col', 11);

  function mamak_after_main_col()
  {
    ?>
          </div>
          <?php
  }

  if (is_shop() || is_product_category()) {
    add_action('woocommerce_after_main_content', 'mamak_before_sidebar_col', 12);

    function mamak_before_sidebar_col()
    {
      ?>
            <div class="col-12 col-md-4 order-first order-md-last">
              <?php
    }

    add_action('woocommerce_after_main_content', 'woocommerce_get_sidebar', 13);


    add_action('woocommerce_after_main_content', 'mamak_after_sidebar_col', 14);

    function mamak_after_sidebar_col()
    {
      ?>
            </div>
            <?php
    }
  }


  add_action('woocommerce_after_main_content', 'mamak_after_main_content', 15);
  function mamak_after_main_content()
  {
    ?>
        </div>
      </div>
    </section>
    <?php
  }

  add_action('woocommerce_before_shop_loop_item', 'mamak_before_wc_template_loop_product_link_open', 5);

  function mamak_before_wc_template_loop_product_link_open()
  {
    ?>
    <div class="shop-image mb-20p">
      <?php
  }

  add_action('woocommerce_after_shop_loop_item', 'mamak_before_wc_template_loop_product_link_close', 4);

  function mamak_before_wc_template_loop_product_link_close()
  {
    ?>
      <div class="shop-overlay bg-gradient-gray-light-dark-transparent"></div>
      <?php
  }



  add_action('woocommerce_after_shop_loop_item', 'mamak_before_wc_template_loop_add_to_cart', 6);

  function mamak_before_wc_template_loop_add_to_cart()
  {
    ?>
      <div class="shop-buttons-wrap">
        <?php
  }

  add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 7);

  add_action('woocommerce_after_shop_loop_item', 'mamak_after_wc_template_loop_add_to_cart', 8);

  function mamak_after_wc_template_loop_add_to_cart()
  {
    ?>
      </div>
      <?php
  }


  add_action('woocommerce_after_shop_loop_item', 'mamak_after_wc_template_loop_product_link_close', 9);

  function mamak_after_wc_template_loop_product_link_close()
  {
    ?>
    </div>
    <?php
  }

  add_action('woocommerce_after_shop_loop_item', 'mamak_after_shop_image_shop_footer_open');

  function mamak_after_shop_image_shop_footer_open()
  {
    ?>
    <div class="shop-footer text-center">
      <a title="<?php echo esc_html(get_the_title()) ?>" href="<?php echo get_the_permalink() ?>"
        class="alt-font text-dark-gray fs-19 fw-500"><?php echo wp_strip_all_tags(wp_trim_words(mb_strimwidth(get_the_title(), 0, 25, '...'), 3)) ?></a>
      <?php
  }

  add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 11);


  add_action('woocommerce_after_shop_loop_item', 'mamak_after_shop_image_shop_footer_close', 12);

  function mamak_after_shop_image_shop_footer_close()
  {
    ?>
    </div>
    <?php
  }

  add_action('woocommerce_before_shop_loop', 'mamak_before_shop_loop_wrapper', 19);
  function mamak_before_shop_loop_wrapper()
  {
    ?>
    <div class="clearfix">
      <?php
  }

  add_action('woocommerce_before_shop_loop', 'mamak_after_shop_loop_wrapper', 30);
  function mamak_after_shop_loop_wrapper()
  {
    ?>
    </div>
    <?php
  }


  // FILTERS

  add_filter('woocommerce_product_loop_start', 'mamak_custom_product_loop_start');

  function mamak_custom_product_loop_start($html)
  {
    $html = '<ul class="shop-modern shop-wrapper grid-loading grid grid-3col xl-grid-3col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-anime=\'{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }\'><li class="grid-sizer"></li>';
    return $html;
  }

  // add_filter('wc_get_template_part', 'mamak_wc_get_template_part', 10, 3);

  // function mamak_wc_get_template_part($template, $slug, $name)
  // {
  //   if ($slug === 'content' && $name === 'product') {
  //     $template = get_template_directory() . '/woocommerce/templates/content-product.php';
  //   }
  //   return $template;
  // }

  // add_filter( 'wc_get_template', 'mamak_override_price_template', 10, 5 );
  // function mamak_override_price_template($template, $template_name, $args, $template_path, $default_path)
  // {
  //   if ('loop/price.php' === $template_name) {

  //     $custom_template = get_template_directory() . '/woocommerce/templates/loop/price.php';
  //     if (file_exists($custom_template)) {
  //       return $custom_template;
  //     }
  //   }
  //   return $template;
  // }

  add_filter('woocommerce_sale_flash', 'mamak_custom_sale_flash', 10, 3);

  function mamak_custom_sale_flash($html, $post, $product)
  {
    $html = '<span class="lable sale">' . esc_html__('Sale', 'mamaksibuk') . '</span>';
    return $html;
  }

  add_filter('woocommerce_loop_add_to_cart_link', 'mamak_wc_loop_add_to_cart_link', 10, 3);

  function mamak_wc_loop_add_to_cart_link($html, $product, $args)
  {
    $aria_describedby = isset($args['aria-describedby_text']) ? sprintf('aria-describedby="woocommerce_loop_add_to_cart_link_describedby_%s"', esc_attr($product->get_id())) : '';
    // var_dump($args);
    if (isset($args['class'])) {
      $args['class'] .= ' alt-font btn btn-small btn-box-shadow btn-white btn-round-edge left-icon add-to-cart';
    }
    $html = sprintf(
      '<a href="%s" %s data-quantity="%s" class="%s" %s><i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">%s</span></a>',
      esc_url($product->add_to_cart_url()),
      $aria_describedby,
      esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
      esc_attr(isset($args['class']) ? $args['class'] : 'button'),
      isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
      esc_html($product->add_to_cart_text())
    );
    return $html;
  }

  add_filter('woocommerce_breadcrumb_defaults', 'mamak_custom_breadcrumbs');

  function mamak_custom_breadcrumbs($args)
  {
    $args = array(
      'delimiter' => '',
      'wrap_before' => '<ul aria-label="Breadcrumb">',
      'wrap_after' => '</ul>',
      'before' => '',
      'after' => '',
      'home' => _x('Home', 'breadcrumb', 'woocommerce'),
      'shop' => _x('Shop', 'breadcrumb', 'woocommerce'),
    );
    return $args;
  }

  add_filter('woocommerce_show_page_title', 'mamak_custom_show_page_title');
  function mamak_custom_show_page_title($show)
  {
    return is_shop();
  }
}

add_action('wp', 'archive_product_hooks_customizations');