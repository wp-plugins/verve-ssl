var protocol = location.protocol;
var hostname = location.hostname;
var pathname = location.pathname;
var href = location.href;
if (protocol == "http:" ) { protocol = "https:"; location.replace(protocol + "//" + hostname + pathname) } else { };
