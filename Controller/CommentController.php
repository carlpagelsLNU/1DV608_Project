<?php


class CommentController {
	

	public function isCommentValid($name, $content) {
		
		if(strlen($name) < 1)
			return "Namnet får inte vara tomt";
		if(strlen($content) < 1)
			return "Kommentaren får inte vara tom";
		if($name != strip_tags($name))
			return "Otillåtna tecken i namn";
		if($content != strip_tags($content))
			return "Otillåtna tecken i kommentaren";

		$handle = fopen("./data/comment.txt", "a+");
		fwrite($handle, "<p><b>". $name . ":</b><br>" . $content  . "</p>");
		fclose($handle); 
		return "Kommentar tillagd!";

		 	
					 
	}
}