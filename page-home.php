<?php /* Template Name: Home Page Template */ ?>

<?php get_header(); ?>

<div class="container homepage">
  <!-- hero image section -->
  <div class="row">
    <div class="twelve columns">
      <?php dynamic_sidebar('hero-image'); ?>
    </div>
  </div><!-- closes row -->

  <div class="row">
    <!-- call out link -->
    <div class="twelve columns gray-background">
      <?php dynamic_sidebar('text-block-callout'); ?>
    </div>
  </div><!-- closes row -->

  <div class="row section-header">
    <div class="twelve columns">
      <?php dynamic_sidebar('section-header-one'); ?>
    </div>
  </div><!-- closes row -->



  <div class="row featured-stories">
    <!-- featured blog posts -->
    <div class="one-third column dark-gray-background">
      <?php dynamic_sidebar('left-featured-page'); ?>
    </div>
    <div class="one-third column dark-gray-background">
      <?php dynamic_sidebar('middle-featured-page'); ?>
    </div>
    <div class="one-third column dark-gray-background">
      <?php dynamic_sidebar('right-featured-page'); ?>
    </div>
  </div><!-- closes row -->

  <div class="row section-header">
    <div class="twelve columns">
      <?php dynamic_sidebar('section-header-two'); ?>
    </div>
  </div><!-- closes row -->

  <div class="row additional-sections">
    <div class="twelve columns dark-gray-background">
      <?php dynamic_sidebar('bottom-home-text-widget'); ?>
    </div>
  </div>
  <div class="row additional-sections">
    <div class="twelve columns dark-gray-background">
      <?php dynamic_sidebar('bottom-home-text-widget-2'); ?>
    </div>
  </div><!-- closes row -->

</div>




<?php get_footer(); ?>
