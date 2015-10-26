<?php

class LoginModel {
	
	private $message;


	public function isSignedIn() {
		if(isset($_SESSION['signedIn']))
			return true;
		return false;
	}

	public function setMessage($message) {
		$this->message = $message;
	}

	public function getMessage() {
		return $this->message;
	}

	public function setSessionTrue() {
		$_SESSION['signedIn'] = true;
	}

	public function logout() {
		unset($_SESSION['signedIn']);
	}
}