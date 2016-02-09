<?php
/*
Plugin Name: Blue Blaze Disable XML-RPC
Plugin URI:  https://github.com/blueblazeassociates/blueblaze--disable-xmlrpc
Description: This plugin disables WordPress's XML-RPC system.
Version:     0.1.0
Author:      Blue Blaze Associates
Author URI:  http://www.blueblazeassociates.com
License:     GPL v2 or later
*/

add_filter( 'xmlrpc_enabled', '__return_false' );
