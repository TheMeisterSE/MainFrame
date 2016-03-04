<!doctype html>
<html>
	<head>
		<title>TMSE MVC - Under Development</title>
		<?php
		require_once('libraries/TeamSpeak3/TeamSpeak3.php');
		require_once('libraries/TMSE/TMSE.php');
		?>
	</head>
	<body>
		<?php
		$Icecast = new Stream;
		
		echo $Icecast->StreamData("http://dns.themeister.se:8000/status.xsl", "song");
		?>
	</body>
</html>