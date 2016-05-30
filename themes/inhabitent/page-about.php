<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: About Page
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

<h1>page-about.php</h1>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="abouthero">
			<h1> About </h1>
		</div>
	<section class="about-container">
				<div class=" about-paragraphs">
					<h2 class="about-title">Our Story</h2>
						<?php echo CFS()->get( 'our_story' ); ?>
					<h2 class="about-title">Our Team</h2>
						<?php echo CFS()->get( 'our_team' ); ?>
				</div>
			</section>


			 <?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
