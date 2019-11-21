	<footer>
		<div class="container" id="footer">
			<div class="row">
				<div class="one-third column footer-menu">
					<?php wp_nav_menu(array(
			              'theme_location' => 'footer-menu',
			              'container-class' => 'menu-footer'
				)); ?>
				</div>

				<div class="one-third column newsletter-quick">
					<?php dynamic_sidebar('center-footer'); ?>
				</div>

				<div class="one-third column social">
					<?php dynamic_sidebar('right-footer'); ?>
				</div>
			</div> <!--Row close -->
			<div class="row">
				<div class="twelve columns">
					<?php dynamic_sidebar('left-footer'); ?>
				</div>
			</div> <!--Row close -->
		</div> <!--Container close-->

	</footer>

	<?php wp_footer(); ?>
  </body>
</html>
