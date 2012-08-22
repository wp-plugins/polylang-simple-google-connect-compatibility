<?php
/*
Plugin Name: Polylang - Simple Google Connect compatibility
Plugin URI: http://status301.net/wordpress-plugins/polylang-sgc-compatibility/
Description: Ensures smooth operation when both Polylang and Simple Google Connect are active. No options, just activate.
Version: 0.1
Author: RavanH
Author URI: http://status301.net/
*/

add_filter('pre_get_posts', 'polylang_sgc_compatibility', 1);

function polylang_sgc_compatibility() {
	global $polylang;
	if (isset($polylang) && get_query_var('oauth2callback') == 1 )
		remove_filter('pre_get_posts', array(&$polylang, 'pre_get_posts'));
}
