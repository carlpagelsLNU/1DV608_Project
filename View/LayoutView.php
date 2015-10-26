<?php

class LayoutView {
	public function render(MessageView $mv) {

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
				#WelcomeMessage {position:relative; width: 300px; text-align:left; color: #ffffff; background: rgba(0, 0, 0, .4); padding:10px;}
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
			  <li><a href="#pagels">Pagels släktforskning</a></li>
			  <li><a href="#vonSchantz">von Schantz släktforskning</a></li>
			  <li><a href="#orback">Information om Örbäck</a></li>
			  <li><a href="#login">Logga in</a></li>
			</ul>
          </div>
          <div id="WelcomeMessage">
          ' . $mv->showLoginForm() . '

          </div>
         </body>
      </html>
    ';
	}
}



// . "<p><a href='?'>Släktforskning Pagels</a></p>" 
      //  	. "<p><a href='?'>Släktforskning von Schantz</a></p>" 
      //  	. "<p><a href='?'>Fakta Örbäckshuset</a></p>" 