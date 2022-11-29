<?php



require_once 'core/App.php';
require_once 'core/Controller.php';



$app = new App();
$URI = $app->getParams();

require_once 'routes/web.php';











