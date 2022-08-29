<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rcpp
 */

?>

	<!-- </div> #content -->

	<footer id="colophon" class="site-footer">
		<div class="container footer-info ">
			<div class="row">
				<div class="col-4 col-cm-4 col-md-4 col-lg-4 col-xl-4">
					<p>Мы находимся:<br><span>г.Минск, ул.Чюрлёниса, 3</span></p>
				</div>
				<div class="col-4 col-cm-4 col-md-4 col-lg-4 col-xl-4">
					<p>Наш e-mail:<br><span>rcpp@bspu.by</span></p>
				</div>
				<div class="col-4 col-cm-4 col-md-4 col-lg-4 col-xl-4">
					<div class="row">
						<p>Мы в соцсетях:</p>
						<div class="soc-seti"><img src="<?php echo get_template_directory_uri(); ?>/image/logotipyi-sotssetej.png" width="100" 	height="100"></div>
					</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
<!-- </div> #page -->

<?php wp_footer(); ?>

</body>
</html>
