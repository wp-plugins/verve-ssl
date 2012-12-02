<?php
/*
Plugin Name: Verve SSL
Plugin URI: http://www.kevinverver.com/blog/verve-ssl/
Description: Verve SSL is a WordPress plugin that sets the WordPress login and Administration area to use HTTPS(SSL) and then after logging out of WordPress reverts back to HTTP automatically.  This plugin Also allows for HTTPS(SSL) while viewing your WordPress blog while logged in.
Version: 1.4.5
Author: Kevin Verver
Author URI: http://www.kevinverver.com
License: GPL2
*/
/*  Copyright 2012  Kevin Verver  (email : kevinjoelv@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include(ABSPATH . "wp-includes/pluggable.php");
$user=wp_get_current_user();
function ssladmincheck() {
wp_enqueue_script('ssladmincheck', '/wp-content/plugins/verve-ssl/js/ssladmincheck.js', '', '', false);
}
function forcessl() {
wp_enqueue_script('forcessl', '/wp-content/plugins/verve-ssl/js/forcessl.js', '', '', false);
}
if (is_user_logged_in()) {
forcessl();
add_action('init', 'forcessl');
}
else if (0 == $user->ID) {
ssladmincheck();
add_action('init', 'ssladmincheck');
} 
if ($pagenow == 'wp-login.php') {
 include(ABSPATH . "/wp-content/plugins/verve-ssl/noscript.php");
}
?>
