<?php

class LayoutView {
	public function render(DateTimeView $dt, ViewCounterView $vcv) {

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
				#Links {position:relative; width: 100% margin:0 auto; text-align:left; padding:10px;}
				#WelcomeMessage {position:relative; width: 300px; text-align:left; padding:10px;}
				ul {
				    list-style-type: none;
				    position:absolute;
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
         ' . ' Antal besökare: ' . $vcv->showViewCount() . '
          </div>
          <div id="Links">
       	    <ul>
			  <li><a href="#home">Pagels släktforskning</a></li>
			  <li><a href="#news">von Schantz släktforskning</a></li>
			  <li><a href="#contact">Information om Örbäck</a></li>
			  <li><a href="#login">Logga in</a></li>
			</ul>
          </div>
          <div id="WelcomeMessage">
          ' . '<b>Välkommen till Pagels.se, tills information för denna sida skapats fylls den av lorem ipsum:</b>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
           sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
           Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
           nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
           reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
           Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
           mollit anim id est laborum</p> ' . '

          </div>
         </body>
      </html>
    ';
	}
}



// . "<p><a href='?'>Släktforskning Pagels</a></p>" 
      //  	. "<p><a href='?'>Släktforskning von Schantz</a></p>" 
      //  	. "<p><a href='?'>Fakta Örbäckshuset</a></p>" 