=== Verve SSL ===
Contributors: kevdog98
Donate link: http://www.kevinverver.com/blog/verve-ssl/
Tags: SSL, Admin, Login
Requires at least: 3.3.1
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Verve SSL is a WordPress plugin that sets the WordPress login and Administration area to use HTTPS(SSL). 

== Description ==

Verve SSL is a WordPress plugin that sets the WordPress login and Administration area to use HTTPS(SSL) and then after logging out of WordPress reverts back to HTTP automatically.  This plugin also allows for HTTPS(SSL) while viewing your WordPress blog while logged in.  

<h3>Features</h3>  
* Automatic SSL for WP-Login.php and Administration area 
* SSL security for entire logged in session -  Even when browsing blog while logged in.  
* PHP code only for better compatibility - No JavaScript code.  
* Easy installation - Just install the plugin on a site that has an SSL certificate and it works.  
* No changes to WP-Config.php required.  
* Compatible with WordPress 3.3.1 and higher.  
* Reverts back to HTTP when logged off.  
* Converts URLs to lowercase for better SEO.   

== Installation ==

<h3>Automatic Install</h3> 
Install from the `Plugins\Add New` section by searching `Verve SSL` when logged in to the administration area of a WordPress site.

<h3>Manual Install</h3>
1. Extract ververssl.zip and upload to the `/wp-content/plugins/` directory.
2. Activate the plugin through the `Plugins` menu in WordPress.


== Frequently Asked Questions ==

None as of release 2.0.1

== Changelog ==

= 1.0 =
* Initial Release
= 1.1 =
* Fixed issue with directory name that broke the plugin. 
= 1.2 =
* Fixed issue with not keeping SSL when browsing blog while logged in. 
= 1.3 =
* Fixed issue with RSS feeds.  
* Fixed activation error message.  
= 1.4 =
* Moved the JavaScript files to the header for fast loading.  
= 1.4.1 =
* Optimized code for better and faster processing.
= 1.4.2 =
* Updated plugin to be URL case insensitive.
= 1.4.3 =
* Optimized code for better and faster URL case processing.
= 1.4.4 =
* Updated code to bypass plugin and display message if JavaScript is disabled.
= 1.4.5 =
* Updated doctype for better compatibility with Internet Explorer.
= 2.0 =
* Completely redesigned the plugin using only PHP code and no JavaScript for better compatibility and performance.  
= 2.0.1 =
* Performed general code maintenance to improve performance and update code to covert uppercase URLs to lowercase.  

== Other Notes ==

None as of release 2.0.1
