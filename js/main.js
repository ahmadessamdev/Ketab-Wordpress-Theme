/*
 * JS File for : Ketab theme
 * Author      : Ahmed Essam
 */

var isSlide = false;
var breakPoint = 950;

/* MENU CODE */
jQuery( document ).ready( function( $ ) {
    // If desktop, create animated window
    if ( $( window ) .width() > breakPoint ) {
	createMenuSlide();
	isSlide = true;
    }

    $( window ).on('resize', function() {
	// Remove animated window if width is reduced
	if ( $( this ).width() <= breakPoint && isSlide === true) {
	    // Remove handlers and styles
	    $( '#top-menu' ).off();
	    $( '#top-menu' ).children().off();
	    $( '#top-menu .sub-menu' ).removeAttr( "style" ).off();
	    $( '#top-menu .menu-item').removeAttr( "style" );
	    isSlide = false;
	} else if ($( this ).width() > breakPoint && isSlide === false) {
	    // Recreate animated menu
	    createMenuSlide();
	    isSlide = true;
	}
    });

    // Menu icon for responsive view
    $( "#menu-icon" ).click( function() {
	$( '#top-menu' ).toggleClass( "responsive" );
	$( this ).toggleClass( "abs");
    });
    
    // Create sliding menu
    function createMenuSlide() {
	$( '#top-menu' ).children().mouseenter(function() {
	    var mouseOnItem = true;
	    var mouseOnSub  = false;
	    var item = $( this );
    	    item.addClass( "keep-hover" );
    	    var curSubMenu = item.children(":nth-child(2)");
    	    // Minimum width of links of the submenu = width the top menu item
    	    curSubMenu.children().css({ 
    		"min-width" : item.innerWidth() + 'px'
    	    });
    	    // Get the auto width of the submenu
    	    var autoWidth = curSubMenu.innerWidth();
    	    curSubMenu.css({
    		position : 'absolute',
    		top      : item.offset().top + item.outerHeight() + 'px',
		left     : item.offset().left,
    		zIndex   : 1000
    	    });
    	    curSubMenu.stop().slideDown( 600 );
	    curSubMenu.mouseenter(function() {
		mouseOnSub = true;
	    });

	    item.mouseleave(function() {
		mouseOnItem = false;
		if ( !mouseOnSub ) {
		    curSubMenu.slideUp( 600 );
    		    item.removeClass("keep-hover");
		}
	    });

	    curSubMenu.mouseleave( function() {
		mouseOnSub = false;
		if ( !mouseOnItem ) {
		    curSubMenu.slideUp( 600 );
    		    item.removeClass("keep-hover");
		}
	    });
	    
	});

    }
});
