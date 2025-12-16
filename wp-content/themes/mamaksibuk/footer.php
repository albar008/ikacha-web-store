<!-- start footer -->
<footer class="footer-demo bg-dark-slate-blue pb-4 sm-pb-50px">
  <div class="container">
    <div class="row flex-lg-row flex-column align-items-center">
      <!-- start footer column -->
      <div class="col-auto text-center text-lg-start md-mb-20px">
        <a href="<?php echo esc_url(site_url('/')) ?>" class="footer-logo d-inline-block"><img
            src="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh.png') ?>"
            data-at2x="<?php echo get_theme_file_uri('assets/images/mamak-sibuk-logo2-wh@2x.png') ?>" alt=""></a>
      </div>
      <!-- end footer column -->
      <!-- start footer column -->
      <div class="col text-center text-lg-end">
        <ul class="footer-navbar fw-500 lh-normal">
          <li class="nav-item active"><a href="<?php echo esc_url(site_url('/')) ?>"
              class="inner-link nav-link">Home</a></li>
          <li class="nav-item"><a href="#about" class="inner-link nav-link">About</a></li>
          <li class="nav-item"><a href="#author" class="inner-link nav-link">Blog</a></li>
          <li class="nav-item"><a href="#contact" class="inner-link nav-link">Contact</a></li>
          <li class="nav-item"><a href="<?php echo esc_url(site_url('shop')) ?>" class="inner-link nav-link">Shop</a>
          </li>
        </ul>
      </div>
      <!-- end footer column -->
    </div>
    <div class="row justify-content-center align-items-center pt-40px md-pt-30px">
      <div class="col-12 mb-40px md-mb-35px">
        <!-- start divider -->
        <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
        <!-- end divider -->
      </div>
      <!-- start footer column -->
      <div
        class="col-xl-7 col-md-8 fs-13 text-center text-md-start last-paragraph-no-margin lh-24 order-2 order-md-1 sm-mt-15px">
        This site is protected by reCAPTCHA and the Google <a href="#" class="text-decoration-line-bottom">privacy
          policy</a> and <a href="#" class="text-decoration-line-bottom">terms of service</a> apply. You must not use
        this website if you disagree with any of these website standard terms and conditions.</div>
      <!-- end footer column -->
      <!-- start footer column -->
      <div class="col-xl-5 col-md-4 text-center text-md-end elements-social social-icon-style-08 order-1 order-md-2">
        <ul class="medium-icon light">
          <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i
                class="fa-brands fa-facebook-f"></i></a></li>
          <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i
                class="fa-brands fa-instagram"></i></a></li>
          <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
          </li>
          <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i
                class="fa-brands fa-dribbble"></i></a></li>
        </ul>
      </div>
      <!-- end footer column -->
    </div>
  </div>
</footer>
<!-- end footer -->

<!-- start cookie message -->
<div id="cookies-model" class="cookie-message bg-dark-gray border-radius-8px">
  <div class="cookie-description fs-14 text-white mb-20px lh-22">We use cookies to enhance your browsing experience,
    serve personalized ads or content, and analyze our traffic. By clicking "Allow cookies" you consent to our use of
    cookies. </div>
  <div class="cookie-btn">
    <a href="#"
      class="btn btn-transparent-white border-1 border-color-transparent-white-light btn-very-small btn-switch-text btn-rounded w-100 mb-15px"
      aria-label="btn">
      <span>
        <span class="btn-double-text" data-text="Cookie policy">Cookie policy</span>
      </span>
    </a>
    <a href="#" class="btn btn-white btn-very-small btn-switch-text btn-box-shadow accept_cookies_btn btn-rounded w-100"
      data-accept-btn aria-label="text">
      <span>
        <span class="btn-double-text" data-text="Allow cookies">Allow cookies</span>
      </span>
    </a>
  </div>
</div>
<!-- end cookie message -->

<?php if (!is_404()) { ?>
  <!-- start scroll progress -->
  <div class="scroll-progress d-none d-xxl-block">
    <a href="#" class="scroll-top" aria-label="scroll">
      <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
    </a>
  </div>
  <!-- end scroll progress -->
<?php } ?>
<?php
wp_footer();
?>
</body>

</html>