<?php

if (!defined('ABSPATH')) {
  die;
}

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
  // wp_deregister_script('jquery');
  wp_register_style('icon-style', get_theme_file_uri('assets/css/icon.min.css'));
  wp_register_style('vendors-style', get_theme_file_uri('assets/css/vendors.min.css'));
  wp_register_style('pre-style', get_theme_file_uri('build/style-index.css'));
  wp_enqueue_style('main-style', get_theme_file_uri('build/index.css'), ['vendors-style', 'icon-style', 'pre-style']);

  // wp_register_script('jq', get_theme_file_uri('assets/js/jquery.js'), [], null, true);
  wp_register_script('pre-script', get_theme_file_uri('assets/js/vendors.min.js'), ['jquery'], null, true);
  wp_register_script('main-script', get_theme_file_uri('build/index.js'), ['jquery', 'pre-script'], null, true);

  wp_enqueue_script('pre-script');

  // Tambahkan inline script untuk set alias $
  wp_add_inline_script('pre-script', 'var $ = jQuery.noConflict();', 'before');

  wp_localize_script('main-script', 'siteLocalData', [
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest'),
    'is_admin_bar_show' => is_admin_bar_showing(),
  ]);

  wp_enqueue_script('main-script');


}

add_action('after_setup_theme', 'mamak_config');

function mamak_config()
{
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
  add_theme_support('widgets');
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width' => 300,

    'product_grid' => array(
      'default_rows' => 3,
      'default_columns' => 4,
      'min_columns' => 2,
      'max_columns' => 5,
    ),
  ));

  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}

if (!function_exists('woocommerce_breadcrumb')) {

  /**
   * Output the WooCommerce Breadcrumb.
   *
   * @param array $args Arguments.
   */
  function woocommerce_breadcrumb2($args = array())
  {
    $args = wp_parse_args(
      $args,
      apply_filters(
        'woocommerce_breadcrumb_defaults',
        array(
          'delimiter' => '&nbsp;&#47;&nbsp;',
          'wrap_before' => '<nav class="woocommerce-breadcrumb" aria-label="Breadcrumb">',
          'wrap_after' => '</nav>',
          'before' => '',
          'after' => '',
          'home' => _x('Home', 'breadcrumb', 'woocommerce'),
        )
      )
    );

    $breadcrumbs = new WC_Breadcrumb();

    if (!empty($args['home'])) {
      $breadcrumbs->add_crumb($args['home'], apply_filters('woocommerce_breadcrumb_home_url', home_url()));
    }

    if (!empty($args['shop']) && !is_shop()) {
      $breadcrumbs->add_crumb($args['shop'], apply_filters('woocommerce_breadcrumb_home_url', site_url('shop')));
    }


    $args['breadcrumb'] = $breadcrumbs->generate();

    /**
     * WooCommerce Breadcrumb hook
     *
     * @hooked WC_Structured_Data::generate_breadcrumblist_data() - 10
     */
    do_action('woocommerce_breadcrumb', $breadcrumbs, $args);

    wc_get_template('global/breadcrumb.php', $args);
  }
}

function mytheme_widgets_init()
{
  register_sidebar(array(
    'name' => 'Mini Cart Widget',
    'id' => 'mini-cart-widget',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
  ));
}
add_action('widgets_init', 'mytheme_widgets_init');

// LOGIN
function ourLoginTitle( $headertext ) {
	$headertext = esc_html__( 'Welcome to WordPress', 'plugin-textdomain' );
	return $headertext;
}
add_filter('login_headertext', 'ourLoginTitle');
function ourHeaderUrl()
{
  return esc_url(site_url(('/')));
}
add_filter('login_headerurl', 'ourHeaderUrl');


add_action('login_enqueue_scripts', function () {
  wp_enqueue_style('custom-login', get_theme_file_uri('/build/login.css'));
});

add_action('restrict_manage_posts', function() {
    $screen = get_current_screen();

    // Pastikan hanya muncul di halaman Media Library
    if ($screen->post_type !== 'attachment') {
        return;
    }

    // Ambil nilai unik dari custom field
    global $wpdb;
    $results = $wpdb->get_col("
        SELECT DISTINCT meta_value 
        FROM $wpdb->postmeta 
        WHERE meta_key = 'media_type' 
        AND meta_value != ''
        ORDER BY meta_value ASC
    ");

    $selected = isset($_GET['media_type']) ? $_GET['media_type'] : '';
    echo '<select name="media_type">';
    echo '<option value="">Semua Kategori Media</option>';

    foreach ($results as $value) {
        printf(
            '<option value="%s" %s>%s</option>',
            esc_attr($value),
            selected($selected, $value, false),
            esc_html(ucfirst($value))
        );
    }

    echo '</select>';
});


function my_wp_disable_print_except_thankyou() {
    if ( ! is_wc_endpoint_url( 'order-received' ) ) {
        echo '<style media="print">
            body {
                display: none !important;
            }
            html::before {
              content: "🔒 Printing is disabled for this page.";
              display: block;
              text-align: center;
              font-size: 24px;
              margin-top: 200px;
            }
        </style>';
    }
}
add_action( 'wp_head', 'my_wp_disable_print_except_thankyou' );

add_filter('rest_endpoints', function ($endpoints) {
    // Batasi akses ke daftar user
    if (isset($endpoints['/wp/v2/users'])) {
        $endpoints['/wp/v2/users'][0]['permission_callback'] = function () {
            return is_user_logged_in() && current_user_can('manage_options'); // hanya user login
        };
    }

    // Batasi akses ke user berdasarkan ID
    if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
        $endpoints['/wp/v2/users/(?P<id>[\d]+)'][0]['permission_callback'] = function () {
            return is_user_logged_in() && current_user_can('manage_options'); // hanya user login
        };
    }

    return $endpoints;
});

function remove_wp_version_and_add_timestamp_if_not_local_assets($src)
{
  if (strpos($src, 'ver=')) {
    $src = remove_query_arg('ver', $src);
    // $src .= '?v=' . time(); // Menggunakan timestamp agar cache diperbarui
    $file_path = str_replace(home_url('/'), ABSPATH, $src);
    if (file_exists($file_path)) {
      $src .= '?v=' . filemtime($file_path); // Menggunakan last modified time
    }
  }
  return $src;
}
add_filter('style_loader_src', 'remove_wp_version_and_add_timestamp_if_not_local_assets', 9999);
add_filter('script_loader_src', 'remove_wp_version_and_add_timestamp_if_not_local_assets', 9999);

// Remove
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');

// Customize WooCommerce
require_once get_template_directory() . '/inc/wc/archive-product-hooks.php';
require_once get_template_directory() . '/inc/wc/single-product-hooks.php';