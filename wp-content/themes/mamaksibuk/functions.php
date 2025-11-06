<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
  wp_deregister_script('jquery');
  wp_register_style('icon-style', get_theme_file_uri('assets/css/icon.min.css'));
  wp_register_style('vendors-style', get_theme_file_uri('assets/css/vendors.min.css'));
  wp_register_style('pre-style', get_theme_file_uri('build/style-index.css'));
  wp_enqueue_style('main-style', get_theme_file_uri('build/index.css'), ['vendors-style', 'icon-style', 'pre-style']);

  wp_register_script('jq', get_theme_file_uri('assets/js/jquery.js'), [], null, true);
  wp_register_script('pre-script', get_theme_file_uri('assets/js/vendors.min.js'), ['jq'], null, true);
  wp_enqueue_script('main-script', get_theme_file_uri('build/index.js'), ['jq', 'pre-script'], null, true);

}

add_action('after_setup_theme', 'mamak_config');

function mamak_config()
{
  add_theme_support( 'woocommerce', array(
        'thumbnail_image_width' => 150,
        'single_image_width'    => 300,

        'product_grid'          => array(
            'default_rows'    => 3,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ) );

  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}