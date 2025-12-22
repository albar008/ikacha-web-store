<?php

if (!defined('ABSPATH')) {
  die;
}

define('STRICT_ROLES', ['web_manager', 'shop_manager']);
define('STRICT_PAGES', ['home', 'about']);

/**
 * Get information about available image sizes
 */

function get_comment_depth($comment, $comments)
{
  $depth = 1;

  while ($comment && $comment->comment_parent != 0) {
    $depth++;
    $comment = wp_list_filter($comments, [
      'comment_ID' => $comment->comment_parent
    ]);
    if ($comment) {
      $comment = array_values($comment)[0];
    }
  }

  return $depth;
}

function wpdocs_get_paginated_links($query)
{
  // When we're on page 1, 'paged' is 0, but we're counting from 1,
  // so we're using max() to get 1 instead of 0
  $currentPage = max(1, get_query_var('paged', 1));

  // This creates an array with all available page numbers, if there
  // is only *one* page, max_num_pages will return 0, so here we also
  // use the max() function to make sure we'll always get 1
  $pages = range(1, max(1, $query->max_num_pages));

  // Now, map over $pages and return the page number, the url to that
  // page and a boolean indicating whether that number is the current page
  return array_map(function ($page) use ($currentPage) {
    return (object) array(
      "isCurrent" => $page == $currentPage,
      "page" => $page,
      "url" => get_pagenum_link($page)
    );
  }, $pages);
}
function get_image_sizes($size = '')
{
  $wp_additional_image_sizes = wp_get_additional_image_sizes();

  $sizes = array();
  $get_intermediate_image_sizes = get_intermediate_image_sizes();

  // Create the full array with sizes and crop info
  foreach ($get_intermediate_image_sizes as $_size) {
    if (in_array($_size, array('thumbnail', 'medium', 'large'))) {
      $sizes[$_size]['width'] = get_option($_size . '_size_w');
      $sizes[$_size]['height'] = get_option($_size . '_size_h');
      $sizes[$_size]['crop'] = (bool) get_option($_size . '_crop');
    } elseif (isset($wp_additional_image_sizes[$_size])) {
      $sizes[$_size] = array(
        'width' => $wp_additional_image_sizes[$_size]['width'],
        'height' => $wp_additional_image_sizes[$_size]['height'],
        'crop' => $wp_additional_image_sizes[$_size]['crop']
      );
    }
  }

  // Get only 1 size if found
  if ($size) {
    if (isset($sizes[$size])) {
      return $sizes[$size];
    } else {
      return false;
    }
  }
  return $sizes;
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

# Remove Editor support for specific page
add_action('admin_init', function () {
  global $pagenow;
  $page_id = isset($_GET['post']) ? (int) $_GET['post'] : 0;
  if ($page_id) {
    $post = get_post($page_id);
    if ($post) {
      if ($post->post_type === 'page') {
        remove_post_type_support('page', 'thumbnail');
      }
    }
  }

  if (
    $pagenow === 'post-new.php' &&
    isset($_GET['post_type']) &&
    $_GET['post_type'] === 'page'
  ) {
    if (!current_user_can('administrator')) {
      wp_die('You do not have permission to create a new page.');
    }
  }
});

function perm($return, $id, $new_title, $new_slug)
{

  $post = get_post($id);

  if (!$post || ($post->post_type !== 'page' && strtolower($post->post_name) !== 'about')) {
    return $return;
  }

  return preg_replace(
    '/<span id="edit-slug-buttons">.*<\/span>|<span id=\'view-post-btn\'>.*<\/span>/i',
    '',
    $return
  );
}
add_filter('get_sample_permalink_html', 'perm', 10, 4);

function mamak_block_editor_assets_regis()
{
  // wp_register_style('rich-text-custom-format-style', get_theme_file_uri('build/rich-text-custom-formats.css'));
  wp_enqueue_script(
    'rich-text-custom-format',
    get_template_directory_uri() . '/build/rich-text-custom-formats.js',
    array(),
    false,
    true
  );
}
add_action('enqueue_block_editor_assets', 'mamak_block_editor_assets_regis');

function theme_enqueue_styles()
{
  // wp_deregister_script('jquery');
  wp_register_style('icon-style', get_theme_file_uri('assets/css/icon.min.css'));
  wp_register_style('vendors-style', get_theme_file_uri('assets/css/vendors.min.css'));
  wp_register_style('pre-style', get_theme_file_uri('build/style-pre-style.css'));
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
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function mamak_config()
{
  add_theme_support('title-tag');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
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
  add_theme_support('editor-styles');
  add_editor_style(['build/rich-text-custom-formats.css']);

  add_image_size('mamak_slider_image', 1920, 1100, true);
  add_image_size('mamak_blog_image', 600, 430, true);
  add_image_size('mamak_about_image', 800, 770, true);
  add_image_size('mamak_service_image', 755, 510, true);
  add_image_size('mamak_core_value_image', 600, 750, true);
  add_image_size('mamak_vis_mis1_image', 638, 638, true);
  add_image_size('mamak_vis_mis2_image', 750, 800, true);
  add_image_size('mamak_coach_image', 600, 759, true);
}
add_action('after_setup_theme', 'mamak_config');

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
function ourLoginTitle($headertext)
{
  $headertext = esc_html__('Welcome to WordPress', 'plugin-textdomain');
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

add_action('restrict_manage_posts', function () {
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

function my_wp_disable_print_except_thankyou()
{
  if (!is_wc_endpoint_url('order-received')) {
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
add_action('wp_head', 'my_wp_disable_print_except_thankyou');

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

add_filter('use_block_editor_for_post', function ($can_edit, $post) {
  // ID page yang ingin dinonaktifkan block editor-nya
  $disable_pages = array('about'); // masukkan ID Page

  // if (in_array(strtolower($post->post_name), $disable_pages)) {
  //   return false; // disable Gutenberg
  // }

  return $can_edit;
}, 10, 2);

add_filter('allowed_block_types_all', 'prevent_blocks', 10, 2);
function prevent_blocks($allowed_blocks, $editor_context)
{
  $disable_pages = array('about'); // masukkan ID Page

  if ($editor_context->post && in_array(strtolower($editor_context->post->post_name), $disable_pages)) {
    return [
      'core/paragraph',
      'core/heading',
      'core/list',
      'core/math',
      'core/post-time-to-read',
      'core/quote',
      'core/embed',
      'core/table',
      'core/columns'
    ];
  }

  return $allowed_blocks;

}

// Remove "More Tag" button from Classic Editor
function disable_more_tag_in_classic_editor($buttons)
{
  $remove = array('wp_more'); // tombol More Tag
  return array_diff($buttons, $remove);
}
add_filter('mce_buttons', 'disable_more_tag_in_classic_editor');

function mamak_limit_edit_page($allcaps, $caps, $args, $user)
{
  if (!is_admin()) {
    return $allcaps;
  }
  if (
    empty(array_intersect(STRICT_ROLES, $user->roles))
  ) {
    return $allcaps;
  }
  $post_id = false;
  if (isset($_GET['post'])) {
    $post_id = intval($_GET['post']);
  }
  if ($post_id) {
    $post = get_post($post_id);
    if (
      (
        in_array($post->post_name, STRICT_PAGES)
      ) &&
      $post->post_type === 'page'
    ) {
      if (isset($caps[0])) {
        $allcaps[$caps[0]] = true;
      }
    } else {
      if ($post->post_type === 'page') {
        $allcaps[$caps[0]] = false;
        wp_die('You do not have permission to access this page.');
      }
    }
  }
  return $allcaps;
}
add_filter('user_has_cap', 'mamak_limit_edit_page', 10, 4);

function mamak_custom_row_actions($actions, $post)
{
  // var_dump("ARAEADA", $actions, $post);
  $user = wp_get_current_user();
  if (!is_admin()) {
    return $actions;
  }
  if (
    empty(array_intersect(STRICT_ROLES, $user->roles))
  ) {
    return $actions;
  } else {
    if ($post->post_type === 'page') {
      #Disable Duplicate for page except admin
      unset($actions['duplicate']);
    }
  }
  if (!in_array($post->post_name, STRICT_PAGES)) {
    unset($actions['edit']);
    unset($actions['inline hide-if-no-js']);
  }
  return $actions;
}
add_filter('page_row_actions', 'mamak_custom_row_actions', 10, 2);

add_action('admin_footer', 'my_admin_add_js', 100);
function my_admin_add_js($data)
{
  $dataTest = isset($_GET['post']) ? (int) $_GET['post'] : 0;
  ?>
  <!-- <style>
    .editor-post-url__panel-dropdown {
      display: none !important;
    }
  </style> -->
  <?php
}

//Removing &amp; or any html special enitiy from name
function filter_post_name($data, $postarr, $unsanitized_postarr)
{
  $user = wp_get_current_user();
  $post = get_post($postarr['ID']);
  if ($post && $post->post_type === 'page' && !in_array('administrator', (array) $user->roles)) {
    $data['post_name'] = $post->post_name;
  }
  return $data;
}
add_filter('wp_insert_post_data', 'filter_post_name', 10, 3);

add_action('admin_menu', function () {
  remove_submenu_page('themes.php', 'nav-menus.php');
});
function hide_admin_role_for_non_admins($roles)
{

  if (!current_user_can('administrator')) {
    if (isset($roles['administrator'])) {
      unset($roles['administrator']);
    }
  }

  return $roles;
}
add_filter('editable_roles', 'hide_admin_role_for_non_admins');

function hide_admin_users_from_list($query)
{
  if (!is_admin() || 'users' !== get_current_screen()->id) {
    return;
  }

  if (!current_user_can('administrator')) {

    // Prevent WP from loading too much data
    $query->set('role__not_in', array('Administrator'));
  }
}
add_action('pre_get_users', 'hide_admin_users_from_list');

add_filter('upload_mimes', function ($mimes) {
  $mimes['pdf'] = 'application/pdf';
  $mimes['ppt'] = 'application/vnd.ms-powerpoint';
  $mimes['pptx'] = 'application/vnd.openxmlformats-officedocument.presentationml.presentation';
  return $mimes;
});

function change_title_placeholder($title)
{
  $screen = get_current_screen();

  if ('coach' === $screen->post_type) {
    return 'Add Coach Name';
  }

  if ('service' === $screen->post_type) {
    return 'Add Service Name';
  }

  return $title;
}
add_filter('enter_title_here', 'change_title_placeholder');

function my_callback_pre_get_posts($query)
{
  if (is_admin() && $query->is_main_query()) {
    $currUser = wp_get_current_user();
    global $pagenow;

    if (
      $pagenow === 'edit.php' &&
      $query->get('post_type') === 'page'
    ) {
      // echo $query->get('post_type');
      // $query->set( 'author', get_current_user_id() );
      if (!empty(array_intersect(STRICT_ROLES, $currUser->roles))) {
        $query->set('post_name__in', STRICT_PAGES);
      }
    }
  }
}
add_action('pre_get_posts', 'my_callback_pre_get_posts');

add_action('delete_attachment', function ($post_id) {
  if (get_field('is_default_attach', $post_id)) {
    wp_die('Default image cannot be deleted.');
  }
});

function mytheme_comment($comment, $args, $depth)
{
  ?>
  <li>
    <div class="d-block d-md-flex w-100 align-items-center align-items-md-start ">
      <div class="w-90px sm-w-65px sm-mb-10px">
        <img src="https://placehold.co/130x130" class="rounded-circle" alt="">
      </div>
      <div class="w-100 ps-30px last-paragraph-no-margin sm-ps-0">
        <a href="#" class="text-dark-gray fw-500"><?php echo $comment->comment_author ?></a>
        <?php
        comment_reply_link([
          'depth' => $depth,
          'max_depth' => $args['max_depth'],
          'reply_text' => 'Reply'
        ]);
        ?>
        <div class="fs-14 lh-24 mb-10px"><?php echo get_comment_time('d M Y H:i:s') ?></div>
        <p class="w-85 sm-w-100"><?php echo esc_html($comment->comment_content) ?></p>
      </div>
    </div>
    <?php
}

//Comment Field Order
add_filter('comment_form_fields', 'mo_comment_fields_custom_order');
function mo_comment_fields_custom_order($fields)
{
  global $post;
  if ($post->post_type !== 'product') {

    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['cookies']);
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['url'] = $url_field;
    $fields['comment'] = $comment_field;
    $fields['cookies'] = $cookies_field;
    // done ordering, now return the fields:
  }
  return $fields;
}

// Remove
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');

// customizer
require_once get_template_directory() . '/inc/customizer/customizer.php';

// Customize WooCommerce
require_once get_template_directory() . '/inc/wc/archive-product-hooks.php';
require_once get_template_directory() . '/inc/wc/single-product-hooks.php';
require_once get_template_directory() . '/inc/wc/checkout-hooks.php';