<?php

date_default_timezone_set('Europe/Stockholm'); // Set the default time zone
//INCLUDE THE FILES NEEDED...
require_once('view/LoginView.php');
require_once('view/DateTimeView.php');
require_once('view/LayoutView.php');
require_once('view/HitCounterView.php');
require_once('view/MessageView.php');
require_once('model/ModelHitCounter.php');
require_once('controller/MainController.php');

// Initiate Models
$modelHitCounter = new ModelHitCounter();

// Initiate Controllers
$mainController = new MainController($modelHitCounter);

// Initiate views
$dt = new DateTimeView();
$lv = new LayoutView();
$l = new LoginView();
$vcv = new HitCounterView($mainController, $modelHitCounter);
$wmv = new MessageView();

$lv->render($dt, $vcv, $wmv);