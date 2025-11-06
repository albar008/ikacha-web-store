<?php
get_header();
?>
<!-- start banner -->
<section id="home" class="p-0 cover-background full-screen bg-dark-gray ipad-top-space-margin md-h-600px sm-h-auto"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/demo-ebook-bg.jpg') ?>')">
  <div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-7 position-relative h-100 order-2 order-md-1">
        <div class="position-absolute sm-position-relative left-0px bottom-0px md-bottom-25px p-2 z-index-2"
          data-anime='{ "el": "childs", "translateY": [30, 0], "perspective": [500,1200], "scale": [1.05, 1], "rotateY": [-40, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
          <img src="https://placehold.co/900x1162" alt="">
        </div>
      </div>
      <div class="col-md-5 md-mb-70px sm-mb-40px sm-mt-50px position-relative text-white order-1 order-md-2"
        data-anime='{ "el": "childs", "opacity": [0, 1], "translateX": [100, 0], "staggervalue": 300, "easing": "easeOutQuad" }'>
        <h1 class="alt-font fw-400 fs-100 lg-fs-80 sm-fs-65 text-uppercase mb-35px sm-mb-25px ls-minus-2px">
          <span>Sell your book</span>
          <div class="highlight-separator" data-shadow-animation="true" data-animation-delay="500">fast<span><img
                src="<?php echo get_theme_file_uri('assets/images/highlight-separator-ebook.svg') ?>" alt=""></span>
          </div>
        </h1>
        <div class="newsletter-style-05 mb-30px w-90 md-w-100">
          <button
            class="btn btn-extra-large btn-round-edge btn-base-color btn-box-shadow btn-switch-text w-100 submit ls-0px"><span>
              <span class="btn-double-text fw-400" data-text="Limited edition only!">Get Started now!</span>
            </span>
          </button>
        </div>
        <div class="feature-box feature-box-left-icon-middle">
          <div
            class="feature-box-icon feature-box-icon-rounded w-60px h-60px rounded-circle bg-black-transparent-light me-10px text-center lh-30">
            <i class="bi bi-people icon-extra-medium text-white"></i>
          </div>
          <div class="feature-box-content last-paragraph-no-margin text-mountain-gray fs-17 lh-26">Read by over <span
              class="text-white text-decoration-line-bottom">60,000+</span> fashion designers.</div>
        </div>
      </div>
    </div>
  </div>
  <div
    class="marquees-text fw-600 fs-180 lg-fs-160 ls-minus-6px text-base-color text-nowrap position-absolute bottom-23px md-bottom-10px sm-bottom-70px right-minus-0px opacity-1">
    fastest selling book</div>
