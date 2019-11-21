<?php get_header(); ?>

<div class="container biography-single">
<?php
	if(have_posts()){
		while(have_posts()){
			the_post(); ?>
			<!--  left column with image -->
			<div class="three columns u-pull-left">
				<div class="feature-img">
					<?php the_post_thumbnail(); ?>
				</div>
			</div> <!--  closes left column with image -->
			<!--  right column with content -->
			<div class="nine columns u-pull-right">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div><!--  closes right column-->

<?php	}//end while loop
	}// end if loop
?>
</div>

<?php get_footer(); ?>
