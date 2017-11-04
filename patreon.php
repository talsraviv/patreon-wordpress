<?php

/*
Plugin Name: Patreon Wordpress
Plugin URI: https://www.patreon.com/apps/wordpress
Description: Serve patron-only posts - and give ad-free experiences - directly on your website.
Version: 1.2.4
Author: Patreon <platform@patreon.com>
Author URI: https://patreon.com
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define("PATREON_PLUGIN_URL", plugin_dir_url( __FILE__ ) );
define("PATREON_PLUGIN_ASSETS", plugin_dir_url( __FILE__ ).'/assets' );
define("PATREON_TEXT_CONNECT", 'Connect' );
define("PATREON_TEXT_REFRESH", 'Refresh' );
define("PATREON_TEXT_NOT_PATRON", 'Not a Patron?' );
define("PATREON_TEXT_ALREADY_PATRON", 'Already a Patron?' );
define("PATREON_TEXT_BECOME_PATRON", 'Become a Patron!' );
define("PATREON_TEXT_SUPPORT_ON_PATREON", 'Support on Patreon' );
define("PATREON_TEXT_MISTAKEN_PATRON", 'Patron but can\'t see?' );
define("PATREON_TEXT_PLEDGE_NOT_ENOUGH", 'Upgrade!' );
define("PATREON_TEXT_UPGRADE_PLEDGE", 'Upgrade Pledge' );

include 'classes/patreon_wordpress.php';

$Patreon_Wordpress = new Patreon_Wordpress;

?>
