<!doctype html>
<html>
<head>
</head>
<body>
<script>
if (!!window.EventSource) {
    var source = new EventSource("eventstream.php");
	
	source.addEventListener("message", function(e) {
    console.log(e.data);
}, false);

source.addEventListener("open", function(e) {
    console.log("Connection was opened.");
}, false);

source.addEventListener("error", function(e) {
    console.log("Error - connection was lost.");
}, false);
} else {
    alert("Your browser does not support Server-sent events! Please upgrade it!");
}

</script>
</body>
</html>