</section>
<!-- end banner -->
<!-- start section -->
<section id="about"
  class="overlap-height position-relative background-position-center-top md-pt-50px sm-pt-20px overflow-hidden"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/vertical-line-bg-medium-gray.svg') ?>')">
  <div class="container overlap-gap-section position-relative">
    <div class="position-absolute top-50px right-minus-50px lg-right-minus-20px d-none d-md-inline-block"><img
        src="https://placehold.co/140x140" data-bottom-top="transform: rotate(-10deg) translateY(50px)"
        data-top-bottom="transform:rotate(10deg) translateY(-50px)" alt="" /></div>
    <div class="position-absolute bottom-40px md-bottom-60px left-minus-50px"><img src="https://placehold.co/150x86"
        data-bottom-top="transform: rotate(10deg) translateX(50px)"
        data-top-bottom="transform:rotate(-10deg) translateX(-50px)" alt="" /></div>
    <div class="row mb-3">
      <div class="col-12 text-center"
        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <span class="d-block text-uppercase mb-5px text-base-color fw-500">Author of the year</span>
        <h2 class="fw-500 ls-minus-2px alt-font text-dark-gray text-uppercase">About The Book</h2>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center mb-5 md-mb-7"
      data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <!-- start features box item -->
      <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)"
        data-top-bottom="transform: translateY(-20px)">
        <div
          class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px">
          <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
            <i class="line-icon-Medal-2 icon-extra-large text-dark-gray"></i>
          </div>
          <div class="feature-box-content last-paragraph-no-margin">
            <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">10+ award achieved</span>
            <p>Lorem ipsum is simply printing typesetting.</p>
          </div>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(-20px)"
        data-top-bottom="transform: translateY(20px)">
        <div
          class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px">
          <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
            <i class="line-icon-Tablet-Phone icon-extra-large text-dark-gray"></i>
          </div>
          <div class="feature-box-content last-paragraph-no-margin">
            <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">Read on any device</span>
            <p>Lorem ipsum is simply printing typesetting.</p>
          </div>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class="col icon-with-text-style-10 sm-mb-30px" data-bottom-top="transform: translateY(20px)"
        data-top-bottom="transform: translateY(-20px)">
        <div
          class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px">
          <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
            <i class="line-icon-Loudspeaker icon-extra-large text-dark-gray"></i>
          </div>
          <div class="feature-box-content last-paragraph-no-margin">
            <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">Audio included</span>
            <p>Lorem ipsum is simply printing typesetting.</p>
          </div>
        </div>
      </div>
      <!-- end features box item -->
      <!-- start features box item -->
      <div class="col icon-with-text-style-10" data-bottom-top="transform: translateY(-20px)"
        data-top-bottom="transform: translateY(20px)">
        <div
          class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px">
          <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
            <i class="line-icon-Business-Man icon-extra-large text-dark-gray"></i>
          </div>
          <div class="feature-box-content last-paragraph-no-margin">
            <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">One million readers</span>
            <p>Lorem ipsum is simply printing typesetting.</p>
          </div>
        </div>
      </div>
      <!-- end features box item -->
    </div>
    <div class="row justify-content-center position-relative"
      data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <div class="col-auto text-center last-paragraph-no-margin">
        <div class="d-inline-block align-middle me-15px sm-m-5px"><img
            src="<?php echo get_theme_file_uri('assets/images/demo-ebook-01.jpg') ?>" alt=""></div>
        <div class="d-inline-block text-dark-gray fs-24 align-middle ls-minus-05px">I read a book one day and <span
            class="fw-500 text-decoration-line-bottom">my whole life was changed.</span></div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<section class="bg-very-light-gray pb-0">
  <div class="container overlap-section">
    <div
      class="row row-cols-1 row-cols-sm-3 g-0 align-items-center text-center text-lg-start justify-content-center bg-base-color border-radius-6px">
      <!-- start content box item -->
      <div
        class="col pt-35px pb-35px border-end xs-border-end-0 xs-border-bottom border-color-transparent-white-very-light">
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
          <div class="flex-shrink-0 me-20px md-me-0">
            <h2 class="mb-0 text-white fw-700 ls-minus-3px">4.98</h2>
          </div>
          <div class="text-dark-gray">
            <div class="fs-18 ls-1px">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <span class="fs-18 lh-22 d-block"><span class="text-decoration-line-bottom fw-600">2,488</span> based
              rating</span>
          </div>
        </div>
      </div>
      <!-- end content box item -->
      <!-- start content box item -->
      <div
        class="col pt-35px pb-35px border-end xs-border-end-0 xs-border-bottom border-color-transparent-white-very-light">
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
          <div class="flex-shrink-0 me-20px md-me-0">
            <h2 class="mb-0 bg-base-color text-white fw-700 ls-minus-2px">98<sup class="fs-30 top-minus-20px">%</sup>
            </h2>
          </div>
          <div class="text-dark-gray">
            <span class="fs-18 lh-24 d-block">Genuine repeated <br /><span
                class="text-decoration-line-bottom fw-600">happy readers.</span></span>
          </div>
        </div>
      </div>
      <!-- end content box item -->
      <!-- start content box item -->
      <div class="col pt-35px pb-35px">
        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
          <div class="flex-shrink-0 me-20px md-me-0">
            <h2 class="mb-0 bg-base-color text-white fw-700 ls-minus-2px">200<sup class="fs-30 top-minus-25px">+</sup>
            </h2>
          </div>
          <div class="text-dark-gray">
            <span class="fs-18 lh-24 d-block">Currently <span class="text-decoration-line-bottom fw-600">selling</span>
              <br />books per day.</span>
          </div>
        </div>
      </div>
      <!-- end content box item -->
    </div>
  </div>
