<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">



		<nav class="nav-main">
			<div class="header-text">
				<div class="header-text-content">

					<div class="header-hamburger">
            <div class="layer1"></div>
            <div class="layer2"></div>
            <div class="layer3"></div>
          </div>

					<div class="logo">
            <hr class="logo-band upper">
            <a href="<?php echo site_url() ?>"><p>eLBé collections</p></a>
            <hr class="logo-band lower">
          </div>

					<div class="header-cart-nav">
					<a href="<?php echo site_url('/cart') ?>"><i class="fa fa-shopping-cart fa-2x"></i></a>
						<!-- <i class="fa fa-shopping-cart fa-2x"><a href=""></a> </i> -->

            <!-- <i class="fa fa-ellipsis-h fa-3x"></i> -->
          </div>

					<div class="nav-modal" >
            <div class="nav-modal-content" >
              <h1>our Menu</h1>
              <p><a href="<?php echo site_url() ?>">home</a></p>
              <p><a href="<?php echo site_url('/shop') ?>">Shop</a></p>
              <p><a href="<?php echo get_post_type_archive_link('blog'); ?>">our blog</a></p>
              <p><a href="<?php echo get_post_type_archive_link('artisan'); ?>">our artisans</a></p>
            </div>
          </div>

					<!-- <div class="nav-modal-shop" id='nav-shop'>
						<div class="nav-modal-shop-content" id="nav-shop-content">

							<div class="category-1">
                <h1><a class="shop-category" href="#">BedRoom</a></h1>
                <p><a href="#">Bedsheets</a></p>
                <p><a href="#">pillows</a></p>
              </div>

							<div class="category-2">
                <h1> <a class="shop-category" href="#">Living Room</a></h1>
                <p><a href="#">carpets</a></p>
                <p><a href="#">couches</a></p>
              </div>

                <div class="category-3">
                  <h1><a class="shop-category" href="#">Bathroom</a></h1>
                  <p><a href="#">toilets</a></p>
                  <p><a href="#">towels</a></p>
                </div>

						</div>
					</div> -->

				</div>
			</div>
		</nav>
	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
