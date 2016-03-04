<?php
/*header("Content-Type: text/event-stream");
header("Cache-Control: no-cache");
header("Connection: keep-alive");*/
require_once('libraries/TMSE/TMSE.php');
$lastId = $_SERVER["HTTP_LAST_EVENT_ID"];
if (isset($lastId) && !empty($lastId) && is_numeric($lastId)) {
    $lastId = intval($lastId);
    $lastId++;
}

while (true) {
	$time = time();
    $data = "Hi";
    if ($data) {
        checkMessage($time,$lastId);
        $lastId++;
    }
    sleep(2);
}

function checkMessage($time,$userID) {
	$Db = new Database;
	$Db->connect('localhost','mvc','root','joakim1');
	$Db->txtChat();
	if ($Db->checkChat($time,$userID) >= 1) {
		// show updates
		echo "id: $userID\n";
		echo "data: Update\n\n";
	} else {
		echo "Hi";
	}
	ob_flush();
	flush();
}

function sendMessage($id) {
    echo "id: $id\n";
    echo "data: ".$total_time."s\n\n";
    ob_flush();
    flush();
}
?>