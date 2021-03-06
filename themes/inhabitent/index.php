<?php
/**
 * The main template file.
 *
 * @package inhabitent_Theme
 */

get_header(); ?>

<h1>index.php</h1>

	<div id="primary" class="content-area">
		<main id="main" class="site-main side-bar-flex" role="main">
	<div class="container2">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>
	<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
<!-- <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
        <?php the_title(); ?>
     <?php endforeach; wp_reset_postdata(); ?> -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

