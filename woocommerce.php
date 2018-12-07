<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>



<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php

        if (is_product_category()) {
					// category pages
          echo do_shortcode('[woof sid="auto_shortcode" autohide=0 ]');
          woocommerce_content();
					// product archive page
				} elseif (is_product()) { ?>
					<div class="elbe-side-menu" id="elbe-side-menu">
						<div class="elbe-side-menu-content">
							<div class="elbe-side-menu-section">
								<h4>Bedroom</h4>
								<a href="#">link1</a>
								<a href="#">link2</a>
								<a href="#">lnik3</a>
							</div>
							<div class="elbe-side-menu-section">
								<h4>Living Room</h4>
								<a href="#">link1</a>
								<a href="#">link2</a>
								<a href="#">lnik3</a>
							</div>
							<div class="elbe-side-menu-section">
								<h4>Bathroom</h4>
								<a href="#">link1</a>
								<a href="#">link2</a>
								<a href="#">lnik3</a>
							</div>
						</div>
					</div>
				<?php woocommerce_content();
        } elseif (is_post_type_archive('product')) {
          ?>

					<div class="elbe-side-menu" id="elbe-side-menu">
						<div class="elbe-side-menu-content">

							<div class="elbe-side-menu-section">
								<h4>Bedroom</h4>
								<a href="#">link1</a>
								<a href="#">link2</a>
								<a href="#">lnik3</a>
							</div>
							<div class="elbe-side-menu-section">
								<h4>Living Room</h4>
								<a href="#">link1</a>
								<a href="#">link2</a>
								<a href="#">lnik3</a>
							</div>
							<div class="elbe-side-menu-section">
								<h4>Bathroom</h4>
								<a href="#">link1</a>
								<a href="#">link2</a>
								<a href="#">lnik3</a>
							</div>
						</div>
					</div>

          <div class="elbe-shop-container">

						<?php
						$prod_categories = get_terms( 'product_cat', array(
								'orderby'    => 'name',
								'order'      => 'ASC',
								'exclude' => 15,

						));



						foreach( $prod_categories as $prod_cat ) :
							 $cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
							 $shop_catalog_img = wp_get_attachment_image_src( $cat_thumb_id, 'full' );
							 $term_link = get_term_link( $prod_cat, 'product_cat' );?>


							 <div class="elbe-category-container">

	               <a href="<?php echo $term_link; ?>">
	                 <div class="elbe-category-elements">
	                   <img src="<?php echo $shop_catalog_img[0]; ?>" alt="">
	                   <div class="elbe-category-title">
	                     <p><?php echo $prod_cat->name; ?></p>
	                   </div>
	                 </div>
	               </a>

	             </div>



					 <?php endforeach; wp_reset_query(); ?>

          </div>





          <?php
        } else {
           woocommerce_content();
        }
       ?>



		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
