/* global skipLinkFocus */
/**
 * JavaScript for Compassrome
 *
 * Includes all JS which is required within all sections of the theme.
 */
window.compassrome = window.compassrome || {};

(function( window, $, undefined ) {
	'use strict';

	var $document = $( document ),
		$body     = $( 'body' ),
		compassrome   = window.compassrome;

	$.extend( compassrome, {

		//* Global script initialization
		globalInit: function() {
			var $videos = $( '#site-inner' );
			$body.addClass( 'ontouchstart' in window || 'onmsgesturechange' in window ? 'touch' : 'no-touch' );
			$document.gamajoAccessibleMenu();
			$document.compassromeMobileMenu();
			$videos.fitVids();
		}

	});

	// Document ready.
	jQuery(function() {
		skipLinkFocus.init();
		compassrome.globalInit();
	});
})( this, jQuery );
