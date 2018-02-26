<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lmw
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

			<div class="contact-container">
					<p> Let's chat over tea.<br>
						<a href="" target="">Email me,</a> or
						<a href="" target="">get to know me first.</a>
					</p>
			</div>


			<nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav> <!-- .social-media.navigation -->

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
