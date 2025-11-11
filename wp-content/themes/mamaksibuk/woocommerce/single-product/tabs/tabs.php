<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.8.0
 */

if (!defined('ABSPATH')) {
  exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)): ?>

  <ul class="nav nav-tabs border-0 justify-content-center alt-font fs-19" role="tablist">
    <?php 
    $keyTmp = 0;
    foreach ($product_tabs as $key => $product_tab): ?>
      <li role="presentation" class="nav-item"
        id="tab-title-<?php echo esc_attr($key); ?>">
        <a class="nav-link <?php echo $keyTmp===0 ? 'active': '' ?>" href="#tab-<?php echo esc_attr($key); ?>" role="tab" data-bs-toggle="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
          <?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
          <span class="tab-border bg-dark-gray"></span>
        </a>
      </li>
    <?php $keyTmp++; endforeach; ?>
  </ul>
  <div class="mb-5 h-1px w-100 bg-extra-medium-gray sm-mt-10px xs-mb-8"></div>
  <div class="tab-content">
    <?php 
    $keyTmp = 0;
    foreach ($product_tabs as $key => $product_tab): ?>
      <div class="tab-pane fade in <?php echo $keyTmp===0 ? 'active show': '' ?>"
        id="tab-<?php echo esc_attr($key); ?>" role="tabpanel"
        aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
        <?php
        if (isset($product_tab['callback'])) {
          call_user_func($product_tab['callback'], $key, $product_tab);
        }
        ?>
      </div>
    <?php $keyTmp++; endforeach; ?>
  </div>

  <?php do_action('woocommerce_product_after_tabs'); ?>

<?php endif; ?>