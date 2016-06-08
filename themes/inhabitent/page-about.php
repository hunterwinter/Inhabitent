<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: About Page
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="abouthero">
			<h1>About</h1>
		</div>
		<section class="about-container">
			<div class=" about-paragraphs">
				<h2 class="about-title">Our Story</h2>
					<?php echo CFS()->get( 'our_story' ); ?>
				<h2 class="about-title">Our Team</h2>
					<?php echo CFS()->get( 'our_team' ); ?>
			</div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
