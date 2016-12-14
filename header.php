<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package LCCCProud
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header" role="banner">
    <div class="contain-to-grid sticky">
	<nav class="top-bar" data-topbar role="navigation">
         <ul class="title-area">
            <li class="name show-for-small-only">
                 <h1><a href="#">LCCC Proud</a></h1>

            </li>
            <!-- Mobile Menu Toggle -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a>
            </li>
        </ul>
    <section class="top-bar-section"> <!-- Right Nav Section -->
    	 <ul class="left">
    	<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
     	</ul>
         <ul class="right show-for-large-up">
         <?php
		 date_default_timezone_set('America/New_York');  
		 $todaysdate = date('l, F j, Y');
		 ?>
         <h5 class="todaysdate"><?php echo $todaysdate;?></h5>
         </ul>
     </section>
    </nav>
    </div>
	</header><!-- #masthead -->

