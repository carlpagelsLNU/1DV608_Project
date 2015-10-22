<?php

date_default_timezone_set('Europe/Stockholm'); // Set the default time zone
//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');
require_once('view/ViewCounterView.php');


// Initiate views
$dt = new DateTimeView();
$lv = new LayoutView();
$l = new LoginView();
$vcv = new ViewCounterView();

$lv->render($dt, $vcv);