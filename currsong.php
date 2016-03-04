<?php 
require_once('libraries/TMSE/TMSE.php');
$Icecast = new Stream;
echo $Icecast->StreamData("http://dns.themeister.se:8000/status.xsl", "song"); ?>