( function() {
	"use strict";

	var toggle_menu = function( e ) {
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

	var nodes_to_array = function( e ) {
		return Array.prototype.slice.call( e );
	};

	var parallax_elements = nodes_to_array( document.querySelectorAll( ".parallax" ) );

	var parallax = function() {
		parallax_elements.forEach( function( element ) {
			var container = element.getBoundingClientRect();

			if ( window.innerHeight > container.top && 0 < container.bottom ) {
				var container_center = container.top + ( container.height / 2 );
				var viewport_center = window.innerHeight / 2;
				var y = ( container_center - viewport_center ) / 10;

				element.style.backgroundPositionY = "calc(50% + " + y + "px)";
			}
		} );
	};

	document.addEventListener( "DOMContentLoaded", parallax );

	var article_header = document.querySelector( ".article-header" );

	var header_parallax = function() {
		var container = article_header.getBoundingClientRect();

		if ( 0 < container.bottom ) {
			var y = window.pageYOffset;

			article_header.style.backgroundPositionY = "calc(50% + " + y + "px)";
		}
	};

	var fix_site_header = function() {
		var site_header = document.getElementById( "site-header" );
		var y = window.pageYOffset;

		if ( 46 < y ) {
			site_header.classList.add( "fixed" );
		} else {
			site_header.classList.remove( "fixed" );
		}
	};

	var home_content = nodes_to_array( document.querySelectorAll( ".slide-fade" ) );

	var home_content_motion = function() {
		home_content.forEach( function( element ) {
			var container = element.getBoundingClientRect();

			if ( window.innerHeight > container.top + 50 ) {
				element.classList.add( "animate" );
			} else {
				element.classList.remove( "animate" );
			}
		} );
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

		if ( document.body.classList.contains( "home" ) ) {
			window.requestAnimationFrame( home_content_motion );
		}
	} );

	var home_header_position = function() {
		var hero_top_height = document.querySelector( ".hero div:first-of-type" ).offsetHeight;

		document.querySelector( ".home-header" ).style.top = hero_top_height + "px";
	};

	document.addEventListener( "DOMContentLoaded", function() {
		if ( document.body.classList.contains( "home" ) ) {
			window.requestAnimationFrame( home_content_motion );
			home_header_position();
		}
	} );

	window.addEventListener( "resize", function() {
		if ( document.body.classList.contains( "home" ) ) {
			home_header_position();
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
