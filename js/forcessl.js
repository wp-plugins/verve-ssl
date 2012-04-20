var protocol = location.protocol;
var hostname = location.hostname;
var pathname = location.pathname;
var href = location.href;
protocol = protocol.toLowerCase();
hostname = hostname.toLowerCase();
pathname = pathname.toLowerCase();
href = href.toLowerCase();
if (protocol == "http:" ) { protocol = "https:"; location.replace(protocol + "//" + hostname + pathname) } else { };
