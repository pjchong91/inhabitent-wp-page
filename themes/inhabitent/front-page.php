<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="hero-banner banner">
            <img src="<?php echo get_template_directory_uri() . './assets/images/logos/inhabitent-logo-full.svg'; ?>" class="logo" alt="Inhabitent Logo" />
        </div> <!--End of hero-banner-->

        <section class="container-holder">
            <div class="container">
                <h1 class="container-header">Shop Stuff</h1>
             
<?php
                $terms = get_terms( array(
                    'taxonomy' => 'product_type',
                    'hide_empty' => 0,
                ));

                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>
                   <div class="shop-stuff listed-posts">
                <!-- <div class="product-type-blocks"> -->
                    <?php foreach ( $terms as $term ) : ?>
                    <div class="ssbox solid-border">
                        <img src="<?php echo get_template_directory_uri() . './assets/images/product-type-icons/' . $term->slug; ?>.svg"
                        alt="<?php echo $term->name; ?>"/>

                        <p class="shop-description"><?php echo $term->description; ?></p>

                        <p>
                            <a href="<?php echo get_term_link ( $term ); ?>" class="green-button">
                            <?php echo $term->name; ?> Stuff</a>
         
            </p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
                </div> <!--end of shop stuff-->
            </div> <!--end of container-->
        </section>
       


        <section class="container-holder">
            <div class="container">
                <h1 class="container-header">Inhabitent Journal</h1>
                <div class="inhabitent-journal listed-posts">

                <?php
   $args = array( 'post_type' => 'post', 'order' => 'DSC', 'numberposts' => '3' );
   $journal_posts = get_posts( $args ); // returns an array of posts
?>

<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<div class="ijbox">
    <header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
        <?php endif; ?>
    </header>

    <div class="entry-meta solid-border">
        <div class="journal-meta">
        <p class="post-data"><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>  </p>
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    
    </div> <!-- end of journal-meta-->
    <div class="read-more">
    <a href="<?php echo esc_url(get_permalink())?>" class="button-border">Read Entry </a>
            </div>
        </div>
            
</div>

    <?php endforeach; wp_reset_postdata(); ?>
</div> <!--end of inhabitent-journal-->

            </div><!--end of container-->
        </section>



<!--Use journal post layout to try and get grid posts -->

 <section class="container-holder">
            <div class="container">
                <h1 class="container-header">Latest Adventure</h1>
                <div class="latest-adventure listed-posts">

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

<a href="<?php echo get_post_type_archive_link('adventure') ?>" class="green-button more-adventures">More Adventures</a>
            </div><!--end of container-->
        </section>
            
        

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
