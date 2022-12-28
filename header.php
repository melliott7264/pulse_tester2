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
	<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="./wp-content/themes/pulsetester/cssmod.js" ></script>
	<?php wp_head(); ?>
</head>

 <body> 

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

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
