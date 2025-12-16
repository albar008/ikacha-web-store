<?php

if (!defined('ABSPATH')) {
  die;
}

function theme_customizer($wp_customize)
{
  $wp_customize->remove_panel("widgets");
  $wp_customize->remove_panel('nav_menus');
}
add_action('customize_register', 'theme_customizer');


add_action('after_setup_theme', 'initialize_kirki_settings', 20);
function initialize_kirki_settings()
{
  if (!class_exists('Kirki')) {
    return;
  }
  
  require_once __DIR__.'/home-customizer.php';

}