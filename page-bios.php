<?php /*Template Name: Biographies Page*/ ?>

<?php get_header(); ?>


  	<div class="row">
  		<?php $args = array('post_type' => 'bios', 'posts_per_page' => 10);

      $loop = new WP_Query($args);

      while($loop->have_posts()): $loop->the_post(); ?>
        <div class="row biography-main"> <!--- row for each individual -->
          <!-- photo div- if applicable -->
          <div class="three columns u-pull-left">
            <?php if(has_post_thumbnail()){
              the_post_thumbnail();
            }?>
          </div>
          <!-- Name div -->
          <div class="nine columns u-pull-right">
            <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
            <a href="<?php the_permalink();?>">Read More</a>
          </div>



       </div> <!-- closes row -->

    <?php endwhile; ?>



  </div>






<?php get_footer(); ?>
