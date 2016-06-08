<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */


get_header(); ?>

<div class="product-grid-wrap">
	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header archive-product">
				<?php $terms = get_terms( 'product-type' ); ?>
				<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ):?>
					<section class="product-info container">
						<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

						<div class="product-type-container">
							<?php foreach ( $terms as $term ) :?>
							    <div class="product-type-wrapper">
							        <p>
							        	<a href="<?php echo home_url() ?>/product-type/<?php echo $term->slug ?>/" class="">
							<?php echo $term->slug ?> <!-- stuff -->
							        	</a>
							        </p>   
							    </div>
							<?php endforeach ?>
						</div>
					</section>
				<?php endif; ?>
			</header><!-- .page-header -->
			<section class="all-products-wrap container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="single-product-container">
								<header class="entry-header">
									<?php if ( has_post_thumbnail() ) : ?>
										<a href="<?php the_permalink(); ?> ">
											<?php the_post_thumbnail( 'large' ); ?>
										</a> 
									<?php endif; ?>
								</header><!-- .entry-header -->

								<div class="entry-content product-type-wrapper">
									<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
                									<!-- Price goes here -->
									<span><?php echo CFS()->get( 'price' ); ?></span>
								</div><!-- .entry-content -->
							</div>
					</article><!-- #post-## -->


				<?php endwhile; ?>
			</section>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
