<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rcpp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">
		<div class="header-block container-fluid row">
			<div class="row col-12 col-cm-12 col-md-12 col-lg-12 col-xl-4">
				<div class="logo col-4 col-cm-4 col-md-4 col-lg-4 col-xl-6 d-flex flex-wrap align-content-center justify-content-end">
					<?php the_custom_logo(); ?>
				</div><!-- .site-branding -->
				<div class="logo-text col-8 col-cm-8 col-md-8 col-lg-8 col-xl-6 d-flex flex-wrap align-content-center"><p>РЕСПУБЛИКАНСКИЙ ЦЕНТР ПСИХОЛОГИЧЕСКОЙ ПОМОЩИ</p>
				</div>
			</div>
			<div class="col-12 col-cm-12 col-md-12 col-lg-12 col-xl-8">
				<div class="">
					<div class="header-block-info row col-12 col-cm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="telefon col-8 col-cm-8 col-md-9 col-lg-6 col-xl-6 d-flex justify-content-center align-content-center">
							<a href="tel:+375173001006">+375  17  300  1006</a>
						</div>
						<div class="vopros col-4 col-cm-4 col-md-3 col-lg-4 col-xl-4 d-flex align-content-end">
							<button class="open_modal">ЗАДАТЬ ВОПРОС</button>
						</div>
						<div class="eye-full col-0 col-cm-0 col-md-0 col-lg-2 col-xl-2 d-flex justify-content-end"><?php echo do_shortcode( '[bvi]' ); ?>
						</div>
					</div>
					<div class="nav-block col-12 col-cm-12 col-md-12 col-lg-12 col-xl-12">
						<nav id="site-navigation" class="nav-pills">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								) );
							?>
							<button class="flex-sm-fill text-sm-center nav-link active">rrrrrr</button>
						</nav><!-- #site-navigation -->
					</div>
				</div> 
			</div>
		</div>
		<div class="pos-f-t" id="menu2">
		    <div class="collapse" id="navbarToggleExternalContent">
			    <div class="p-4">
					<nav class="nav nav-pills">
						<?php
							wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							) );
						?>
					</nav><!-- #site-navigation -->
			    </div>
		    </div>
			<div class="container-fluid row">
			    <nav class="navbar navbar-dark col-9">
			   	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    </nav>
			    <div class="eye col-3"><?php echo do_shortcode( '[bvi]' ); ?></div>
			</div>
		</div>

		<div class="popup container col-10 col-cm-8 col-md-6 col-lg-4 col-xl-4">

			<div class="close_modal">&#x2716</div>
			<div><?php echo do_shortcode( '[wpforms id="510"]' ); ?></div>
			
		</div>
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			<?php if(function_exists('bcn_display'))
			{
				bcn_display();
			}?>
		</div>

		<!-- выделение активной кнопки меню -->

		<script>
			$('ul').toggleClass('nav justify-content-center');
			(function () {
			  let a = document.querySelectorAll('.menu a');
			    for (let i=a.length; i--;) {
			      if (a[i].href === window.location.pathname || a[i].href === window.location.href) a[i].className += ' activ-button'; 
			    }
			})();

		</script>

	</header><!-- #masthead -->

