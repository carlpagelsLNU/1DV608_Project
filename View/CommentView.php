<?php

class CommentView {


	public function getCommentForm() {
		return '
          	<form action="" method="post">	
          	<label> Namn: <br><input type="text" name ="name"></br></label>
          	<label> Kommentar:<br><textarea cols="30" rows="5" name ="content"></textarea></br></label>
          	<input type ="submit" name = "post" value = "Skicka kommentar">
          </form>';
       
	}

	public function getComments() {
		if(file_exists('./data/comment.txt')) {
			return file_get_contents('./data/comment.txt');
		}
	}

	public function writeComment() {
		$handle = fopen("comment.txt", "a");
		$fwrite($handle, "<b>" . $name . "</b>:<br/>" . $comment . "<br/>");
		fclose($handle);
	}

	public function isCommentSent() {
		return $_POST["post"];
	}
}