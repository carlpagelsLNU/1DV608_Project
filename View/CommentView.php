<?php

class CommentView {

	private $loginController;
	private $message = "";
	private $commentController;

	public function __construct(LoginController $loginController, CommentController $commentController) {
		$this->loginController = $loginController;
		$this->commentController = $commentController;
	}


	public function getCommentForm() {
		if($this->loginController->isSignedIn())
			return "";
		else {
			return '
        	  <form method="post">	

          		<p id="message"><br>' . $this->message  . '</br></p>
          		<label> Namn: <br><input type="text" name ="name"></br></label>
          		<label> Kommentar:<br><textarea cols="30" rows="5" name ="content"></textarea></br></label>
          		<input type ="submit" name = "post" value = "Skicka kommentar">
          	  </form>';
         }
       
	}

	private function getMessage() {
		return $this->message;
	}

	public function setMessage($message) {
		$this->message = $message;
	}

	public function getComments() {
		if($this->loginController->isSignedIn())
			return "";
		else {
				return file_get_contents('./data/comment.txt');
		}
	}

	public function getCommentName() {
		return $_POST["name"];
	}

	public function getCommentContent() {
		return $_POST["content"];
	}

	public function writeComment() {
		if(isset($_POST["post"])) {
			$name = $_POST["name"];
			$content = $_POST["content"];
			$this->setMessage($this->commentController->isCommentValid($name, $content));
		}
	
		
	}
}