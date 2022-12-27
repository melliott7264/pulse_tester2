<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- <?php
			// Do the left sidebar check and open div#primary.
			get_template_part( 'global-templates/left-sidebar-check' );
			?> -->

			<main class="site-main" id="main">

				<!-- <?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?> -->

				<div id="hero">
					<video id="background-video" autoplay loop muted ><source alt="background video of the U.S. Capitol and clouds" src="http://pulsetester.local/wp-content/uploads/2022/12/amtax.mp4" type="video/mp4">
					</video>
					<img id="global-logo" alt="2018 Global Conference logo" src="http://pulsetester.local/wp-content/uploads/2022/12/Globallogo.png" />  
					<img id="conference-date-text" alt="Conference dates May 16-18 2018" src="http://pulsetester.local/wp-content/uploads/2022/12/16-18-MAY-2018.png" />
					<img id="tax-trends" alt="tax trends today" src="http://pulsetester.local/wp-content/uploads/2022/12/TaxTrends.png" />
					<img id="scroll-down-text" alt="Scroll Down for More" src="http://pulsetester.local/wp-content/uploads/2022/12/Scroll-down-FOR-MORE.png" />
					<img id="scroll-down-arrow" alt="down arrow" src="http://pulsetester.local/wp-content/uploads/2022/12/ArrowDown.png" />
        		</div>

                <?php $about_post_id = 11;
                $about_post = get_post($about_post_id);
                $title = $about_post->post_title;
                $content = $about_post->post_content; ?>
                <h1 class='text-center'><?php echo $title; ?></h1>
                <p><?php echo $content; ?></p>

                <?php $what_post_id = 10;
                $what_post = get_post($what_post_id);
                $title = $what_post->post_title;
                $content = $what_post->post_content; ?>
                <h1><?php echo $title; ?></h1>
                <p><?php echo $content; ?></p>

			</main>

			<!-- <?php
			// Do the right sidebar check and close div#primary.
			get_template_part( 'global-templates/right-sidebar-check' );
			?> -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
