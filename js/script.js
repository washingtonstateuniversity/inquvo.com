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

	let parallax_elements = Array.from( document.getElementsByClassName( "parallax" ) );

	let parallax = function() {
		parallax_elements.forEach( element => {
			let container = element.getBoundingClientRect();
			let container_center = container.top + ( container.height / 2 );
			let viewport_center = window.innerHeight / 2;
			let y = ( container_center - viewport_center ) / 10;

			if ( window.innerHeight > container.top && 0 < container.bottom ) {
				element.style.backgroundPositionY = "calc(50% + " + y + "px)";
			}
		} );
	};

	window.addEventListener( "scroll", function() {
		window.requestAnimationFrame( parallax );
	} );

	document.addEventListener( "DOMContentLoaded", parallax );
}() );
