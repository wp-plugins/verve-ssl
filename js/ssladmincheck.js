var protocol = location.protocol;
var hostname = location.hostname;
var pathname = location.pathname;
var href = location.href;
protocol = protocol.toLowerCase();
hostname = hostname.toLowerCase();
pathname = pathname.toLowerCase();
href = href.toLowerCase();
var wpadminmatch = pathname.match(".*wp-admin.*");
var wplogin = pathname.match(".*wp-login.php");
if (protocol == "http:" && pathname == wpadminmatch) { protocol = "https:"; location.replace(protocol + "//" + hostname + pathname) }
if (protocol == "http:" && pathname == wplogin) { protocol = "https:"; location.replace(protocol + "//" + hostname + pathname) }
else if ((protocol == "https:" && pathname != wpAdminMatch) && (protocol == "https:" && pathname != wpLogin)) { protocol = "http:"; location.replace(protocol + "//" + hostname + pathname) };
