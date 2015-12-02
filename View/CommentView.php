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
		return 'Kommentar nr 1';
	}
}