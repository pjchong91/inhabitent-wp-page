<?php

get_header('dark'); ?>

	<div id="primary" class="content-area  single-product">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

       

		
	</header><!-- .entry-header -->

	<div class="entry-content">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="price"><?php echo CFS()->get( 'price' ); ?></p>
		<?php the_content(); ?>
	
	
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->


			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
