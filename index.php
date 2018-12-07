<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!-- <div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> -->

      <div class="auto-slider">
        <div class="auto-slider__content">

          <div class="image-container">
            <div class="image-text">
              <div class="image-text-content">
                <p><a href="">Shop</a></p>
                <h1>Chck out our store to buy some stuff</h1>
                <p class="link-button"><a href="<?php echo site_url('/shop') ?>">Shop Now</a> </p>
              </div>
            </div>
            <img src="http://elbe-collections.local/wp-content/uploads/2018/11/christmas-1911637_1920.jpg" alt="">
          </div>

          <div class="image-container">
            <div class="image-text">
              <div class="image-text-content">
                <p><a href="">Xmas sale</a></p>
                <h1>Check out the xmas sale</h1>
                <p class="link-button"><a href="#">Xmas Sale</a> </p>
              </div>
            </div>
            <img src="http://elbe-collections.local/wp-content/uploads/2018/11/christmas-1911637_1920.jpg" alt="">
          </div>

          <div class="image-container">
            <div class="image-text">
              <div class="image-text-content">
                <p><a href="">Shop</a></p>
                <h1>Chck out our store to buy some stuff</h1>
                <p class="link-button"><a href="<?php echo site_url('/shop') ?>">Shop Now</a> </p>
              </div>
            </div>
            <img src="http://elbe-collections.local/wp-content/uploads/2018/11/christmas-1911637_1920.jpg" alt="">
          </div>

          <div class="image-container">
            <div class="image-text">
              <div class="image-text-content">
                <p><a href="">Xmas sale</a></p>
                <h1>Check out the xmas sale</h1>
                <p class="link-button"><a href="#">Xmas Sale</a> </p>
              </div>
            </div>
            <img src="http://elbe-collections.local/wp-content/uploads/2018/11/christmas-1911637_1920.jpg" alt="">
          </div>


        </div>
    </div>

  <i class="arrow left"></i></p>
  <i class="arrow right"></i></p>


  <div class="switch">
    <div class="pause">
      <div class="bar one"></div>
      <div class="bar two"></div>
    </div>
  </div>


		<!-- </main><!-- #main -->
	<!-- </div><!-- #primary -->
<!-- </div><!-- .wrap -->
