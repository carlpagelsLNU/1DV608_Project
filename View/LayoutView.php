<?php

class LayoutView {
	public function render(MessageView $mv, CommentView $cv) {
		$mainController = new MainController($mv);
		$mainController->isClicked();
		$message = $mv->getMessage();
		$commentForm = $cv->getCommentForm();
		$comments = $cv->getComments();

	echo '<!DOCTYPE html>
      <html>
        <head>
        	<link rel="stylesheet" type="text/css" href="css/Style.php">
          <meta charset="utf-8">
        </head>
        <title>Pagels</title>
			<style type="text/css">
				html, body {height:100%; margin:0; padding:0;}
				#page-background {position:fixed; top:0; left:0; width:100%; height:100%;}
				#viewCount {position:fixed; bottom:0; right:0; width: 300px; text-align:right; padding:10px;}
				#Links {position:relative; padding:10px;}
				#WelcomeMessage {position:relative; width: 730px; contenteditable="true" text-align:left; color: #ffffff; background: rgba(0, 0, 0, .4); padding:10px;}
				#EditButton {position:relative;}
				#PostComment{position:fixed; top:0; right:0;  width: 300px;}
				#Comments{position:fixed; top: 500; right: 0; width: 300px; height: 200px; color: #ffffff; background: rgba(0, 0, 0, .4); overflow:auto;}
	
				ul {
				    list-style-type: none;
				    position:fixed;
   					top:0px;
   					left:0px;
   					margin:0 auto;
				    width:100%;
				    padding: 0;
				    overflow: hidden;
				}
				li {
				    float: left;
				}
				a:link, a:visited {
				    display: block;
				    width: 200px;
				    color: #ffffff;
				    background-color: #000000;
				    text-align: center;
				    padding: 5px;
				    text-decoration: none;
				}
				a:hover, a:active {
				    color: #3e3e8a;
				}
			</style>
		<body>
	<div id="page-background"><img src="./data/background/backgroundImage.jpg" width="100%" height="100%" alt="Smile"></div>
	    <body>
        <div id="viewCount">
         ' . ' Antal besökare: ' . $mv->showHitCount() . '
          </div>
          <div id="Links">
       	    <ul>
			  ' . $mv->getLinks() . '
			</ul>
          </div>
          <div id="WelcomeMessage">
          ' . $message . '
          </div>
          <div id ="PostComment">
       		' . $cv->getCommentForm() . ' 
          </div>
              <div id = "Comments">
          '. $cv->getComments() .'
          </div>
         </body>
      </html>
    ';
	}
}
