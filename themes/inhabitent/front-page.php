<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(''); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="hero-banner">
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
                    <div class="ssbox">
                        <img src="<?php echo get_template_directory_uri() . './assets/images/product-type-icons/' . $term->slug; ?>.svg"
                        alt="<?php echo $term->name; ?>"/>

                        <p><?php echo $term->description; ?></p>

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

    <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>  
        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
    <a href="<?php echo esc_url(get_permalink())?>" class="button-border">Read Entry </a>
    </div>
</div>

    <?php endforeach; wp_reset_postdata(); ?>
</div> <!--end of inhabitent-journal-->

            </div><!--end of container-->
        </section>

        <section class="container-holder">
            <div class="container">
                <h1 class="container-header">Latest Adventure</h1>
                <div class="latest-adventure listed-posts">
                    <div class="la-bigbox"></div>
                    <div class="la-rightside">
                        <div class="la-longbox"></div>
                        <div class="la-smallbox"></div>
                        <div class="la-smallbox"></div>  
                    </div><!--End of la-rightside-->  
                </div><!--End of latest-adventure-->
            </div><!--End of container-->
        </section>
            
        

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
