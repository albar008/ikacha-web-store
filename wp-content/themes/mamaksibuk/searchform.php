<?php


?>

<form action="<?php echo esc_url(site_url('/')) ?>" method="get" class="position-relative w-100">
  <input class="input-large bg-white border-radius-4px w-100 form-control"
    type="search" name="s" placeholder="Search Product" value="<?php echo esc_html(get_search_query()) ?>">
  <button class="btn" style="padding-left: 0" aria-label="submit"><i
      class="icon feather icon-feather-search icon-extra-medium text-dark-gray"></i></button>
  <?php if (class_exists('WooCommerce') && (is_shop() || is_product_category())) { ?>
    <input type="hidden" name="post_type" value="product" />
  <?php } ?>
  <!-- <button type="submit">Search</button> -->
</form>