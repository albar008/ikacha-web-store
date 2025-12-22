<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <!--
    ▗▖  ▗▖ ▗▄▖ ▗▖  ▗▖ ▗▄▖ ▗▖ ▗▖ ▗▄▄▖▗▄▄▄▖▗▄▄▖ ▗▖ ▗▖▗▖ ▗▖
▐▛▚▞▜▌▐▌ ▐▌▐▛▚▞▜▌▐▌ ▐▌▐▌▗▞▘▐▌     █  ▐▌ ▐▌▐▌ ▐▌▐▌▗▞▘
▐▌  ▐▌▐▛▀▜▌▐▌  ▐▌▐▛▀▜▌▐▛▚▖  ▝▀▚▖  █  ▐▛▀▚▖▐▌ ▐▌▐▛▚▖ 
▐▌  ▐▌▐▌ ▐▌▐▌  ▐▌▐▌ ▐▌▐▌ ▐▌▗▄▄▞▘▗▄█▄▖▐▙▄▞▘▝▚▄▞▘▐▌ ▐▌
  -->
  <!-- email: business@moh-albar.my.id or albar@comintel-tp.com	| Professional Web Developer | Odoo Developer  -->

  <meta charset="<?php bloginfo('charset') ?>" />
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <!-- favicon icon -->
  <!-- <link rel="shortcut icon" href="images/favicon.png"> -->
  <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->
  <!-- google fonts preconnect -->
  <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<?php
if (!function_exists('wp_body_open')) {
  function wp_body_open()
  {
    do_action('wp_body_open');
  }
}
?>

<body <?php body_class(['custom-cursor']); ?> data-mobile-nav-style="classic">
  <?php wp_body_open() ?>

  <!-- start cursor -->
  <div class="cursor-page-inner">
    <div class="circle-cursor circle-cursor-inner"></div>
    <div class="circle-cursor circle-cursor-outer"></div>
  </div>
  <!-- end cursor -->

  <!-- start header -->
  <header>
    <!-- start navigation -->
    <nav
      class="navbar navbar-expand-lg header-transparent bg-transparent disable-fixed">
      <div class="container-fluid">
        <div class="col-auto col-lg-2 me-lg-0 me-auto">
          <a class="navbar-brand" href="<?php echo esc_url(site_url('/')) ?>">
            <img src="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh@2x.png') ?>" alt=""
              class="default-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh@2x.png') ?>" alt=""
              class="alt-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo@2x.png') ?>" alt=""
              class="mobile-logo">
          </a>
        </div>
        <div class="col-auto menu-order position-static">
          <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-label="Toggle navigation">
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
            <span class="navbar-toggler-line"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav alt-font">
              <li class="nav-item <?php if(is_front_page()) echo "active" ?>"><a href="<?php echo esc_url(site_url('/')) ?>" class="nav-link">Home</a></li>
              <li class="nav-item <?php if(is_page('about')) echo "active" ?>"><a href="<?php echo esc_url(site_url('about')) ?>" class="nav-link">Who we are</a>
              </li>
              <li class="nav-item <?php if(is_shop() or is_product() or is_cart() or is_checkout()) echo "active" ?>"><a href="<?php echo esc_url(site_url('shop')) ?>" class="nav-link">Shop</a></li>
              <li class="nav-item <?php if(get_post_type() === 'post') echo "active" ?>"><a href="<?php echo esc_url(site_url('blog')) ?>" class="nav-link">Blog</a></li>
              <li class="nav-item <?php if(is_page('contact')) echo "active" ?>"><a href="<?php echo esc_url(site_url('contact')) ?>" class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-auto col-lg-2 text-end md-pe-0">
          <div class="header-icon">
            <?php if (!is_checkout() && !is_cart()) { ?>
              <div class="header-search-icon icon">
                <?php if (is_active_sidebar('mini-cart-widget')): ?>
                  <?php dynamic_sidebar('mini-cart-widget'); ?>
                <?php endif; ?>
              </div>
            <?php } ?>
            <div class="header-push-button icon">
              <div class="push-button">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- end navigation -->
    <!-- start push popup -->
    <div class="push-menu push-menu-style-2 ps-50px pe-50px pt-4 pb-4 bg-white">
      <div class="left-circle bg-gradient-emerald-blue-emerald-green"></div>
      <span class="close-menu text-white bg-dark-gray"><i class="fa-solid fa-xmark"></i></span>
      <div class="push-menu-wrapper" data-scroll-options='{ "theme": "dark" }'>
        <div class="push-menu-header pt-10 pb-30 mb-30 d-block">
          <h4 class="alt-font fw-500 text-white lh-42">Scalable business for <span
              class="text-decoration-line-bottom-medium fw-700">startups</span></h4>
        </div>
        <div class="push-menu-address pt-30 lg-pt-10">
          <div class="icon-with-text-style-01 mb-15px">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-15px">
                <i class="feather icon-feather-map-pin text-dark-gray lh-inherit"></i>
              </div>
              <div class="feature-box-content">
                <p class="w-90 lh-26">401 Broadway, 24th Floor New York, NY 10013.</p>
              </div>
            </div>
          </div>
          <div class="icon-with-text-style-01 mb-15px">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-15px">
                <i class="feather icon-feather-mail text-dark-gray lh-inherit"></i>
              </div>
              <div class="feature-box-content">
                <a href="mailto:info@yourdomain.com">info@yourdomain.com</a>
              </div>
            </div>
          </div>
          <div class="icon-with-text-style-01">
            <div class="feature-box feature-box-left-icon last-paragraph-no-margin">
              <div class="feature-box-icon me-15px">
                <i class="feather icon-feather-phone-call text-dark-gray lh-inherit"></i>
              </div>
              <div class="feature-box-content">
                <a href="tel:1800222000">1-800-222-000</a>
              </div>
            </div>
          </div>
          <div class="separator-line-1px w-100 bg-extra-medium-gray d-block mt-30px mb-30px"></div>
        </div>
        <div class="push-menu-social last-paragraph-no-margin">
          <div class="elements-social social-text-style-01">
            <ul class="medium-icon dark fw-500">
              <li><a class="facebook" href="https://www.facebook.com/" target="_blank">Fb.</a></li>
              <li><a class="linkedin" href="http://www.linkedin.com" target="_blank">In.</a></li>
              <li><a class="twitter" href="http://www.twitter.com" target="_blank">Tw.</a></li>
              <li><a class="dribbble" href="http://www.dribbble.com" target="_blank">Dr.</a></li>
            </ul>
          </div>
          <p class="fs-14">&COPY; Copyright 2025 <a href="<?php echo esc_url(site_url('/')) ?>">Mamaksibuk</a></p>
        </div>
      </div>
    </div>
    <!-- end push popup -->
  </header>
  <!-- end header -->