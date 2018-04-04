( function() {
	"use strict";

	let toggle_menu = function( e ) {
		e.preventDefault();
		if ( document.body.classList.contains( "menu-open" ) ) {
			document.body.classList.remove( "menu-open" );
			this.setAttribute( "aria-expanded", false );
			this.querySelector( ".screen-reader-text" ).innerHTML = "Open site menu";
		} else {
			document.body.classList.add( "menu-open" );
			this.setAttribute( "aria-expanded", true );
			this.querySelector( ".screen-reader-text" ).innerHTML = "Close site menu";
		}
	};

	document.getElementById( "js-menu-toggle" ).addEventListener( "click", toggle_menu );
}() );
