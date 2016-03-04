<?php
/*
TMSE Framework brought to you by
Joakim Melin from themeister.se
*/


/*
	Version Check
*/

// check current version and for new version




// Standard

class TMSE {
	const TMSE_VERSION = 0.8;
	const TMSE_AUTHOR = "Joakim Melin";
	const TMSE_WEBSITE = "http://www.themeister.se/";
	const TMSE_SUPPORT = false;
	const TMSE_ID = 1;
	const TMSE_LICENSE = 2;
	
	function loadClasses() {
		// before loading, check new versions
		//require('Basic/Data.php');
		require('Adapter/Icecast.php');
	}
	
	function license($lid) {
		if ($lid == 0) {
			return "Unknown";
		} elseif ($lid == 1) {
			return "Free";
		} elseif ($lid == 2) {
			return "Paid";
		}
	}
	
	function about() {
		echo "<p>Using TMSE MVC ".self::TMSE_VERSION." by <a href=\"".self::TMSE_WEBSITE."\">".self::TMSE_AUTHOR."</a> with the licence ".self::license(self::TMSE_LICENSE)."</p>";
	}
	
	function version() {
		echo self::TMSE_VERSION;
	}
	
	function versionUpdate() {
		// retrieve new version and check against old
	}

}

$TMSE = new TMSE;

$TMSE->loadClasses();

?>