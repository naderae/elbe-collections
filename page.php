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
						<a href="#">link3</a>
          </div>
        </div>
      </div>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
