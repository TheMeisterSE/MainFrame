<?php
require_once('libraries/TeamSpeak3/TeamSpeak3.php');
require_once('libraries/TMSE/TMSE.php');

$db = new Database;

$db->connect('localhost','ts3','root','joakim1');

$ts3_VirtualServer = TeamSpeak3::factory("serverquery://serveradmin:obcCnnDA@127.0.0.1:10011/?server_port=9988&nickname=Administrator");

$ts3_VirtualServer->clientGetByName("FelaxBa")->move(43);
$ts3_VirtualServer->clientGetByName("FelaxBa")->addServerGroup(53);
?>