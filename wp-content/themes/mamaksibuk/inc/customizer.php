<?php 
function theme_customizer($wp_customize){
  $wp_customize->add_panel('panel_mamak_home', array(
    'title' => 'Home',
    'description' => 'Customize Home Page'
  ));

    $wp_customize->add_section('sec_hero', array(
      'title' => 'Hero',
      'description' => 'Customize Hero Section',
      'panel' => 'panel_mamak_home',
    ));

        $wp_customize->add_setting('set_hero_main_title', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('set_hero_main_title', array(
          'type' => 'text',
          'label' => 'Main Title',
          'description' => 'Please, insert text for the Main Title',
          'section' => 'sec_hero'
        ));

        $wp_customize->add_setting('set_hero_main_title_highlighted', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('set_hero_main_title_highlighted', array(
          'type' => 'text',
          'label' => 'Main Title Highlighted',
          'description' => 'Please insert a portion of the main title text that highlighted',
          'section' => 'sec_hero'
        ));


        $wp_customize->add_setting('set_btn_cta_text', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('set_btn_cta_text', array(
          'type' => 'text',
          'label' => 'Button CTA Text',
          'description' => 'Please insert a text for CTA Button',
          'section' => 'sec_hero'
        ));

        $wp_customize->add_setting('set_btn_cta_text_hover', array(
          'type' => 'theme_mod',
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('set_btn_cta_text_hover', array(
          'type' => 'text',
          'label' => 'Button CTA Text Hover',
          'description' => 'Please insert a text for CTA Button when hover',
          'section' => 'sec_hero'
        ));


}
add_action('customize_register', 'theme_customizer');