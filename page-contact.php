
<?php get_header(); ?>


<header>

  <div class="banner">
    <?php the_post_thumbnail(); ?>
  </div>

  <div class="header-description">

    <div class="header-description-container">
      <div class="header-description-title">
        <p><?php the_title(); ?></p>
      </div>
      <div class="header-description-body">
  
      </div>
    </div>

  </div>

  <div class="header-arrow">
    <i class="arrow-down" data-href="#about-top"></i>
  </div>

</header>

<?php  echo do_shortcode('[contact-form-7 id="119" title="Untitled"]'); ?>


<?php get_footer(); ?>
