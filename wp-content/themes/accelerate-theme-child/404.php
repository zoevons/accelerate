<?php
/**
 * The template for displaying the 404 page
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


		<div class="adele-page">
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>



      <h3 class="hello">Hello, it's me</h3>
      <h4 class="back">Something went wrong here...<br>Let's go back!</h4>
    

    <div class="adele-image">
      <img class="adele" src="http://hot97svg.com/wp-content/uploads/2016/01/adele.png" alt="Adele" />
    </div>

  </div><!-- .main-content -->


  <a class="button" id="adele-button" href="<?php echo site_url('home') ?>">Homepage</a>

<?php get_footer(); ?>
