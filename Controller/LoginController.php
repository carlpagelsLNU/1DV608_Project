<?php 

class LoginController {

	private $loginModel;

	public function __construct(LoginModel $loginModel) {
		$this->loginModel = $loginModel;
	}

	public function validateUser($user, $password) {
		$userFile = fopen("./data/username.txt", "r"); #Not commited to github
		$passwordFile = fopen("./data/password.txt", "r"); #Not commited to github

		$usernameFromFile = $userFile = fgets($userFile, 1000);
		$passwordFromFile = $passwordFile = fgets($passwordFile, 1000);

		if(strlen($user) < 1)
			$this->setMessage("Användarnamnet får inte vara tomt");
		else if(strlen($password) < 1)
					$this->setMessage("Lösenordet får inte vara tomt");
		else if($user == $usernameFromFile && $password == $passwordFromFile) {
			$this->setSessionTrue();
		}
		else {
			$this->setMessage("Fel inloggningsuppgifter");
		}
	}

	public function logout() {
		$this->loginModel->logout();
	}

	public function isSignedin() {
		return $this->loginModel->isSignedIn();
	}

	private function setSessionTrue() {
		$this->loginModel->setSessionTrue();
	}

	private function setMessage($message) {
		$this->loginModel->setMessage($message);
	}

	public function getMessage() {
		return $this->loginModel->getMessage();
	}

}