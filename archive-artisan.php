
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
          <p>Artisans</p>
        </div>
        <div class="header-description-body">
          <p>Meet the crafty craftsmen</p>
        </div>
      </div>

    </div>

    <div class="header-arrow">
      <i class="arrow-down" data-href="#about-top"></i>
    </div>
  </header>

    <section class="team-container">
      <?php
      while (have_posts()) {
        the_post();
        ?>
        <div class="team-member-container">

            <div class="team-member-cover">
              <h1><?php the_title();?></h1>
              <p><?php the_content(); ?></p>
            </div>
            <?php the_post_thumbnail(); ?>

        </div>

      <?php } ?>
    </section>


  <?php






get_footer(); ?>
