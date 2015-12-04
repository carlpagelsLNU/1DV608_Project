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
				html, body {height:100%; margin:0; padding:5;}
				#page-background {position:fixed; top:0; left:0; width:100%; height:100%;}
				#viewCount {position:fixed; bottom:0; right:0; width: 300px; text-align:right; padding:10px;}
				#Links {position:fixed; bottom: 0; left: 0; width: 1200px}
				#WelcomeMessage {position:fixed; width: 730px; top: 50; left: 0; contenteditable="true" text-align:left; color: #ffffff; background: rgba(0, 0, 0, .4); padding:10px; border: 3px solid #000000}
				#PostComment{position:fixed; top:50; right:0; width: 300px; height: 400px; overflow:auto; padding:10px;}
				#EditButton {position:relative;}
	
				ul {
				    list-style-type: none;
				    position:fixed;
   					bottom:0px;
   					left:0px;
   					margin:0 auto;
				    width:100%;
				    padding: 0;
				    overflow: auto;
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
	<div id="page-background"><img src="./data/background/bg.jpg" width="100%" height="100%" alt="Smile"></div>
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
       		' . $commentForm . 
       			 $comments . ' 
          </div>
         </body>
      </html>
    ';
	}
}
