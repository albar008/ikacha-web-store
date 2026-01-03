<?php
get_header();
$blog_header_img = get_theme_mod('set_blog_header_image');
$blog_header_img_url = wp_get_attachment_image_url($blog_header_img, 'mamak_slider_image2');
$blog_header_img_alt = get_post_meta($blog_header_img, '_wp_attachment_image_alt', true);
$blog_header_overlay_text_color = get_theme_mod('set_blog_header_overlay_text_color');
?>
<!-- start page title -->
<section class="cover-background page-title-big-typography">
    <div class="container">
        <div class="row align-items-center align-items-lg-end justify-content-center extra-very-small-screen g-0">
            <div class="col-xxl-5 col-xl-6 col-lg-7 position-relative page-title-extra-small md-mb-30px md-mt-auto"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="alt-font text-uppercase fw-500 fs-18 d-inline-block text-base-color ls-1px"><?php echo get_theme_mod('set_blog_header_subtitle') ?></span>
                <h3 class="alt-font text-dark-gray fw-700 ls-minus-2px">
                    <?php echo get_theme_mod('set_blog_header_title') ?>
                </h3>
            </div>
            <div
                class="col-lg-5 offset-xxl-2 offset-xl-1 border-start border-2 border-color-base-color ps-40px sm-ps-25px md-mb-auto">
                <span class="d-block w-85 lg-w-100"
                    data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <?php echo get_theme_mod('set_blog_header_short_desc') ?></span>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section class="overflow-hidden position-relative p-0">
    <div class="container-fluid">
        <div class="row overlap-height">
            <div class="col-12 p-0 position-relative overlap-gap-section">
                <img src="<?php if ($blog_header_img_url) {
                    echo $blog_header_img_url;
                } else {
                    echo 'https://placehold.co/1920x600';
                } ?>" alt="<?php echo $blog_header_img_alt ?>" class="w-100">
                <div style="color: <?php echo $blog_header_overlay_text_color ?>; -webkit-text-stroke-color: <?php echo $blog_header_overlay_text_color ?>"
                    class="alt-font fw-600 fs-350 lg-fs-275 md-fs-250 xs-fs-160 ls-minus-5px xs-ls-minus-2px position-absolute right-minus-50px lg-right-minus-0px bottom-minus-80px md-bottom-minus-60px xs-bottom-minus-50px text-outline text-outline-width-3px"
                    data-bottom-top="transform: translate3d(80px, 0px, 0px);"
                    data-top-bottom="transform: translate3d(-280px, 0px, 0px);">Blog</div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-inline-block w-90 sm-w-100 newsletter-style-02 position-relative product-search-form">
                    <?php get_search_form() ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- start section -->
<section id="down-section" class="background-position-center-top sm-background-image-none"
    style="background-image: url('images/vertical-line-bg.svg')">
    <div class="container">
        <ul class="blog-grid row-grid"
            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <!-- start blog item -->
                    <li class="col-grid">
                        <?php get_template_part('template-parts/partials/content', 'blog') ?>
                    </li>
                    <!-- end blog item -->
                <?php }
            } ?>
        </ul>
        <?php
        global $wp_query;
        $big = 999999999;
        $links = paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'prev_text' => is_rtl() ? '<i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i>' : '<i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i>',
            'next_text' => is_rtl() ? '<i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i>' : '<i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i>',
            'type' => 'array',
            'end_size' => 3,
            'mid_size' => 3,
        ));
        ?>
        <?php if ($links) { ?>
            <div class="row">
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <!-- start pagination -->
                    <ul class="pagination pagination-style-01 alb-pagination-style fs-14 fw-500 mb-0"
                        aria-label="<?php esc_attr_e('Blog Pagination', 'mamaksibuk'); ?>">
                        <?php
                        foreach ($links as $link) {
                            ?>
                            <li class="page-item"><?php echo $link ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                    <!-- end pagination -->
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- end section -->
<?php get_footer(); ?>