</section>
<!-- start section -->
<section id="chapter" class="bg-very-light-gray overflow-hidden half-section pt-40px md-pt-50px md-pb-50px sm-pb-30px">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-7 sm-mb-30px"
        data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <span class="d-block text-uppercase mb-10px text-base-color fw-500">Chapters we've covered</span>
        <h2 class="fw-500 alt-font text-dark-gray text-uppercase ls-minus-2px">Chapters inside</h2>
        <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus"
          data-inactive-icon="icon-feather-plus">
          <!-- start accordion item -->
          <div class="accordion-item active-accordion">
            <div class="accordion-header border-bottom border-color-extra-medium-gray">
              <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01" aria-expanded="true"
                data-bs-parent="#accordion-style-02">
                <div class="accordion-title mb-0 position-relative text-dark-gray">
                  <i class="feather icon-feather-minus text-dark-gray"></i><span class="fw-500 fs-18">Basic elements of
                    fashion</span>
                </div>
              </a>
            </div>
            <div id="accordion-style-02-01" class="accordion-collapse collapse show"
              data-bs-parent="#accordion-style-02">
              <div class="accordion-body last-paragraph-no-margin border-bottom border-color-extra-medium-gray">
                <p class="w-90 md-w-100">Basic elements of design in fashion include lines, shapes, form, colour, and
                  texture, whereas the primary principles.</p>
              </div>
            </div>
          </div>
          <!-- end accordion item -->
          <!-- start accordion item -->
          <div class="accordion-item">
            <div class="accordion-header border-bottom border-color-extra-medium-gray">
              <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02" aria-expanded="false"
                data-bs-parent="#accordion-style-02">
                <div class="accordion-title mb-0 position-relative text-dark-gray">
                  <i class="feather icon-feather-plus"></i><span class="fw-500 fs-18">Textile simple wet
                    processing</span>
                </div>
              </a>
            </div>
            <div id="accordion-style-02-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
              <div class="accordion-body last-paragraph-no-margin border-bottom border-color-extra-medium-gray">
                <p class="w-90 md-w-100">Basic elements of design in fashion include lines, shapes, form, colour, and
                  texture, whereas the primary principles.</p>
              </div>
            </div>
          </div>
          <!-- end accordion item -->
          <!-- start accordion item -->
          <div class="accordion-item">
            <div class="accordion-header border-bottom border-color-transparent">
              <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-03" aria-expanded="false"
                data-bs-parent="#accordion-style-02">
                <div class="accordion-title mb-0 position-relative text-dark-gray">
                  <i class="feather icon-feather-plus"></i><span class="fw-500 fs-18">Fashion design art and
                    colors</span>
                </div>
              </a>
            </div>
            <div id="accordion-style-02-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
              <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent">
                <p class="w-90 md-w-100">Basic elements of design in fashion include lines, shapes, form, colour, and
                  texture, whereas the primary principles.</p>
              </div>
            </div>
          </div>
          <!-- end accordion item -->
        </div>
        <div class="d-flex align-middle mt-30px">
          <a href="#pricing"
            class="btn btn-dark-gray btn-large left-icon btn-box-shadow btn-switch-text btn-round-edge me-25px section-link">
            <span>
              <span><i class="feather icon-feather-shopping-bag text-base-color icon-small"></i></span>
              <span class="btn-double-text fw-400" data-text="Purchase now!">Purchase now!</span>
            </span>
          </a>
          <div class="d-inline-block align-middle">
            <div class="fs-18 ls-1px text-base-color lh-26">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <a href="#reviews" class="btn btn-link fs-16 text-dark-gray fw-500 thin section-link">Readers saying?<span
                class="bg-dark-gray"></span></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 col-md-5"
        data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="outside-box-right-50">
          <img src="https://placehold.co/1295x730" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="author"
  class="pb-0 border-bottom border-1 border-color-extra-medium-gray position-relative overflow-hidden accordion-bodybackground-position-center-top"
  style="background-image: url('<?php echo get_theme_file_uri('assets/images/vertical-line-bg-medium-gray.svg') ?>')">
  <div class="container position-relative">
    <div class="position-absolute bottom-150px left-minus-50px z-index-2"><img src="https://placehold.co/150x86"
        data-bottom-top="transform: rotate(10deg) translateX(50px)"
        data-top-bottom="transform:rotate(-10deg) translateX(-50px)" alt="" /></div>
    <div class="position-absolute top-0px lg-left-minus-150px left-minus-50px z-index-2 d-none d-lg-block"><img
        src="https://placehold.co/650x391" data-bottom-top="transform: rotate(20deg) translateY(50px)"
        data-top-bottom="transform:rotate(-20deg) translateY(-50px)" alt="" /></div>
    <div class="row align-items-end align-items-lg-center">
      <div class="col-md-6 order-2 order-md-1">
        <img class="w-100 position-relative bottom-minus-1px" src="https://placehold.co/610x615" alt="">
      </div>
      <div
        class="col-lg-5 offset-lg-1 col-md-6 order-1 order-md-2 last-paragraph-no-margin position-relative z-index-2 text-center text-md-start lg-mb-50px sm-mb-35px"
        data-anime='{ "el": "childs", "translateY": [30, 0], "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <span
          class="text-base-color fs-90 mb-10px d-block text-uppercase fancy-text-style-4 ls-minus-2px fw-600 alt-font">Hello!</span>
        <h3 class="fw-500 alt-font text-dark-gray text-uppercase ls-minus-1px mb-25px">I'm Herman miller</h3>
        <p class="w-75 lg-w-100 mb-25px">Lorem ipsum dolor amet consectetur adipiscing elit sed eiusmod incididunt ut
          labore et dolore magna aliqua. Lorem ipsum dolor consectetur adipiscing elit sed eiusmod incididunt.</p>
        <img src="<?php echo get_theme_file_uri('assets/images/demo-ebook-sign.png') ?>" alt="">
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-50px pb-50px">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-xl-6 col-lg-7 text-center md-mb-25px">
        <h6 class="fw-400 text-dark-gray ls-minus-05px mb-0"><i
            class="bi bi-chat-quote text-base-color icon-medium me-10px"></i>Most popular book <span
            class="fw-500 text-decoration-line-bottom-medium">written</span> in the year.</h6>
      </div>
      <div class="col-lg-5 offset-xl-1 text-center text-lg-start">
        <span class="fs-24 text-dark-gray">Reach me on <a href="https://twitter.com/" target="_blank"
            class="text-dark-gray text-dark-gray-hover"><i class="feather icon-feather-twitter text-info"></i> <span
              class="fw-500 text-decoration-line-bottom-medium">twitter</span></a> or <a
            href="mailto:help@yourdomain.com" class="text-dark-gray text-dark-gray-hover"><i
              class="feather icon-feather-mail text-primary"></i> <span
              class="fw-500 text-decoration-line-bottom-medium">email</span></a></span>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="reviews" class="overflow-hidden bg-gradient-very-light-gray">
  <div class="container-fluid">
    <div class="row justify-content-center mb-1">
      <div class="col-lg-7 text-center">
        <span class="d-block text-uppercase mb-5px text-base-color fw-500">Why you should buy this?</span>
        <h2 class="fw-500 alt-font text-dark-gray text-uppercase ls-minus-2px">Readers Reviews</h2>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-12 position-relative">
        <div
          class="outside-box-right-15 outside-box-left-15 lg-outside-box-right-30 lg-outside-box-left-30 md-outside-box-right-40 md-outside-box-left-40 sm-outside-box-right-0 sm-outside-box-left-0">
          <div class="swiper magic-cursor"
            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
            <div class="swiper-wrapper pt-20px pb-20px">
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/200x200" alt="" />
                      <p>Team of ThemeZaa has worked closely with us and never failed to follow our perfect business
                        requirements.</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Herman Miller, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/200x200" alt="" />
                      <p>I personally enjoyed the energy and the professional support the whole team gave to us into
                        creating website.</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Matthew Taylor, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/148x148" alt="" />
                      <p>They have provided superior quality of content marketing services. Very satisfied by choosing
                        them. Thank you so much!</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Shoko Mugikura, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/148x148" alt="" />
                      <p>Trust us we looked for a very long time and wasted thousands of dollars testing other teams and
                        outsource companies.</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Leonel Mooney, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/200x200" alt="" />
                      <p>Team of ThemeZaa has worked closely with us and never failed to follow our perfect business
                        requirements.</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Herman Miller, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/200x200" alt="" />
                      <p>I personally enjoyed the energy and the professional support the whole team gave to us into
                        creating website.</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Matthew Taylor, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/148x148" alt="" />
                      <p>They have provided superior quality of content marketing services. Very satisfied by choosing
                        them. Thank you so much!</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Shoko Mugikura, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
              <!-- start slider item -->
              <div class="swiper-slide">
                <!-- start review item -->
                <div class="review-style-05">
                  <div class="border-radius-4px bg-white box-shadow-large last-paragraph-no-margin">
                    <div class="d-flex align-items-center ps-45px pe-45px pt-35px pb-35px xl-p-25px">
                      <img class="rounded-circle w-110px md-w-75px h-110px md-h-75px me-30px"
                        src="https://placehold.co/148x148" alt="" />
                      <p>Trust us we looked for a very long time and wasted thousands of dollars testing other teams and
                        outsource companies.</p>
                    </div>
                    <div
                      class="d-flex align-items-center border-top border-color-extra-medium-gray pt-15px pb-15px ps-45px pe-45px xl-ps-25px xl-pe-25px">
                      <span class="fs-17 fw-500 text-dark-gray me-auto xs-fs-15">Leonel Mooney, ThemeZaa</span>
                      <div class="review-star-icon fs-19 xs-fs-15">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                          class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end review item -->
              </div>
              <!-- end slider item -->
            </div>
          </div>
        </div>
        <!-- start slider pagination -->
        <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
        <!-- end slider pagination -->
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <div
          class="d-inline-block bg-dark-gray text-white border-radius-4px ps-15px pe-15px fs-15 lh-36 ls-minus-1px me-15px sm-m-10px align-middle">
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <h6 class="text-dark-gray fw-400 mb-0 d-inline-block align-middle ls-minus-1px">Check all <span
            class="fw-700">3,583</span> readers reviews on <a href="https://www.amazon.com/" target="_blank"><img
              src="https://placehold.co/142x70" alt="" /></a></h6>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="subscribe" class="half-section bg-base-color">
  <div class="container position-relative">
    <div
      class="position-absolute left-0px top-minus-150px md-top-minus-110px background-no-repeat background-size-100 h-300px w-100 d-none d-md-inline-block"
      style="background-image: url('https://placehold.co/1190x262')" data-bottom-top="transform: translateY(-50px)"
      data-top-bottom="transform: translateY(50px)"></div>
    <div class="row align-items-center justify-content-center position-relative">
      <div class="col-xxl-5 col-xl-6 col-lg-7 text-center text-lg-end md-mb-30px">
        <h2 class="fw-500 alt-font text-white text-uppercase ls-minus-2px mb-0">Free chapter of book</h2>
      </div>
      <div class="col-xxl-5 col-xl-6 col-lg-5 text-center text-lg-start">
        <div class="d-inline-block w-90 sm-w-100 newsletter-style-02 position-relative">
          <!-- start form -->
          <form action="email-templates/subscribe-newsletter.php" method="post" class="position-relative w-100">
            <input
              class="input-large bg-white border-radius-4px border-color-white w-100 box-shadow-double-large form-control required"
              type="email" name="email" placeholder="Enter your email address">
            <input type="hidden" name="redirect" value="">
            <button class="btn submit" aria-label="submit"><i
                class="icon feather icon-feather-mail icon-extra-medium text-dark-gray"></i></button>
            <div
              class="form-results border-radius-4px pt-10px pb-10px ps-15px pe-15px fs-14 lh-14 mt-10px w-100 text-center position-absolute d-none">
            </div>
          </form>
          <!-- end form -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- start section -->
