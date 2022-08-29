<?php
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container-fluid taxonomy-block">
	 		<div class="row">
					<?php
				while ( have_posts() ) :
					the_post();
				?>
				<div class="col-12 col-cm-12 col-md-6 col-lg-4 col-xl-4">
					<div class="taxonomy-img d-flex justify-content-center">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="d-flex justify-content-center ">
						<a class="taxonomy-title" href="<?php echo get_permalink();?>"><h4><?php the_title(); ?></h4></a>
						
					</div>
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
