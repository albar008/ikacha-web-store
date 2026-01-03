<?php
if (!defined('ABSPATH')) {
  die;
}

$image_size_slider = get_image_sizes('mamak_slider_image');
new \Kirki\Panel(
  'panel_mamak_contact',
  [
    'title' => esc_html__('Mamak Contact Page', 'mamak'),
    'description' => esc_html__('Contact Page Customizer', 'mamak'),
    'active_callback' => function () {
      return is_page('contact'); }
  ]
);

new \Kirki\Section(
  'sec_contact_header',
  [
    'title' => 'Header',
    'description' => esc_html__('Customize Header Section', 'mamak'),
    'panel' => 'panel_mamak_contact',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_contact_header_title',
    'label' => esc_html__('Title', 'mamak'),
    'description' => esc_html__('Please, insert the Title', 'mamak'),
    'section' => 'sec_contact_header',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_contact_header_subtitle',
    'label' => esc_html__('Subtitle', 'mamak'),
    'description' => esc_html__('Please, insert the Subtitle', 'mamak'),
    'section' => 'sec_contact_header',
  ]
);

new \Kirki\Field\Image(
  [
    'settings' => 'set_contact_header_image',
    'label' => esc_html__('Header Image', 'mamak'),
    'section' => 'sec_contact_header',
    'description' => "For best result the resolutions is $image_size_slider[width] X $image_size_slider[height] or higher",
    'choices' => [
      'save_as' => 'id',
    ],
  ]
);