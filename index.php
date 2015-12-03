<?php
session_start();

//INCLUDE THE FILES NEEDED...
require_once('view/LayoutView.php');
require_once('view/LoginView.php');
require_once('view/HitCounterView.php');
require_once('view/OrbackView.php');
require_once('view/PagelsView.php');
require_once('view/VonSchantzView.php');
require_once('view/WelcomeView.php');
require_once('view/MessageView.php');
require_once('view/CommentView.php');

require_once('model/ModelHitCounter.php');
require_once('model/LoginModel.php');

require_once('controller/HitCountController.php');
require_once('controller/LoginController.php');
require_once('controller/MainController.php');

// Initiate Models
$modelHitCounter = new ModelHitCounter();
$loginModel = new LoginModel();

// Initiate Controllers
$hitCountController = new HitCountController($modelHitCounter);
$loginController = new LoginController($loginModel);

// Initiate views
$cv = new CommentView();
$lv = new LayoutView();
$l = new LoginView($loginController);
$ov = new OrbackView($loginController);
$pv = new PagelsView($loginController);
$vsv = new VonSchantzView($loginController);
$wm = new WelcomeView($loginController);
$hcv = new HitCounterView($hitCountController, $modelHitCounter);
$wmv = new MessageView($l, $hcv, $ov, $pv, $vsv, $wm, $cv);
$mainController = new MainController($wmv);

$lv->render($wmv, $cv);