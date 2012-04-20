var protocol = location.protocol;
var hostname = location.hostname;
var pathname = location.pathname;
var href = location.href;
protocol = protocol.toLowerCase();
hostname = hostname.toLowerCase();
pathname = pathname.toLowerCase();
href = href.toLowerCase();
var wpAdminMatch = pathname.match(".*wp-admin.*");
var wpLogin = pathname.match(".*wp-login.php");
if (protocol == "http:" && pathname == wpAdminMatch) { protocol = "https:"; location.replace(protocol + "//" + hostname + pathname) }
if (protocol == "http:" && pathname == wpLogin) { protocol = "https:"; location.replace(protocol + "//" + hostname + pathname) }
else if ((protocol == "https:" && pathname != wpAdminMatch) && (protocol == "https:" && pathname != wpLogin)) { protocol = "http:"; location.replace(protocol + "//" + hostname + pathname) };
