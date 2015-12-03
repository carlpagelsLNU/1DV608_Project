<?php

class OrbackView {

    private $loginController;
    private $message;

    public function __construct(LoginController $loginController) {
      $this->loginController = $loginController;
    }
  
    public function getOrbackMessage() {
      $this->setMessage();
      return $this->message;
    }

    public function setMessage() {
       if($this->loginController->isSignedIn()) {
        $this->message = '<form method = "POST" action = "">' . '<textarea id = "orbackMessage" name = "orbackMessage" rows =25" cols = "100">' . file_get_contents('./data/texts/OrbackMessage.txt') . '</textarea>' . '<input type="submit" name = "save" value="Spara"/>';

      }
      else {
        $this->message = file_get_contents('./data/texts/OrbackMessage.txt');
      }
    }

    public function setNewOrbackMessage() {
      if(isset($_POST['save'])) {
        $orbackMessage = $_POST['orbackMessage'];
        $file = fopen("./data/texts/OrbackMessage.txt", "w"); // Open file in write mode
        fwrite($file, $orbackMessage); // Write new message to file
        fclose($file);
      }
    }
}