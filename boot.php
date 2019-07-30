<?php
/**
 * Factory Shortcodes
 *
 * @author        Alex Kovalev <alex.kovalevv@gmail.com>
 * @since         1.0.0
 * @package       factory-shortcodes
 * @copyright (c) 2018, Webcraftic Ltd
 *
 */

if ( defined( 'FACTORY_SHORTCODES_000_LOADED' ) ) {
	return;
}

define( 'FACTORY_SHORTCODES_000_VERSION', '3.2.6' );

define( 'FACTORY_SHORTCODES_000_LOADED', true );

define( 'FACTORY_SHORTCODES_000_DIR', dirname( __FILE__ ) );

#comp merge
require( FACTORY_SHORTCODES_000_DIR . '/shortcodes.php' );
require( FACTORY_SHORTCODES_000_DIR . '/shortcode.class.php' );
#endcomp
