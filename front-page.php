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

			<main class='site-main' id='main'>

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

				<div>   
           			<div id="about">
						<h1 class='text-center'><?php echo $title; ?></h1>
						<p><?php echo $content; ?></p>
            		</div>
       			 </div>
               

				<hr width="100%" size="20" color="#4e8abe" />

                <?php $what_post_id = 10;
                $what_post = get_post($what_post_id);
                $title_what = $what_post->post_title;
                $content_what = $what_post->post_content; ?>

				<div id="what-we-do-container">
					<!-- <img id="what-we-do-background" alt="background image of tall modern buildings" src="http://pulsetester.local/wp-content/uploads/2022/12/ThinkstockPhotos-468759872-1.png" /> -->
					<div id="bar-behind">
						<div id="what-we-do">
							<h1><?php echo $title_what; ?></h1>
							<p><?php echo $content_what; ?></p>  
							
						</div> 
						<img id="do-graphic" alt="large pie chart showing what Alvarez & Marsal does" src="http://pulsetester.local/wp-content/uploads/2022/12/WheelGraphic.png" />
        			</div>
           			<!-- <img id="do-graphic" alt="large pie chart showing what Alvarez & Marsal does" src="http://pulsetester.local/wp-content/uploads/2022/12/WheelGraphic.png" /> -->
        		</div>
                

			</main>

</div><!-- #page-wrapper -->

<?php
get_footer();
