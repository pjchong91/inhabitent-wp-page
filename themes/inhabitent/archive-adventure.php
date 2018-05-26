<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header('dark'); ?>

	<div id="primary" class="content-area adventure">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
            <h1 class="taxonomy-title centered"><?php echo inhabitent_archive_title($title)
?></h1>

			</header><!-- .page-header -->

			<section class="container-holder">
            <div class="container">
                
                <div class="latest-adventure-archive listed-posts dotted-border">

                <?php
                    $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'numberposts' => '4' );
                    $adventure_posts = get_posts( $args ); // returns an array of posts
                ?>
<?php $i = 0 ?>

<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
             <?php   $i ++; ?>
        <div class="adventure-item<?php echo $i ?> grid-item">
            <header class="entry-header">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large' ); ?>
                <?php endif; ?>
            </header>

            <div class="entry-meta"> 
                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            <a href="<?php echo esc_url(get_permalink())?>" class="button-border">Read More </a>
            </div>
        </div><!--end of adventure item-->

    <?php endforeach; wp_reset_postdata(); ?>
</div> <!--end of adventures-->

            </div><!--end of container-->
        </section>

<?php else : ?>

<?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
