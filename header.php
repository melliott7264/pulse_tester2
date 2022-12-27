<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<title>AMTAXAND</title>
	<?php wp_head(); ?>
</head>

 <body <?php body_class(); ?> <?php understrap_body_attributes(); ?>> 
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<!-- <?php get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>  -->

		<div id="my-nav-bar">
        <img id="large-color-logo" alt="large company logo" src="http://pulsetester.local/wp-content/uploads/2022/12/AMTaxandlogo.png" />
		<div id='nav-list-container'>

			<?php
            $defaults = array(
              'theme_location' => 'top', 
              'container' => '', 
			  'conatainer_id' => 'nav-list-container',
              'menu_class' => 'nav nav-list',
              'menu' => 'Menu 1'
            );
            wp_nav_menu($defaults); ?> 

		</div>
        <img id="graphic-small-nav-logo" alt="small company logo" src="http://pulsetester.local/wp-content/uploads/2022/12/GlobalLinkage.png" /> 
        </div>  
    </div>

	

	</header><!-- #wrapper-navbar -->
