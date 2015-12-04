<?php

class LoginView {
	 private static $login = 'LoginView::Login';
	 private static $logout = 'LoginView::Logout';
	 private static $name = 'LoginView::UserName';
	 private static $password = 'LoginView::Password';
	 private static $cookieName = 'LoginView::CookieName';
	 private static $cookiePassword = 'LoginView::CookiePassword';
	 private static $messageId = 'LoginView::Message';
	 private $loginController;

	 public function __construct(LoginController $loginController) {
	 	$this->loginController = $loginController;
	 }

	 public function getLoginForm() {

	 	if(isset($_POST['LoginView::Login'])) {
	 		$user = $_POST['LoginView::UserName'];
	 		$password = $_POST['LoginView::Password'];
	 		$this->loginController->validateUser($user, $password);
	 	}

	 	if($this->loginController->isSignedIn()) {
	 		$response = $this->generateLogoutForm();
	 	}
	 	else {
	 		$response = $this->generateLoginForm($this->loginController->getMessage());
	 	}

	 	if($this->loginController->isSignedIn()) {
	 		if(isset($_POST['LoginView::Logout'])) {
				$this->loginController->logout();
				$response = $this->generateLoginForm($this->loginController->getMessage());
	 		}
	 	}
	 	return $response;
	 }

	  private function generateLoginForm($message) {
	    return '
	      <form method="post" > 
	        <fieldset>
	          <legend> Logga in </legend>
	          <p id="' . self::$messageId . '">' . $message . '</p>
	          
	          <label for="' . self::$name . '">Användarnamn: </label>
	          <input type="text" id="' . self::$name . '" name="' . self::$name . '" value="" />
	          <label for="' . self::$password . '">Lösenord: </label>
	          <input type="password" id="' . self::$password . '" name="' . self::$password . '" />
	          
	          <input type="submit" name="' . self::$login . '" value="Logga in" />
	        </fieldset>
	      </form>
	    ';

	}
	private function generateLogoutForm() {
		return '
			<form  method="post" >
				<input type="submit" name="' . self::$logout . '" value="Logga ut"/>
			</form>
		';
	}
}