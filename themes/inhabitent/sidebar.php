<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package Inhabitent_Theme
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
	
	</div> <!--end of "contact-and-business"-->

		

	

</div><!-- #secondary -->
