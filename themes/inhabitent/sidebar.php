<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">

	<div class="contact-and-business">
		<section class="contact-info">
			<h1>Contact Info</h1>
			<ul>
				
				<li class="phone-icon"><i class="fas fa-phone"></i><p><a> 778-456-7891</a><p></li>
				<li class="email-icon"><i class="fas fa-envelope"></i><p><a> info@inhabitent.com</a></p></li>
			
				<li class="address"><i class="fas fa-map-marker-alt"></i> <p>1490 W Broadway<br/>Vancouver, BC V6H 1H5</p></li>
				
		
			</ul>
		</section>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	
		<!-- <section class="business-hours">
			<h1>Business Hours</h1>
				<ul>
					<li><strong>Monday-Friday:</strong> 9am to 5pm</li>
					<li><strong>Saturday:</strong> 10am to 2pm</li>
					<li><strong>Sunday:</strong> Closed</li>
				</ul>
		</section> -->
	</div> <!--end of "contact-and-business"-->

	<!-- <h1>Archives</h1>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul> -->

	

</div><!-- #secondary -->
