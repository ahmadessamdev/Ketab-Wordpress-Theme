/*
 * JS File for : Ketab theme
 * Author      : Ahmed Essam
 */

/* global ketabSubmenu:true */

/* MENU CODE */
jQuery( document ).ready(function($) {
    $( '.menu-item-has-children' ).mouseenter(function() {
	// Reset: stop any events in the other top menu items
	$( '.sub-menu' ).stop( false, true ).hide();
	$( '.menu-item-has-children' ).removeClass( "keep-hover" );
	$( this ).addClass( "keep-hover" );
	// Select the sub menu items under this top menu item 
	// (global as we will need it)
	ketabSubmenu = $( this ).children(":nth-child(2)");
	// Minimum width of links of the submenu = width the top menu item
	ketabSubmenu.children().css({ 
	    "min-width" : $(this).innerWidth() + 'px'
	});
	// Get the auto width of the submenu
	var links_auto_width = ketabSubmenu.innerWidth();
	ketabSubmenu.css({
	    position : 'absolute',
	    top      : $( this ).offset().top + 
		$( this ).outerHeight() + 'px',
	    // if the auto width of the submenu items is larger then the 
	    // top menu item then move the submenu to the right
	    right     : $( this ).offset().right - 
		(links_auto_width - $( this ).innerWidth()) + 'px',
	    zIndex   : 1000
	});
	ketabSubmenu.stop().slideDown( 600 );
	ketabSubmenu.mouseleave(function() {
	    ketabSubmenu.slideUp( 600 );;
	    // Remove the hovered state from the top menu
	    ketabSubmenu.parent().
		removeClass("keep-hover");
	});

    })

    $( '.nav-list' ).mouseleave(function() {
	ketabSubmenu.slideUp( 600 );;
	// Remove the hovered state from the top menu
	$( '.menu-item-has-children' ).
	    removeClass("keep-hover");
    });
});
