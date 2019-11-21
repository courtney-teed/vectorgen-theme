<?php /*Template Name: Search Page */ ?>

<?php get_header(); ?>

<div class="container search-page">
	<div class="row">
		<div class="nine columns">
			<?php if(have_posts()){?>
				<p class="search-results-for"><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span'); ?></p>
				<?php while(have_posts()){
					the_post(); ?>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  					<p><?php the_excerpt(); ?>
  					<p class="read-more"><a href="<?php the_permalink() ?>">Read More</a></p>
				<?php }//Ends While
			}else{ ?>
				<h2>Nothing Was Found</h2>
				<p>Sorry, but your search came up with nothing. Please try a different search term.</p><?php
				get_search_form();
			}//End if else
			?>
		</div><!--columns-->
	</div><!--row-->
</div><!--container-->

<?php get_footer(); ?>
