<?php

class LayoutView {
	public function render(DateTimeView $dt, ViewCounterView $vcv) {

	echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
        </head>
        <title>Pagels</title>
			<style type="text/css">
				html, body {height:100%; margin:0; padding:0;}
				#page-background {position:fixed; top:0; left:0; width:100%; height:100%;}
				#content {position:absolute; bottom:0; left:0; width: 1300px; text-align:right; padding:10px;}
			</style>
		</head>
		<body>
	<div id="page-background"><img src="./data/background/backgroundImage.jpg" width="100%" height="100%" alt="Smile"></div>
	    <body>
        <div id="content">
         ' . ' Antal besökare: ' . $vcv->showViewCount() . '
          </div>
         </body>
      </html>
    ';
	}
}
