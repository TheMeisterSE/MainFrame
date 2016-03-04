<?php
require_once('libraries/TMSE/TMSE.php');

$db = new Database;

$db->connect('localhost','ts3','root','joakim1');

$TMSE->about();
?>