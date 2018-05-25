<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">

			<div class="top-header">
				<h3 class="blurb">Accelerate is a strategy and marketing agency<br>located in the heart of NYC. Our goal
				is to build<br>businesses by making our clients visible and<br> making their customers smile.</h3>
			</div>
</div><!-- #primary -->
</div><!-- .main-content -->

		<div class="services">
			<?php while ( have_posts() ) : the_post();
					$services_1 = get_field('services_1');
					$services_2 = get_field('services_2');
					$services_3 = get_field('services_3');
					$services_4 = get_field('services_4');
					$description_1 = get_field('description_1');
					$description_2 = get_field('description_2');
					$description_3 = get_field('description_3');
					$description_4 = get_field('description_4');
					$icon_1 = get_field('icon_1');
					$icon_2 = get_field('icon_2');
					$icon_3 = get_field('icon_3');
					$icon_4 = get_field('icon_4');
					$size ="full"; ?>

			<div class="service-section">
				<h4 class="our-services-header">Our Services</h4>
				<p class="what-we-do">We take pride in our clients and the content we create for them.<br>Here's a brief overview of our offered services</p>
			</div>

			<div class="service-1">
					<aside class="first-description">
			  		<h4 class="header-about"><?php echo $services_1; ?></h4>
						<p><?php echo $description_1; ?></p>
					</aside>
					<aside class="first-icon">
						<?php if ($icon_1) {
							echo wp_get_attachment_image( $icon_1, $size );
						} ?>
					</aside>
			</div>

			<div class="service-2">
				<aside class="second-description">
			  	<h4 class="header-about"><?php echo $services_2; ?></h4>
					<p><?php echo $description_2; ?></p>
				</aside>
				<aside class="second-icon">
					<?php if ($icon_2) {
					echo wp_get_attachment_image( $icon_2, $size );
					} ?>
				</aside>
			</div>

			<div class="service-3">
				<aside class="third-description">
			  	<h4 class="header-about"><?php echo $services_3; ?></h4>
					<p><?php echo $description_3; ?></p>
				</aside>
				<aside class="third-icon">
					<?php if ($icon_3) {
					echo wp_get_attachment_image( $icon_3, $size );
					} ?>
				</aside>
			</div>

			<div class="service-4">
				<aside class="fourth-description">
			  	<h4 class="header-about"><?php echo $services_4; ?></h4>
					<p><?php echo $description_4; ?></p>
				</aside>
				<aside class="fourth-icon">
					<?php if ($icon_4) {
					echo wp_get_attachment_image( $icon_4, $size );
					} ?>
				</aside>
			</div>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
</div>


	<nav id="navigation" class="container">
		<div class="work-with-us">Interested in working with us?<a class="button" href="<?php echo site_url('contact') ?>">Contact Us</a>
		</div>
	</nav>

<?php get_footer(); ?>
