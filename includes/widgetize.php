<?php
/**
 * Register and Display Widget Areas.
 *
 * @package     Compassrome
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2015, Flagship Software, LLC
 * @license     GPL-2.0+
 * @since       1.0.0
 */

add_action( 'widgets_init', 'compassrome_register_sidebars', 5 );
/**
 * Registers sidebars.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
function compassrome_register_sidebars() {
	hybrid_register_sidebar(
		array(
			'id'          => 'primary',
			'name'        => _x( 'Primary Sidebar', 'sidebar', 'compassrome-mpw-rome' ),
			'description' => __( 'The main sidebar. It is displayed on either the left or right side of the page based on the chosen layout.', 'compassrome-mpw-rome' ),
		)
	);
		hybrid_register_sidebar(
		array(
			'id'          => 'header-right',
			'name'        => _x( 'Header Right Sidebar', 'sidebar', 'compassrome-mpw-rome' ),
			'description' => __( 'The top right of the site. Widgets will stack above eachother', 'compassrome-mpw-rome' ),
		)
	);
}


