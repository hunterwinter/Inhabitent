<?php
/**
 * The template for displaying the front page.
 *
 * @package inhabitent_theme
 */
get_header(); ?>

​<div class="front-page-wrap">
  <div id="primary" class="content-area-front">
    <main id="main" class="site-main" role="main">
​
      <!-- Hero Image -->
​
        <section class="home-hero">
          <img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-full.svg" class="logo" alt="Inhabitent Logo" />
        </section>
​
      <!-- Shop Stuff -->
​
      <?php $terms = get_terms( 'product-type' )?>
        <section class="shop-stuff">
          <h2>Shop Stuff</h2>
          <div class=product-box>
            <?php foreach ( $terms as $product_type) : ?>
              <div class="product-block">
                <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $product_type->slug; ?>.svg" alt="product-type" height="70" width="70"/>
  ​
                <p class="description">
                  <?php echo $product_type->description; ?>
                </p>
                <a href="<?php the_permalink(); ?>product-type/<?php echo $product_type->slug; ?>" class="button"><?php echo $product_type->name; ?> Stuff</a>
  ​           </div>
            <?php endforeach; ?>
          </div>
​
        </section>
​
​
      <!-- Inhabitent Journal -->
​
      <h2>Inhabitent Journal</h2>
      <ul class="journal-post container">
      <?php
        $args = array( 'posts_per_page' => 3, 'order'=> 'DESC', 'orderby' => 'date' );
        $postslist = get_posts( $args );
        foreach ( $postslist as $post ) :
        setup_postdata( $post ); ?>
​
            <li >
              <div class="journal-picture">
                <?php the_post_thumbnail( 'large' ); ?>
              </div>
​
              <div class="journal-info">
                <span>
                  <?php the_date(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
                </span>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <a class="moretag" href="<?php the_permalink(); ?>">Read Entry</a>
              </div>
​
​
            </li>
        <?php
        endforeach;
        wp_reset_postdata();
        ?>
        </ul>
​
      <!-- Latest Adventures -->
​
        <!-- Stretch goal - Mandi used floats -->
        <section class="adventures container">
          <h2>Latest Adventures</h2>
          <ul class="clearfix">
            <li>
              <div class="story-wrap canoe">
                <div class="story-info">
                  <h3><a href="#">Getting Back to Nature in a Canoe</a></h3>
                  <a href="#" class="readtag">Read More</a>
                </div>
              </div>
            </li>
            <li>
              <div class="story-wrap bonfire">
                <div class="story-info">
                  <h3><a href="#">A Night with Friends at the Beach</a></h3>
                  <a href="#" class="readtag">Read More</a>
                </div>
              </div>
            </li>
            <li>
              <div class="story-wrap hikers">
                <div class="story-info">
                  <h3><a href="#">Taking in the View at Big Mountain</a></h3>
                  <a href="#" class="readtag">Read More</a>
                </div>
              </div>
            </li>
            <li>
              <div class="story-wrap night-sky">
                <div class="story-info">
                  <h3><a href="#">Star-Gazing at the Night Sky</a></h3>
                  <a href="#" class="readtag">Read More</a>
                </div>
              </div>
            </li>
          </ul>
          <p class="clearfix">
            <a href="#" class="button">More Adventures</a>
          </p>
        </section>
​
    </main><!-- #main -->
  </div><!-- #primary -->
​</div>
<?php get_footer(); ?>