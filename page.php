<?php /* Template Name: Standard Page Template */ ?>
<?php get_header(); ?>

      <?php
      if(have_posts()){
        while(have_posts()){
          the_post();?>

          <div class="container interior-page">
            <div class="row">
              <div class="twelve columns featured-image">
                <?php
                  the_post_thumbnail('full'); ?>
              </div><!--closes columns-->
            </div><!--closes row-->
            <div class="row">
              <div class="three columns u-pull-left">
                <h3><?php the_title(); ?></h3>
                <p class="page-subtitle"><?php the_subtitle(); ?></p>
              </div><!--closes columns-->
              <div class="nine columns u-pull-right">
                <?php the_content(); ?>
              </div><!--closes columns-->
            </div><!--closes row-->
        </div><!--closes container-->
        <div class="row">
          <div class="twelve columns gray-background">
            <?php dynamic_sidebar('interior-bottom-callout-widget'); ?>
          </div><!--closes columns-->
        </div><!--closes row-->
        <?php
        }//ends while loop
      }//ends if statement
        ?>

<?php get_footer(); ?>
