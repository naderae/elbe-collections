<?php

get_header();

?>


  <header>

    <div class="banner">
      <img src="http://elbe-collections.local/wp-content/uploads/2018/11/christmas-1911637_1920.jpg" alt="">
    </div>

    <div class="header-description">

      <div class="header-description-container">
        <div class="header-description-title">
          <p>Blogs</p>
        </div>
        <div class="header-description-body">
          <p>gain a depper perspective</p>
        </div>
      </div>

    </div>

    <div class="header-arrow">
      <i class="arrow-down" data-href="#about-top"></i>
    </div>

  </header>


  <section class="about-container">

    <?php while ( have_posts() ) : ?>

      <?php the_post(); ?>

      <?php if ( $first = !isset( $first ) ) : ?>

        <div class="row three-boxes">

          <div class="row-left-section">
            <div class="row-left-section-cover"><h1><?php the_title(); ?></h1><a href="<?php the_permalink() ?>">Read more </a></div>
            <div class="row-left-section-image-container"> <?php the_post_thumbnail(); ?> </div>
          </div>


          <?php   $blogs = new WP_Query(array(
            'post_type' => 'blog',
            'offset' => 1,
            'posts_per_page' => 4,
          )); ?>


          <div class="row-right-section">



            <div class="row-right-section-top">

              <?php while ($blogs->have_posts()) {
                  $blogs->the_post();
              ?>

              <div class="row-right-section-block">
                <div class="blog-info">
                  <p><?php the_title(); ?></p>
                  <p><?php the_field('caption'); ?></p>
                </div>
                <?php the_post_thumbnail(); ?>
              </div>


            <?php  } ?>


            </div>

          </div>

        </div>

    <?php endif; ?>
  <?php endwhile; ?>

  <div class="blog-gallery">

  <?php   $blogsTwo = new WP_Query(array(
    'post_type' => 'blog',
    'offset' => 5,

  )); ?>

  <?php while ($blogsTwo->have_posts()) {
      $blogsTwo->the_post();
  ?>
      <div id="<?php the_title();?>" class="blog-gallery-item" >

        <div class="blog-gallery-item-content">

          <div class="blog-gallery-item-image">
            <?php the_post_thumbnail(); ?>
          </div>

          <div class="blog-gallery-item-info">
            <p><?php the_title(); ?></p>
            <p><?php the_field('caption'); ?></p>
          </div>

        </div>

      </div>


  <?php } ?>


  </div>



  </section>


  <?php






get_footer(); ?>