<section id="pricing" class="bg-gradient-very-light-gray">
  <div class="container">
    <div class="row align-items-center mb-8">
      <div class="col-lg-5 md-mb-50px text-center text-lg-start"
        data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <h2 class="fw-500 alt-font text-dark-gray text-uppercase mb-25px ls-minus-2px w-80 lg-w-100">Simple and flexible
          pricing</h2>
        <p class="w-80 lg-w-100">Lorem ipsum dolor consectetur adipiscing do text eiusmod tempor incididunt labore.</p>
        <a href="#chapter"
          class="btn btn-dark-gray btn-large left-icon btn-box-shadow btn-switch-text btn-round-edge me-25px section-link">
          <span>
            <span><i class="feather icon-feather-file-text text-base-color icon-small"></i></span>
            <span class="btn-double-text fw-400" data-text="Chapters inside">Browse chapter</span>
          </span>
        </a>
      </div>
      <div class="col-xl-6 offset-xl-1 col-lg-7">
        <div class="row row-cols-1 row-cols-sm-2 justify-content-center"
          data-anime='{ "el": "childs", "translateY": [30, 0], "perspective": [1200,1200], "scale": [1.05, 1], "rotateY": [-30, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
          <div class="col xs-mb-30px">
            <div
              class="bg-white h-100 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-6px p-45px xl-p-30px text-center position-relative">
              <div
                class="fs-11 fw-500 text-uppercase bg-red position-absolute right-20px top-20px text-white ps-10px pe-10px border-radius-2px lh-22 alt-font">
                Hot</div>
              <h2 class="text-dark-gray ls-minus-2px fw-700 d-block mb-5px">$29</h2>
              <div
                class="bg-selago d-inline-block mb-20px fw-500 text-uppercase border-radius-30px ps-20px pe-20px fs-13 w-120px text-cornflower-blue lh-30">
                Kindle</div>
              <p class="lh-28 w-80 mx-auto">eBook version + Audio of the book</p>
              <a href="#" class="btn btn-cornflower-blue btn-medium btn-box-shadow btn-round-edge fw-400">Buy from
                Amazon</a>
            </div>
          </div>
          <div class="col">
            <div
              class="bg-white h-100 box-shadow-quadruple-large box-shadow-quadruple-large-hover border-radius-6px p-45px xl-p-30px text-center position-relative">
              <h2 class="text-dark-gray ls-minus-2px fw-700 d-block mb-5px">$49</h2>
              <div
                class="bg-white-ice d-inline-block mb-20px fw-500 text-uppercase border-radius-30px ps-20px pe-20px fs-13 w-120px text-jade lh-30">
                Hardcover</div>
              <p class="lh-28 w-80 mx-auto">Hardcover version + Audio of the book</p>
              <a href="#" class="btn btn-jade btn-medium btn-box-shadow btn-round-edge fw-400">Buy from Amazon</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-10px">
      <div class="col text-center"
        data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <span class="text-dark-gray text-uppercase text-decoration-line-bottom fs-15 fw-500">Our authentic partner
          online stores!</span>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 text-center justify-content-center clients-style-05"
      data-anime='{ "el": "childs", "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <!-- start client item -->
      <div class="col">
        <div class="client-box">
          <a href="#"><img src="https://placehold.co/225x110" alt=""></a>
        </div>
      </div>
      <!-- end client item -->
      <!-- start client item -->
      <div class="col">
        <div class="client-box">
          <a href="#"><img src="https://placehold.co/225x110" alt=""></a>
        </div>
      </div>
      <!-- end client item -->
      <!-- start client item -->
      <div class="col">
        <div class="client-box">
          <a href="#"><img src="https://placehold.co/225x110" alt=""></a>
        </div>
      </div>
      <!-- end client item -->
      <!-- start client item -->
      <div class="col">
        <div class="client-box">
          <a href="#"><img src="https://placehold.co/225x110" alt=""></a>
        </div>
      </div>
      <!-- end client item -->
    </div>
  </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="contact" class="bg-very-light-gray background-position-right-top background-no-repeat"
  style="background-image: url('https://placehold.co/551x369')">
  <div class="container">
    <div class="row justify-content-center"
      data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <div class="col-lg-6 md-mb-50px contact-form-style-03">
        <div
          class="ps-16 pe-16 pt-13 pb-13 lg-p-10 border-radius-6px bg-white h-100 box-shadow-quadruple-large background-position-right-bottom background-no-repeat"
          style="background-image: url('https://placehold.co/129x114')">
          <h3 class="fw-500 alt-font text-dark-gray text-uppercase ls-minus-2px">Get in touch now!</h3>
          <!-- start contact form -->
          <form action="email-templates/contact-form.php" method="post">
            <div class="position-relative form-group mb-15px">
              <span class="form-icon text-dark-gray"><i class="bi bi-person icon-extra-medium"></i></span>
              <input
                class="ps-0 border-radius-0px border-bottom bg-transparent border-1 border-color-extra-medium-gray form-control required"
                type="text" name="name" placeholder="Enter your name*">
            </div>
            <div class="position-relative form-group mb-15px">
              <span class="form-icon text-dark-gray"><i class="bi bi-envelope icon-extra-medium"></i></span>
              <input
                class="ps-0 border-radius-0px border-bottom bg-transparent border-1 border-color-extra-medium-gray form-control required"
                type="email" name="email" placeholder="Enter your email*">
            </div>
            <div class="position-relative form-group form-textarea mt-15px mb-25px">
              <textarea
                class="ps-0 border-radius-0px border-bottom bg-transparent border-1 border-color-extra-medium-gray form-control"
                name="comment" placeholder="Enter your message" rows="3"></textarea>
              <span class="form-icon text-dark-gray"><i class="bi bi-chat-square-dots icon-extra-medium"></i></span>
              <input type="hidden" name="redirect" value="">
              <button class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow mt-30px submit w-100 fw-400"
                type="submit">Send message</button>
              <div class="form-results mt-20px d-none"></div>
            </div>
            <span class="fs-14 lh-24 d-block w-80 lg-w-95">I understand that my data will be hold securely in accordance
              with the <a href="#" class="text-dark-gray text-decoration-line-bottom">privacy policy.</a></span>
          </form>
          <!-- end contact form -->
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-15 pe-15 pt-13 pb-13 lg-p-9 md-p-0 h-100">
          <span class="d-block text-uppercase mb-10px text-base-color fw-500">Contact with Author</span>
          <h2 class="fw-500 alt-font text-dark-gray text-uppercase ls-minus-2px">Have questions? Ready to help!</h2>
          <div class="row mt-10 md-mt-8">
            <!-- start features box item -->
            <div class="col-12 icon-with-text-style-08 mb-25px">
              <div
                class="feature-box feature-box-left-icon-middle border-bottom pb-25px border-color-extra-medium-gray">
                <div class="feature-box-icon me-25px lh-0px">
                  <i class="bi bi-telephone-outbound icon-medium text-dark-gray"></i>
                </div>
                <div class="feature-box-content">
                  <span>Feel free to get in touch?</span>
                  <span class="d-block fw-500 fs-18"><a href="tel:1234567890" class="text-dark-gray">123 456
                      7890</a></span>
                </div>
              </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-12 icon-with-text-style-08 mb-25px">
              <div
                class="feature-box feature-box-left-icon-middle border-bottom pb-25px border-color-extra-medium-gray">
                <div class="feature-box-icon me-25px lh-0px">
                  <i class="bi bi-envelope-open icon-medium text-dark-gray"></i>
                </div>
                <div class="feature-box-content">
                  <span>How can we help you?</span>
                  <span class="d-block fw-500 fs-18"><a href="mailto:help@yourdomain.com"
                      class="text-dark-gray">help@yourdomain.com</a></span>
                </div>
              </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col-12 icon-with-text-style-08">
              <div class="feature-box feature-box-left-icon-middle">
                <div class="feature-box-icon me-25px lh-0px">
                  <i class="bi bi-chat-text icon-medium text-dark-gray"></i>
                </div>
                <div class="feature-box-content">
                  <span>Are you ready for coffee?</span>
                  <span class="text-dark-gray d-block fw-500 fs-18">401 Broadway, London</span>
                </div>
              </div>
            </div>
            <!-- end features box item -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->
<?php
get_footer();
?>