<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

				<footer class="site-footer" id="colophon">

				<div id="footer-container">
					<img id="footer-logo" alt="small footer logo" src="/wp-content/uploads/2022/12/Logocopy2.png" />
					<div id="text-container">
						<div id="footer-address">
							<ul>
								<li>600 Madison Avenue</li>
								<li>8th Floor</li>    
								<li>New York, New York, 10022</li>
							</ul>
						</div>
						<div id="footer-social">
							<ul>
								<li>Follow us on</li>
								<li><img id="social-logos" alt="small social media logos" src="/wp-content/uploads/2022/12/socialmediacopy.png"/></li>
							</ul>
						</div>
					</div>	
				</div>
				<p id='copyright'>©Copyright 2017, Alvarez & Marsal Holdings,LLC. All Rights Reserved.</p>

					<div class="site-info">


						<!-- <?php understrap_site_info(); ?> -->

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>



</body>

</html>

