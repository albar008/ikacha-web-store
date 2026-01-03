<?php
if (!defined('ABSPATH')) {
  die;
}

$image_size_slider = get_image_sizes('mamak_slider_image');
new \Kirki\Panel(
  'panel_mamak_home',
  [
    'title' => esc_html__('Mamak Home Page', 'mamak'),
    'description' => esc_html__('Home Page Customizer', 'mamak'),
    'active_callback' => 'is_front_page',
  ]
);

new \Kirki\Section(
  'sec_home_service',
  [
    'title' => 'Section Service',
    'description' => esc_html__('Customize Home Service Section', 'mamak'),
    'panel' => 'panel_mamak_home',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_service_title',
    'label' => esc_html__('Section Service Title', 'mamak'),
    'description' => esc_html__('Please, insert the Title', 'mamak'),
    'section' => 'sec_home_service',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_service_subtitle',
    'label' => esc_html__('Section Service Subtitle', 'mamak'),
    'description' => esc_html__('Please, insert the Subtitle', 'mamak'),
    'section' => 'sec_home_service',
  ]
);


new \Kirki\Section(
  'sec_home_banner1',
  [
    'title' => 'Section Banner1',
    'description' => esc_html__('Customize Home Banner1 Section', 'mamak'),
    'panel' => 'panel_mamak_home',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_banner1_main_text',
    'label' => esc_html__('Banner1 Main Text', 'mamak'),
    'description' => '',
    'section' => 'sec_home_banner1',
  ]
);

new \Kirki\Field\Repeater(
  [
    'settings' => 'set_home_banner1_secondary_text',
    'label' => esc_html__('Banner1 Secondary Text', 'mamak'),
    'section' => 'sec_home_banner1',
    'row_label' => [
      'value' => esc_html__('Secondary Text', 'mamak'),
    ],
    'choices' => [
      'limit' => 3
    ],
    'fields' => [
      'secondary_text' => [
        'type' => 'text',
        'label' => esc_html__('Text', 'mamak'),
        'description' => '',
      ],
    ],
  ]
);


new \Kirki\Section(
  'sec_home_newsletter',
  [
    'title' => 'Section Newsletter',
    'description' => esc_html__('Customize Home Newsletter Section', 'mamak'),
    'panel' => 'panel_mamak_home',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_home_newsletter_title',
    'label' => esc_html__('Title', 'mamak'),
    'description' => '',
    'section' => 'sec_home_newsletter',
  ]
);

new \Kirki\Field\Toggle(
  [
    'settings' => 'set_home_is_show_newsletter',
    'label' => esc_html__('Is Show Newsletter', 'mamak'),
    'description' => '',
    'section' => 'sec_home_newsletter',
    'default' => true,
  ]
);

// new \Kirki\Field\Text(
//   [
//     'settings' => 'set_home_newsletter_btn_text',
//     'label' => esc_html__('Button Text', 'mamak'),
//     'description' => '',
//     'section' => 'sec_home_newsletter',
//   ]
// );