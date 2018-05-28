<?php
/**
 * The template for displaying search results pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<section id="primary" class="content-area layout-with-sidebar">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
			
			</header><!-- .page-header -->

		<div class="dotted-border">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					
					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php inhabitent_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php inhabitent_posted_by(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>

				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			</article><!-- #post-## -->

				 <a href="<?php echo esc_url(get_permalink())?>" class="button-border rarr">Read More</a>

			<?php endwhile; ?>

			<?php inhabitent_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div><!--end of dotted-border-->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
