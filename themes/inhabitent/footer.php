<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">

			<section class="container-holder">
				<div class="container">
					<div class="footer-above-copyright">
						<div class="contact-and-business">
							<section class="contact-info">
								<h1>Contact Info</h1>
								<ul>
									<li class="email-icon"><i class="fas fa-envelope"></i><a href="#"> info@inhabitent.com</a></li>
									<li class="phone-icon"><i class="fas fa-phone"></i><a href="#"> 778-456-7891</a></li>
									<li class="social-media-icons">
										<i class="fab fa-facebook-square"></i>
										<i class="fab fa-twitter-square"></i>
										<i class="fab fa-google-plus-square"></i>
									</li>
								</ul>
							</section>
						
							<section class="business-hours">
								<h1>Business Hours</h1>
									<ul>
										<li><strong>Monday-Friday:</strong> 9am to 5pm</li>
										<li><strong>Saturday:</strong> 10am to 2pm</li>
										<li><strong>Sunday:</strong> Closed</li>
									</ul>
							</section>
						</div> <!--end of "contact-and-business"-->

						<img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-text.svg'; ?>" class="footer-logo" alt="Inhabitent Logo" />
					</div><!--end of "footer-above-copyright"-->
				</div> <!-- end of container-->	
			</section>
			</div><!-- .site-info -->
			
				<p class="copyright">Copyright © 2018 Inhabitent</p>

				
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
