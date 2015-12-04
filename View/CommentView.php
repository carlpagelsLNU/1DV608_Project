<?php

class CommentView {

	private $loginController;

	public function __construct(LoginController $loginController) {
		$this->loginController = $loginController;
	}


	public function getCommentForm() {
		if($this->loginController->isSignedIn())
			return "";
		else {
			return '
        	  <form action="" method="post">	
          		<label> Namn: <br><input type="text" name ="name"></br></label>
          		<label> Kommentar:<br><textarea cols="30" rows="5" name ="content"></textarea></br></label>
          		<input type ="submit" name = "post" value = "Skicka kommentar">
          	  </form>';
         }
       
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
		}
		$handle = fopen("./data/comment.txt", "a+");
		fwrite($handle, "<b>". $name . "</b><br>" . $content  . "<br>");
		fclose($handle);
	}
}