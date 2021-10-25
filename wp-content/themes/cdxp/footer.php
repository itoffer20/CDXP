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

<footer id="colophon" class="footer">
	<div class="footer-main">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget-wrapper">
						<?php if (is_active_sidebar('footer-col-1')) {
							dynamic_sidebar('footer-col-1');
						}
						?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget-wrapper">
						<?php if (is_active_sidebar('footer-col-2')) {
							dynamic_sidebar('footer-col-2');
						}
						?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget-wrapper">
						<?php if (is_active_sidebar('footer-col-3')) {
							dynamic_sidebar('footer-col-3');
						}
						?>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget-wrapper">
						<?php if (is_active_sidebar('footer-col-4')) {
							dynamic_sidebar('footer-col-4');
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="copyright">
			<?php if (is_active_sidebar('copyright')) {
				dynamic_sidebar('copyright');
			}
			?>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>