<?php

class VonSchantzView {

    private $loginController;
    private $message;

    public function __construct(LoginController $loginController) {
      $this->loginController = $loginController;
    }

    public function getVonSchantzMessage() {
      $this->setMessage();
      return $this->message;
    }

    public function setMessage() {
       if($this->loginController->isSignedIn()) {
        $this->message = '<form method = "POST" action = "">' . '<textarea id = "vonSchantzMessage" name = "vonSchantzMessage" rows =50" cols = "100">' . file_get_contents('./data/texts/VonSchantzMessage.txt') . '</textarea>' . '<input type="submit" name = "save" value="Spara"/>';

      }
      else {
        $this->message = file_get_contents('./data/texts/VonSchantzMessage.txt');
      }
    }

     public function setNewVonSchantzMessage() {
      if(isset($_POST['save'])) {
        $vonSchantzMessage = $_POST['vonSchantzMessage'];
        $file = fopen("./data/texts/VonSchantzMessage.txt", "w"); // Open file in write mode
        fwrite($file, $vonSchantzMessage); // Write new message to file
        fclose($file);
      }
}
}