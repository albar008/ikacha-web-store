<?php
if (!defined('ABSPATH')) {
  die;
}

function theme_customizer($wp_customize)
{
  $wp_customize->remove_panel("widgets");
  $wp_customize->remove_section('nav_menus');
  $wp_customize->remove_section('static_front_page');
  $wp_customize->remove_section('custom_css');
}
add_action('customize_register', 'theme_customizer', 20);


add_action('after_setup_theme', 'initialize_kirki_settings', 20);
function initialize_kirki_settings()
{
  if (!class_exists('Kirki')) {
    return;
  }
  
  require_once __DIR__.'/general-customizer.php';
  require_once __DIR__.'/home-customizer.php';
  require_once __DIR__.'/blog-customizer.php';
  require_once __DIR__.'/contact-customizer.php';

}