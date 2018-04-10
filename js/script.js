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

			if ( window.innerHeight > container.top && 0 < container.bottom ) {
				let container_center = container.top + ( container.height / 2 );
				let viewport_center = window.innerHeight / 2;
				let y = ( container_center - viewport_center ) / 10;

				element.style.backgroundPositionY = "calc(50% + " + y + "px)";
			}
		} );
	};

	document.addEventListener( "DOMContentLoaded", parallax );

	let article_header = document.querySelector( ".article-header" );

	let header_parallax = function() {
		let container = article_header.getBoundingClientRect();

		if ( 0 < container.bottom ) {
			let y = window.pageYOffset;

			article_header.style.backgroundPositionY = "calc(50% + " + y + "px)";
		}
	};

	let fix_site_header = function() {
		let site_header = document.getElementById( "site-header" );
		let y = window.pageYOffset;

		if ( 46 < y ) {
			site_header.classList.add( "fixed" );
		} else {
			site_header.classList.remove( "fixed" );
		}
	};

	window.addEventListener( "scroll", function() {
		if ( article_header ) {
			window.requestAnimationFrame( header_parallax );
		}

		if ( parallax_elements ) {
			window.requestAnimationFrame( parallax );
		}

		if ( 600 >= window.outerWidth && document.body.classList.contains( "admin-bar" ) ) {
			window.requestAnimationFrame( fix_site_header );
		}
	} );

	document.querySelector( ".back-to-top a" ).addEventListener( "click", function( e ) {
		e.preventDefault();

		window.scrollTo( {
			top: 0,
			behavior: "smooth"
		} );
	} );
}() );
