<?php
function mamak_cpt()
{
  // Coach Post Type
  register_post_type('coach', [
    'capability_type' => 'coach',
    'map_meta_cap' => true,
    'supports'  => [
      'title',
      'page-attributes'
    ],
    'rewrite' => [
      'slug' => 'coaches'
    ],
    'public' => true,
    'show_in_rest' => true,
    'labels' => [
      'name' => 'Coaches',
      'add_new' => 'Add New Coach',
      'add_new_item' => 'Add New Coach',
      'edit_item' => 'Edit Coach',
      'all_items' => 'All Coaches',
      'singular_name' => 'Coach'
    ],
    'menu_icon' => 'dashicons-location-alt',
  ]);


  // Service Post Type
  register_post_type('service', [
    'capability_type' => 'service',
    'map_meta_cap' => true,
    'supports'  => [
      'title',
      'page-attributes',
    ],
    'rewrite' => [
      'slug' => 'services'
    ],
    'public' => true,
    'show_in_rest' => true,
    'labels' => [
      'name' => 'Services',
      'add_new' => 'Add New Service',
      'add_new_item' => 'Add New Service',
      'edit_item' => 'Edit Service',
      'all_items' => 'All Services',
      'singular_name' => 'Service'
    ],
    'menu_icon' => 'dashicons-location-alt',
  ]);
}

add_action('init', 'mamak_cpt');