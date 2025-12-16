<?php
get_header();
?>
		 <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center-top" style="background-image: url(https://placehold.co/1920x1100)">
            <div class="opacity-extra-medium bg-gradient-black-green"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center small-screen">
                    <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div><h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Latest blog"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1></div>
                        <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Business growth leaders blog"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h2>
                    </div>
                    <div class="down-section text-center" data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <a href="#down-section" class="section-link">
                            <div class="text-white">
                                <i class="line-icon-Down icon-medium"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section id="down-section" class="background-position-center-top sm-background-image-none" style="background-image: url('images/vertical-line-bg.svg')">
            <div class="container">  
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                </ul>
                <div class="row">
                    <div class="col-12 mt-4 d-flex justify-content-center">
                        <!-- start pagination -->
                        <ul class="pagination pagination-style-01 fs-13 mb-0" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">01</a></li>
                            <li class="page-item active"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                        </ul>
                        <!-- end pagination -->
                    </div> 
                </div>
            </div>
        </section>
        <!-- end section -->
<?php get_footer(); ?>