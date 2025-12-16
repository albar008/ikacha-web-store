<?php
$image_size_hero = get_image_sizes('mamak_slider_image');
new \Kirki\Panel(
  'panel_mamak_home',
  [
    'title' => esc_html__('Mamak Home', 'mamak'),
    'description' => esc_html__('Home Page Customizer', 'mamak'),
  ]
);

new \Kirki\Section(
  'sec_hero',
  [
    'title' => 'Hero',
    'description' => esc_html__('Customize Hero Section', 'mamak'),
    'panel' => 'panel_mamak_home',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_hero_title',
    'label' => esc_html__('Title', 'mamak'),
    'description' => esc_html__('Please, insert the Title', 'mamak'),
    'section' => 'sec_hero',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_hero_subtitle',
    'label' => esc_html__('Subtitle', 'mamak'),
    'description' => esc_html__('Please, insert the Subtitle', 'mamak'),
    'section' => 'sec_hero',
  ]
);

new \Kirki\Field\Image(
  [
    'settings' => 'hero_image',
    'label' => esc_html__('Hero Image', 'mamak'),
    'section' => 'sec_hero',
    'description' => "For best result the resolutions is $image_size_hero[width] X $image_size_hero[height] or higher",
    'choices'     => [
			'save_as' => 'id',
		],
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_hero_cta_btn_text',
    'label' => esc_html__('Button CTA Text', 'mamak'),
    'section' => 'sec_hero',
  ]
);

new \Kirki\Field\Text(
  [
    'settings' => 'set_hero_cta_btn_icon',
    'label' => esc_html__('Button CTA Icon', 'mamak'),
    'section' => 'sec_hero',
    'description' => 'Please insert the icon name. See <a target="_blank" href="' . esc_url(site_url('feather-icons')) . '">Feather Icons</a>, 
            <a target="_blank" href="' . esc_url(site_url('font-awesome')) . '">Font Awesome</a>,
            <a target="_blank" href="' . esc_url(site_url('bs-icons')) . '">Bootstrap Icons</a>,
            <a target="_blank" href="' . esc_url(site_url('icons-mind')) . '">Icons Mind</a>, or 
            <a target="_blank" href="' . esc_url(site_url('themify')) . '">Themify</a>. Copy the name and paste here',
  ]
);

new \Kirki\Field\URL(
  [
    'settings' => 'set_hero_cta_btn_url',
    'label' => esc_html__('Button CTA URL', 'mamak'),
    'section' => 'sec_hero'
  ]
);

new \Kirki\Section(
  'sec_upcoming_event',
  [
    'title' => 'Upcoming Event',
    'description' => esc_html__('Upcomint Event Countdown', 'mamak'),
    'panel' => 'panel_mamak_home',
  ]
);

new \Kirki\Field\Image(
  [
    'settings' => 'upcoming_event_banner_img',
    'label' => esc_html__('Upcoming Event Banner Image', 'mamak'),
    'section' => 'sec_upcoming_event',
    'description' => "For best result the resolutions is $image_size_hero[width] X $image_size_hero[height] or higher",
    'choices'     => [
			'save_as' => 'id',
		],
  ]
);