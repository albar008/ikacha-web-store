<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
  <!--

   _______  _______                  _______  _        ______   _______  _______     _______          _________ ______  
(       )(  ___  )|\     /|       (  ___  )( \      (  ___ \ (  ___  )(  ____ )   (       )|\     /|\__   __/(  __  \ 
| () () || (   ) || )   ( |       | (   ) || (      | (   ) )| (   ) || (    )|   | () () |( \   / )   ) (   | (  \  )
| || || || |   | || (___) | _____ | (___) || |      | (__/ / | (___) || (____)|   | || || | \ (_) /    | |   | |   ) |
| |(_)| || |   | ||  ___  |(_____)|  ___  || |      |  __ (  |  ___  ||     __)   | |(_)| |  \   /     | |   | |   | |
| |   | || |   | || (   ) |       | (   ) || |      | (  \ \ | (   ) || (\ (      | |   | |   ) (      | |   | |   ) |
| )   ( || (___) || )   ( |       | )   ( || (____/\| )___) )| )   ( || ) \ \__ _ | )   ( |   | | _ ___) (___| (__/  )
|/     \|(_______)|/     \|       |/     \|(_______/|/ \___/ |/     \||/   \__/(_)|/     \|   \_/(_)\_______/(______/ 
                                                                                                                      
email: business@moh-albar.my.id	
  
-->

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

<body <?php body_class(); ?> data-mobile-nav-style="classic">
  <?php wp_body_open() ?>

  <!-- start header -->
  <header>
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
      <div class="container-fluid">
        <div class="col-auto col-lg-2 me-lg-0 me-auto">
          <a class="navbar-brand" href="<?php echo esc_url(site_url('/')) ?>">
            <img src="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh@2x.png') ?>" alt=""
              class="default-logo">
            <img src="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo-black.png') ?>"
              data-at2x="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo-black@2x.png') ?>" alt=""
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
            <ul class="navbar-nav alt-font text-uppercase">
              <li class="nav-item"><a href="<?php echo esc_url(site_url('/')) ?>" class="inner-link nav-link">Home</a>
              </li>
              <li class="nav-item"><a href="#about" class="inner-link nav-link">About</a></li>
              <li class="nav-item"><a href="#author" class="inner-link nav-link">Blog</a></li>
              <li class="nav-item"><a href="#contact" class="inner-link nav-link">Contact</a></li>
              <li class="nav-item"><a href="<?php echo esc_url(site_url('shop')) ?>"
                  class="inner-link nav-link">Shop</a></li>
            </ul>
          </div>
        </div>
        <div class="col-auto col-lg-2 text-end">
          <?php if(!is_checkout() && !is_cart()) { ?>
          <div class="header-icon">
            <div class="header-button">
              <a href="#"
                class="btn btn-transparent-white border-1 border-color-transparent-white-very-light btn-small btn-switch-text btn-round-edge section-link">
                <!-- <span>
                  <span class="btn-double-text fw-400" data-text="Purchase now!">Purchase now!</span>
                  <span><i class="feather icon-feather-shopping-bag text-base-color"></i></span>
                </span> -->
                <?php if (is_active_sidebar('mini-cart-widget')): ?>
                  <?php dynamic_sidebar('mini-cart-widget'); ?>
                <?php endif; ?>
              </a>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </nav>
    <!-- end navigation -->
  </header>
  <!-- end header -->