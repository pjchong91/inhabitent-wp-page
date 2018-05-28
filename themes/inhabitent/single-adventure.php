<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header banner">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

	</header><!-- .entry-header -->

    <div class="entry-meta">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php inhabitent_posted_by(); ?>
	</div><!-- .entry-meta -->
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php inhabitent_entry_footer(); ?>
      
		<a class="button-border facebook social-media"><i class="fab fa-facebook-f"></i> Like</a>
		<a class="button-border twitter social-media"><i class="fab fa-twitter"></i> Tweet</a>
		<a class="button-border pinterest social-media"><i class="fab fa-pinterest"></i> Pin</a>

	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
