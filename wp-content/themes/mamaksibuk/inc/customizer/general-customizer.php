<?php
if (!defined('ABSPATH')) {
  die;
}

$image_size_slider = get_image_sizes('mamak_slider_image');
new \Kirki\Panel(
  'panel_mamak_general',
  [
    'title' => esc_html__('Mamak General Page Customizer', 'mamak'),
    'description' => esc_html__('General Page Customizer', 'mamak'),
  ]
);

new \Kirki\Section(
  'sec_off_canvas_right',
  [
    'title' => 'Section Off Canvas',
    'description' => esc_html__('Customize Off Canvas', 'mamak'),
    'panel' => 'panel_mamak_general',
  ]
);

new \Kirki\Field\Editor(
  [
    'settings' => 'set_off_canvas_title',
    'label' => esc_html__('Title', 'mamak'),
    'description' => esc_html__('Please, insert the Title (Maximum 50 characters)', 'mamak'),
    'section' => 'sec_off_canvas_right',
    'default' => '',
    'choices' => [
      'mediaButtons' => false,
      "tinymce" => [
        'wpautop' => true,
        'toolbar1' => 'bold, italic, underline'
      ]
    ],
    'sanitize_callback' => function ($value) {
      $value_test = wp_strip_all_tags($value);
      if (mb_strlen($value_test) > 50){
        return mb_substr($value_test, 0, 50);
      } else {
        return wp_kses_post($value);
      }
    },
  ]
);

new \Kirki\Section(
  'sec_copyright_text',
  [
    'title' => 'Section Copyright Text',
    'description' => esc_html__('Customize Copyright Text', 'mamak'),
    'panel' => 'panel_mamak_general',
  ]
);

new \Kirki\Field\Editor(
  [
    'settings' => 'set_copyright_text',
    'label' => esc_html__('Text', 'mamak'),
    'description' => esc_html__('Please, insert the Text (Maximum 30 characters)', 'mamak'),
    'section' => 'sec_copyright_text',
    'default' => '',
    'choices' => [
      'mediaButtons' => false,
      "tinymce" => [
        'wpautop' => true,
        'toolbar1' => 'bold, italic, underline, link'
      ]
    ],
    'sanitize_callback' => function ($value) {
      $value_test = wp_strip_all_tags($value);
      if (mb_strlen($value_test) > 50){
        return mb_substr($value_test, 0, 50);
      } else {
        return wp_kses_post($value);
      }
    },
  ]
);
