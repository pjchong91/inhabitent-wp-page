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
                <div class="shop-stuff listed-posts">
                    <div class="ssbox"></div>
                    <div class="ssbox"></div>
                    <div class="ssbox"></div>
                    <div class="ssbox"></div>
                </div> <!--end of shop stuff-->
            </div> <!--end of container-->
        </section>
       


        <section class="container-holder">
            <div class="container">
                <h1 class="container-header">Inhabitent Journal</h1>
                <div class="inhabitent-journal listed-posts">
                    <div class="ijbox"></div>
                    <div class="ijbox"></div>
                    <div class="ijbox"></div>
                </div>  
            </div>
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
