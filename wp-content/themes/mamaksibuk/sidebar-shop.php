<?php

?>
<div class="sidebar-product-filters">
  <div class="shop-sidebar-filter-containe">
    <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Search</span>
    <div class="d-inline-block w-90 sm-w-100 newsletter-style-02 position-relative product-search-form">
      <?php get_search_form() ?>
    </div>
  </div>
  <div class="shop-sidebar-filter-container sidebar-cat-filter mt-3 pt-3">
    <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Categories</span>
    <ul class="sidebar-cat-filter__list">
      <?php
      $cats = wp_list_categories([
        'title_li' => '',
        'hide_title_if_empty' => true,
        'show_count' => true,
        'taxonomy' => 'product_cat',
        'show_option_all' => 'All',
        'hide_empty' => false
      ]);
      echo $cats;
      ?>
    </ul>
  </div>
</div>