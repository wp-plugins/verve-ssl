<?php
/*
Plugin Name: Verve SSL
Plugin URI: http://www.kevinverver.com/blog/verve-ssl/
Description: Verve SSL is a WordPress plugin that sets the WordPress login and Administration area to use HTTPS(SSL) and then after logging out of WordPress reverts back to HTTP automatically.  This plugin Also allows for HTTPS(SSL) while viewing your WordPress blog while logged in.
Version: 2.1.1
Author: Kevin Verver
Author URI: http://www.kevinverver.com
License: GPL2
*/
/*  Copyright 2014  Kevin Verver  (email : kevinjoelv@gmail.com)

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
function https() {
function update_insecure($secure) {
$http = $https = get_bloginfo('url');
if ( is_ssl() ) {
$http = str_replace('https://', 'http://', $http);
$https = str_replace('http://', 'https://', $https);
}
$secure = str_replace($http, $https, $secure);
return $secure;
}
ob_start('update_insecure');
$pattern = '/[A-Z]/';
$redirect = ("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if (preg_match($pattern, $redirect, $str) && !is_admin()) {
$redirect = strtolower("https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
header("Location: $redirect");
}
elseif (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off") {
$redirect = ("https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
header("Location: $redirect");
}
}
function nohttps() {
$pattern = '/[A-Z]/';
$redirect = ("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
if (preg_match($pattern, $redirect, $str)) {
$redirect = strtolower("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
header("Location: $redirect");
}
elseif ($_SERVER['HTTPS'] == "on") {
$redirect = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
header("Location: $redirect");
}
else {
return false;
}
}
if (is_user_logged_in()) {
add_action('init', 'https');
}
if ($pagenow == 'wp-login.php' && !is_user_logged_in()) {
add_action('init', 'https');
}
if ($pagenow != 'wp-login.php' && !is_user_logged_in()) {
add_action('init', 'nohttps');
}
?>