<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( is_rtl() ): ?>
	    <!-- Install amiri font here -->
	<?php endif; ?>
	<!--[if lt IE 9]>
	    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    </head>
    <body>
	<div id="site-frame">
	    <div id="site" class="container">
		<header id="header">
		    <div id="header-left-col">
			<h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h3 id="tag-line"><?php bloginfo( 'description' ); ?></h3>
		    </div>
		    <div id="header-right-col">
			<div id="social-menu-container">

			<?php
			wp_nav_menu( array( 
			    'menu'	     => 'social-menu',
			    'menu_class'     => 'social-menu',
			    'menu_id'	     => 'social-menu',
			    'container'	     => '',
			    'theme_location' => 'social-menu',
			    'link_before'    => '<span class="screen-reader-text">',
			    'link_after'     => '</span>',
			    'depth'          => 1,
			    'fallback_cb'    => false,
			) ); 
			?>
			</div>
			<form role="search" method="get" id="header-search"
			      action="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <div>
				<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search', 'ketab' ); ?>...">
				<input type="submit" id="searchsubmit" value="">
			    </div>
			</form>

			
		    </div>
		</header>
		
