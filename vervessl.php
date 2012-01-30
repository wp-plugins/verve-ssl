<?php
/*
Plugin Name: Verve SSL
Plugin URI: http://www.kevinverver.com/blog/verve-ssl/
Description: Verve SSL is a WordPress plugin that sets the WordPress login and Administration area to use HTTPS(SSL) and then after logging out of WordPress reverts back to HTTP automatically.  This plugin Also allows for HTTPS(SSL) while viewing your WordPress blog while logged in.  
Version: 1.0
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
 $user = wp_get_current_user();
 $Path=$_SERVER['REQUEST_URI'];
 $URL=$_SERVER['SERVER_NAME'];
 $feed = '/blog/feed/';
 $feed_no_slash = '/blog/feed'; 
$URI="http://".$_SERVER['SERVER_NAME'].$Path;
$feed_url="http://".$_SERVER['SERVER_NAME'].$feed;
$feed_url_no_slash="http://".$_SERVER['SERVER_NAME'].$feed_no_slash;
$feed_secure_url="https://".$_SERVER['SERVER_NAME'].$feed;
$feed_secure_url_no_slash="https://".$_SERVER['SERVER_NAME'].$feed_no_slash;
if (0 == $user->ID && $URI != $feed_url && $URI != $feed_secure_url && $URI != $feed_url_no_slash && $URI != $feed_secure_url_no_slash) {
    echo '<meta http-equiv="X-UA-Compatible" content="IE=100" ></meta> <!-- IE Standards Mode -->';
    echo '<script type="text/javascript" src="wp-content/plugins/vervessl/js/ssladmincheck.js"></script>';
} else if ($URI != $feed_url && $URI != $feed_secure_url && $URI != $feed_url_no_slash && $URI != $feed_secure_url_no_slash) {
     echo '<meta http-equiv="X-UA-Compatible" content="IE=100" ></meta> <!-- IE Standards Mode -->';
     echo '<script type="text/javascript" src="wp-content/plugins/vervessl/js/forcessl.js"></script>';
}
