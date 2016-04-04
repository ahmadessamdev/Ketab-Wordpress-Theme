/*
 * JS File for : Ketab theme
 * Author      : Ahmed Essam
 */

/* global ketabSubmenu:true */
/* MENU CODE */
jQuery( document ).ready(function($) {
	// Bind the event to the top menu itmes
	$( '.dropdown' ).mouseenter(function() {
		// Reset: stop any events in the other top menu items
		$( '.sublinks' ).stop( false, true ).hide();
		// Remove any previous hovered state from the top menu
		$( '.dropdown' ).removeClass( "keep-hover" );
		// Start: apply the hover state for current top menu item
		$( this ).addClass( "keep-hover" );
		// Select the sub menu items under this top menu item (global as we will need it)
		ketabSubmenu = $( this ).parent().next();
		// Minimum width of links of the submenu = width the top menu item
		ketabSubmenu.children().css({ 
		    "min-width" : $(this).innerWidth() + 'px'
		});
		// Get the auto width of the submenu
		var links_auto_width = ketabSubmenu.innerWidth();
		ketabSubmenu.css({
			position : 'absolute',
			// top of top menu adding + height of the top menu to be under it
			top      : $( this ).offset().top + 
			           $( this ).outerHeight() + 'px',
			// if the auto width of the submenu items is larger then the top menu item
			// then move the submenu to the right
			left     : $( this ).offset().left - 
			           (links_auto_width - $( this ).innerWidth()) +
                                   'px',
			zIndex   : 1000
		});
		// start the slide down
		ketabSubmenu.stop().slideDown( 600 );
		// Rewind the animation on mouse leave 
		ketabSubmenu.mouseleave(function() { 
			$(this).slideUp( 600 );
			$( '.dropdown' ).removeClass("keep-hover");
		});
	})
	// bind the rewind event to top menu item too
	$( '#nav>ul' ).mouseleave(function() {
		ketabSubmenu.slideUp( 600 );;
		// Remove the hovered state from the top menu
		$( '.dropdown' ).removeClass( "keep-hover" );
	});
});
