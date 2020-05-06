<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

  <body <?php body_class(); ?>>
	<header id="masthead" class="site-header" role="banner">
	   <div class="header-content table">
		   <div class="table-cell">
				<h1 class="site-title sunset-icon">
					<span class="task-logo">
					  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Mountain-Conqueror.png" alt="Mountain-Conqueror"/>
					 </span>
						<span class="hide"><?php bloginfo( 'name' ); ?></span>
						</h1>
						<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
					</div><!-- .table-cell -->
				</div><!-- .header-content -->
				</header><!-- Header -->

				<div class="container container-fluid">
				  <div class="row">
				    <div class="col-sm-4">
					  <nav id="site-navigation" class="main-navigation" role="navigation">
					   <button class="menu-toggle">Menu</button>
						 <?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'container' => false,
								'menu_class' => 'nav-menu',
								'walker'     => new Inc\WalkerNav(),
							) );
						?>
					</nav>
				  </div><!-- div -->
