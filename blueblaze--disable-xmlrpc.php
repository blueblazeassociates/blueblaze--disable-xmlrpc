<?php
/**
 * Blue Blaze Favicons
 *
 * @author  Blue Blaze Associates
 * @license GPL-2.0+
 * @link    https://github.com/blueblazeassociates/blueblaze--disable-xmlrpc
 */

/*
 * Plugin Name:       Blue Blaze Disable XML-RPC
 * Plugin URI:        https://github.com/blueblazeassociates/blueblaze--disable-xmlrpc
 * Description:       This plugin disables WordPress's XML-RPC system.
 * Version:           1.0.0
 * Author:            Blue Blaze Associates
 * Author URI:        http://www.blueblazeassociates.com
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/blueblazeassociates/blueblaze--disable-xmlrpc
 * Requires WP:       4.5
 * Requires PHP:      5.6
*/

add_filter( 'xmlrpc_enabled', '__return_false' );
