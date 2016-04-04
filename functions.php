<?php

function theme_name_scripts() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//register_sidebars(2);
register_sidebar( array(  
		       'name'           => 'Left sidebar',  
               'id'             => 'left-sidebar',
		       'before_widget'  => '<div class="sidebar_widget">',  
		       'after_widget'   => '</div>',  
		       'before_title'   => '<h4 class="widgettitle">',
		       'after_title'    => '</h4>'  
                ));
register_sidebar( array(  
		       'name'           => 'Footer Left Column',  
               'id'             => 'footer-left-column',
		       'before_widget'  => '<div class="footer_left_column">',  
		       'after_widget'   => '</div>',  
		       'before_title'   => '<h4 class="widgettitle">',
		       'after_title'    => '</h4>'  
                ));

register_sidebar( array(  
		       'name'           => 'Footer Middle Column',  
               'id'             => 'footer-middle-column',
		       'before_widget'  => '<div class="footer_middle_column">',  
		       'after_widget'   => '</div>',  
		       'before_title'   => '<h4 class="widgettitle">',
		       'after_title'    => '</h4>'
                ));
register_sidebar( array(  
		       'name'           => 'Footer Right Column',  
               'id'             => 'footer-right-column',
		       'before_widget'  => '<div class="footer_right_column">',  
		       'after_widget'   => '</div>',  
		       'before_title'   => '<h4 class="widgettitle">',
		       'after_title'    => '</h4>'
                ));
?>
