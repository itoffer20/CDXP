<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CDXP
 */

?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<?php if (is_active_sidebar('footer-col-1')) {
					dynamic_sidebar('footer-col-1');
				}
				?>
			</div>
			<div class="col-md-3">
				<?php if (is_active_sidebar('footer-col-2')) {
					dynamic_sidebar('footer-col-2');
				}
				?>
			</div>
			<div class="col-md-3">
				<?php if (is_active_sidebar('footer-col-3')) {
					dynamic_sidebar('footer-col-3');
				}
				?>
			</div>
			<div class="col-md-3">
				<?php if (is_active_sidebar('footer-col-4')) {
					dynamic_sidebar('footer-col-4');
				}
				?>
			</div>
		</div>
	</div>
	<div class="copyright">
		<?php if (is_active_sidebar('copyright')) {
			dynamic_sidebar('copyright');
		}
		?>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>