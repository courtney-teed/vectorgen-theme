<?php /* Template Name: 404 Page */

get_header(); ?>
  <div class="container">
    <div class="row not-found">
      <div class="twelve columns">
        <h2>Whoops!</h2>
        <h3>Looks like you got lost.</h3>
        <p>Nothing was found at this location.</p><p>Click here to go back
          <a href="<?php home_url('/'); ?>">
          home</a>, or use the search bar below.</p>
          <p id="page-search-form"><?php
        get_search_form(); ?></p>
      </div>
    </div>
  </div>



<?php get_footer(); ?>
