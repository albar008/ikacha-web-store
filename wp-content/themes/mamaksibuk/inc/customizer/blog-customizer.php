<?php
if (!defined('ABSPATH')) {
  die;
}

$image_size_slider = get_image_sizes('mamak_slider_image');
new \Kirki\Panel(
  'panel_mamak_blog',
  [
    'title' => esc_html__('Mamak Blog Page', 'mamak'),
    'description' => esc_html__('Blog Page Customizer', 'mamak'),
    'active_callback' => function () {
      return get_post_type() === 'post';
    }
  ]
);

new \Kirki\Section(
  'sec_blog_header',
  [
    'title' => 'Header',
    'description' => esc_html__('Customize Header Section', 'mamak'),
    'panel' => 'panel_mamak_blog',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_blog_header_title',
    'label' => esc_html__('Title', 'mamak'),
    'description' => esc_html__('Please, insert the Title', 'mamak'),
    'section' => 'sec_blog_header',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_blog_header_subtitle',
    'label' => esc_html__('Subtitle', 'mamak'),
    'description' => esc_html__('Please, insert the Subtitle', 'mamak'),
    'section' => 'sec_blog_header',
  ]
);

new \Kirki\Field\Textarea(
  [
    'settings' => 'set_blog_header_short_desc',
    'label' => esc_html__('Short Desc', 'mamak'),
    'description' => esc_html__('Please, insert the Description', 'mamak'),
    'section' => 'sec_blog_header',
    'input_attrs' => [
      'maxlength' => 200,
    ]
  ]
);

new \Kirki\Field\Image(
  [
    'settings' => 'set_blog_header_image',
    'label' => esc_html__('Header Image', 'mamak'),
    'section' => 'sec_blog_header',
    'description' => "For best result the resolutions is $image_size_slider[width] X $image_size_slider[height] or higher",
    'choices' => [
      'save_as' => 'id',
    ],
  ]
);

// new \Kirki\Field\Text(
//   [
//     'settings' => 'set_blog_header_overlay_text',
//     'label' => esc_html__('Overlay Text', 'mamak'),
//     'description' => esc_html__('Please, insert the text. (maxlength : 5)', 'mamak'),
//     'section' => 'sec_blog_header',
//     'input_attrs' => [
//       'maxlength' => 5,
//     ]
//   ]
// );

new \Kirki\Field\Color_Palette(
  [
    'settings' => 'set_blog_header_overlay_text_color',
    'label' => esc_html__('Overlay Text Color-Palette', 'mamak'),
    'description' => esc_html__('This is a color-palette control for overlay text', 'mamak'),
    'section' => 'sec_blog_header',
    'default' => '#ffffff',
    'choices' => [
      'colors' => ['#000000', '#222222', '#444444', '#666666', '#888888', '#aaaaaa', '#cccccc', '#eeeeee', '#ffffff'],
      'style' => 'round',
    ],
  ]
);

// new \Kirki\Section(
//   'sec_blog_header2',
//   [
//     'title' => esc_html__('Site Structure', 'kirki-pro'),
//     'panel' => 'panel_mamak_blog',
//     'tabs' => [
//       'general' => [
//         'label' => esc_html__('General', 'kirki-pro'),
//       ],
//       'design' => [
//         'label' => esc_html__('Design', 'kirki-pro'),
//       ],
//     ],
//   ]
// );

// new \Kirki\Field\Text(
//   [
//     'settings' => 'text_control',
//     'label' => esc_html__('Text', 'kirki-pro'),
//     'section' => 'sec_blog_header2',
//     'tab' => 'general',
//   ]
// );

// new \Kirki\Field\Slider(
//   [
//     'settings' => 'slider_control',
//     'label' => esc_html__('Slider', 'kirki-pro'),
//     'section' => 'sec_blog_header2',
//     'tab' => 'design',
//     'default' => 1.5,
//     'choices' => [
//       'min' => 0,
//       'max' => 3,
//       'step' => 0.5,
//     ],
//   ]
// );