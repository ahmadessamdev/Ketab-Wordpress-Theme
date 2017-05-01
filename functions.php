<?php

// Styles
function ketab_scripts() {
	wp_enqueue_style( 'ketab-style', 
	                  get_stylesheet_uri(), 
	                  array( 'dashicons' ), 
	                  '1.0' 
	);
    wp_enqueue_script( 'ketab-js', 
                       get_template_directory_uri() . '/js/main.js', 
                       array( 'jquery' ), 
                       false, 
                       true
    );
}

add_action( 'wp_enqueue_scripts', 'ketab_scripts' );

// Register Menu
function ketab_register_menus() {
	// Top Menu
	register_nav_menu('top-menu',__( 'Top Menu' ));
	// Social Menu
	register_nav_menu('social-menu',__( 'Social Menu' ));
}

add_action( 'init', 'ketab_register_menus' );

//Register Sidbars;
register_sidebar( array(  
	'name'          => 'Sidebar 1',  
	'id'            => 'sidebar-1',
	'description'   => 'Main sidebar',		       
	// 'before_widget'  => '<div class="sidebar_widget">',  
	// 'after_widget'	  => '</div>',	
	// 'before_title'	  => '<h4 class="widgettitle">',
	// 'after_title'	  => '</h4>'  
));

// Footer
register_sidebar( array(  
	'name' => 'Footer Column 1',  
	'id'   => 'footer-col-1',
));

register_sidebar( array(  
	'name' => 'Footer Column 2',  
	'id'   => 'footer-col-2',
));

register_sidebar( array(  
	'name' => 'Footer Column 3',  
	'id'   => 'footer-col-3',
));
register_sidebar( array(  
	'name' => 'Footer Column 4',  
	'id'   => 'footer-col-4',
));
?>
