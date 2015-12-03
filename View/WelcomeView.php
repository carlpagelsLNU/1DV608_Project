<?php

class WelcomeView {


    private $loginController;
    private $message;
    
    public function __construct(LoginController $loginController) {
      $this->loginController = $loginController;
    }
	
		public function getWelcomeMessage() {
      $this->setMessage();
			return $this->message;
		}



    public function setMessage() {
      if($this->loginController->isSignedIn()) {
        $this->message = '<form method = "POST" action = "">' . '<textarea id = "welcomeMessage" name = "welcomeMessage" rows =25" cols = "100">' . file_get_contents('./data/texts/WelcomeMessage.txt') . '</textarea>' . '<input type="submit" name = "save" value="Spara"/>';

      }
      else {
        $this->message = file_get_contents('./data/texts/WelcomeMessage.txt');
      }
    }

    public function setNewWelcomeMessage() {
      if(isset($_POST['save'])) {
        $welcomeMessage = $_POST['welcomeMessage'];
        $file = fopen("./data/texts/WelcomeMessage.txt", "w"); // Open file in write mode
        fwrite($file, $welcomeMessage); // Write new message to file
        fclose($file);
      }
      
      
       
    }
}