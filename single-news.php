<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container single-heading">
				<?php
				while ( have_posts() ) :
					the_post();
				?>
					<h3><?php single_post_title(); ?></h3>
					<?php the_content();
					the_field('karusel')?>
				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
