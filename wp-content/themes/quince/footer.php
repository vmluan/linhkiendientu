	</div><!-- #main  -->

	<?php get_sidebar('footer'); ?>
	
	<nav id="mobile-site-navigation" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
	</nav><!-- #mobile-site-navigation -->
	
</div><!-- #wrapper -->

<?php if (ot_get_option('scroll_to_top_button') == 'on'){
	echo '<a href="#top" class="scrollToTop"><i class="fa fa-chevron-up"></i></a>';
} ?>	
		
<?php echo ot_get_option('code_before_body'); ?>
<?php wp_footer(); ?>
</body>
</html>