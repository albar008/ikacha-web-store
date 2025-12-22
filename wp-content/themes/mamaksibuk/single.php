<?php
get_header();
?>
<?php
if (have_posts()):

	// Load posts loop
	while (have_posts()):
		the_post();
		?>
		<!-- start section -->
		<section class="top-space-margin">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10 text-center">
						<span class="fs-18 mb-5 d-inline-block">By <a
								href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>"
								class="text-dark-gray text-decoration-line-bottom text-uppercase"><?php the_author() ?></a> in
							<?php
							$cats = get_the_category();
							foreach ($cats as $cat) {
								?>
								<a href="<?php echo get_category_link($cat) ?>" class="text-dark-gray text-decoration-line-bottom">
									<?php
									echo $cat->name;
									?>
								</a>
								<?php
								if (array_key_last($cats) !== count($cats) - 1) {
									echo ', ';
								}
							} ?>
							on <?php the_time('d M Y') ?></span>
						<h1 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-0"><?php the_title() ?>
						</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->
		<!-- start section -->
		<section class="pb-0 pt-md-0 ps-13 pe-13 lg-ps-4 lg-pe-4 sm-p-0">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-12"><img src="<?php echo get_the_post_thumbnail_url() ?>" class="w-100" alt=""></div>
				</div>
			</div>
		</section>
		<!-- end section -->
		<!-- start section -->
		<section class="pb-0">
			<div class="container">
				<div class="row justify-content-center"
					data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
					<div class="col-lg-10">
						<?php echo get_the_content() ?>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->
		<!-- start section -->
		<section class="half-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10">
						<div class="row justify-content-center">
							<div
								data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'
								class="col-12 text-center elements-social social-icon-style-04">
								<?php echo do_shortcode('[addtoany]'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end section -->
		<div class="bg-very-light-gray">
			<?php comments_template() ?>
		</div>
		<?php
	endwhile;
endif;
get_footer(); ?>