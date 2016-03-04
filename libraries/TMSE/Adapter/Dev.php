<?php
class Dev extends TMSE {
	
	function setLoginType($type) {
		if ($type == 'login') {
			$message = $TMSE->$HTML->htmlLogin($type);
			exit;
		}
	}
	
	function setLoginAdmin($user, $pass) {
		
	}
	
	function setLoginMod($user, $pass) {
		
	}
	
	function setLoginBeta($user, $pass) {
		
	}
	
	function bugReport() {
		
	}
}
?>