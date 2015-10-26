<?php 

class LoginController {

	private $loginModel;

	public function __construct(LoginModel $loginModel) {
		$this->loginModel = $loginModel;
	}

	public function validateUser($user, $password) {

		if($user == 'Lena' && $password == 'Pagels') {
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