<?php get_header(); ?>

<?php
/*
  echo bloginfo('name') . "<br />";;
  echo bloginfo('description') . "<br />";
  echo bloginfo('url') . "<br />";
  echo bloginfo('admin_email') . "<br />";
  echo bloginfo('version') . "<br />";
*/
?>

<?php //this is to output the page title and content of Posts page
    if( is_home() && !is_paged() && get_option('page_for_posts') ) {
      $posts_page_id = get_option('page_for_posts'); ?>
      <h2 class="latest-news"><?php echo get_the_title($posts_page_id); ?></h2>
      <?php $posts_page = get_page( $posts_page_id ); ?>
      <div class="entry-content posts-page-entry-content">
        <?php echo apply_filters('the_subtitle', $posts_page->post_content); ?>
    </div>
<?php } ?>

<?php
  if(have_posts()){
    while(have_posts()){
      the_post();?>

      <div class="container blog-page">
        <div class="row">
          <div class="three columns u-pull-left">
          </div><!--closes columns-->
          <div class="nine columns u-pull-right">
            <div class="blog-featured-image">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
            </div>
            <div class="blog-page-details">
              <h3 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="post-category"><?php the_category(); ?></p>
               <?php
                 $archive_year = get_the_time('Y');
                 $archive_month = get_the_time('m');
                 $archive_day = get_the_time('d');
               ?>
              <p class="post-date"><a href="<?php echo get_day_link($archive_year, $archive_month, $archive_day); ?>"><?php echo get_the_date(); ?></a></p>
              <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
            </div><!--closes blog-page-details-->
          </div><!--closes columns-->
        </div><!--closes row-->
      </div><!--ends container-->

        <?php
        }//ends while loop
      }//ends if statement
        ?>



<!-- <a href="<?php //echo bloginfo('url'); ?>"><?php //echo bloginfo('name'); ?></a> -->


<?php get_footer(); ?>
