<?php
class Database extends TMSE {
	
	public function connect($host, $dbname, $user, $pass) {
		try {
			global $connect = new PDO("mysql:host=$host;port=3308;dbname=$dbname", $user, $pass);
			global $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "TMSE -> Database: Connected";
		} catch(PDOException $e) {
			echo "TMSE -> Database Error: Connection could not be established due to ". $e->getMessage();
		}
	}
	
	public function checkChat($time, $userID) {
		try {
			$query = $connect->prepare("SELECT * FROM chat WHERE time >= $time");
			$query->execute();
		} catch(PDOException $e) {
			echo "TMSE -> Database Error: Connection could not be established due to ". $e->getMessage();
		}
	}
	
	public function txtChat() {
		$time = time();
			$query = $connect->prepare("INSERT INTO chat(message, user, time) VALUES(?, ?, ?)");
			$query->execute(array("Hi", 0, $time));
	}
}
?>