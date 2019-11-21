<?php get_header(); ?>

<div class="container individual-blog-post">
<?php
	if(have_posts()){
		while(have_posts()){
			the_post(); ?>
			<div class="row">
				<div class="three columns">
					<div class="other-posts">
	          <div class="pagination-single">
	            <?php previous_post_link('%link', '<< Previous Post'); ?>
	          </div>
						<div class="pagination-single">
	            <?php next_post_link('%link', 'Next Post >>'); ?>
	          </div>
	        </div><!--closes other posts-->
				</div><!--closes columns-->
				<div class="nine columns">
					<div class="feature-img">
						<?php the_post_thumbnail(); ?>
					</div>
					<h2><?php the_title(); ?></h2>
					<p class="post-subtitle"><?php the_subtitle(); ?></p>
					<p class="post-date-individual-post"><?php echo "Published on: " . get_the_date(); ?> </p>
					<?php the_content(); ?>
				</div><!--closes columns-->
			</div><!--closes row-->

<?php	}//end while loop
	}// end if loop
?>
</div>

<?php get_footer(); ?>
