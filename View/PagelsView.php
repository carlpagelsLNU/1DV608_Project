<?php

class PagelsView {
	
    private $loginController;
    private $message;

    public function __construct(LoginController $loginController) {
      $this->loginController = $loginController;
    }
  
    public function getPagelsMessage() {
      $this->setMessage();
      return $this->message;
    }

	public function setMessage() {
	 if($this->loginController->isSignedIn()) {
         $this->message = '<form method = "POST" action = "">' . '<textarea id = "pagelsMessage" name = "pagelsMessage" rows =50" cols = "100">' . file_get_contents('./data/texts/PagelsMessage.txt') . '</textarea>' . '<input type="submit" name = "save" value="Spara"/>';

      }
      else {
        $this->message = file_get_contents('./data/texts/PagelsMessage.txt');
      }
		}

    public function setNewPagelsMessage() {
      if(isset($_POST['save'])) {
        $pagelsMessage = $_POST['pagelsMessage'];
        $file = fopen("./data/texts/PagelsMessage.txt", "w"); // Open file in write mode
        fwrite($file, $pagelsMessage); // Write new message to file
        fclose($file);
      }

}
}
