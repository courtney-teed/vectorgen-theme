<?php /*Template Name: Archive Page */ ?>

<?php get_header(); ?>

<div class="container archive-page">
	<div class="row">
		<div class="twelve columns">
			<h2><?php
				if(is_category()){
					single_cat_title();
				}elseif(is_tag()){
					single_tag_title();
				}elseif(is_day()){
					echo "Daily Archives: " . get_the_date();
				}elseif(is_month()){
					echo "Monthly Archives: " . get_the_date('F Y');
				}elseif(is_year()){
					echo "Yearly Archives: " . get_the_date('Y');
				}else{
					echo "Archives";
				}
			?>
			</h2>
			<?php if(have_posts()){
				while(have_posts()){
					the_post();?>
					<div class="twelve columns">
						<div class="index-feature">
                			<?php the_post_thumbnail('large'); ?>
              			</div>
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
             			<p><?php echo "Published  " . get_the_date(); ?></p>
             			<p><?php echo "Written By:  " . get_the_author(); ?></p>
             			<?php the_excerpt(); ?>
             			<p class="read-more"><a href="<?php the_permalink() ?>">Read More</a></p>
					</div>
				<?php
				}//while loop
			}//if statement
			?>
		</div>
	</div><!--Row close-->
</div> <!--Container close-->





<?php get_footer(); ?>
