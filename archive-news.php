<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container single-archive">
				<div class="row">
					<?php
					while ( have_posts() ) :
						the_post();
					?>
						<div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
							<div class="archive-img"><?php the_post_thumbnail(); ?></div>
							<div class=""><h5><?php echo get_the_title(); ?></h5></div>
							<div class=""><?php the_excerpt(); ?></div>
						</div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
