<?php
/**
 * The template for displaying the e-sportspy Home page.
 *
 * Template Name: Torneos
 *
 * @package Rookie
 */

get_header(); ?>

	<?php dynamic_sidebar( 'banner-izquierda' ); ?>
	<?php dynamic_sidebar( 'sponsors-derecha' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'homepage' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
