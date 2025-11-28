<?php

add_filter('woocommerce_form_field_text', 'mamak_wc_form_field_text', 10, 4);

function mamak_wc_form_field_text($field, $key, $args, $value){
  // $field = '<input type="' . esc_attr( $args['type'] ) . '" class="input-text form-control' . esc_attr( implode( ' ', $args['input_class'] ) ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '"  value="' . esc_attr( $value ) . '" ' . ' />';
  return $field;
}