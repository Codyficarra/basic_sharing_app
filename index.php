<?php
// start session
session_start();


require_once('config.php');

require_once('classes/bootstrap.php');
require_once('classes/controller.php');
require_once('classes/model.php');
require_once('classes/messages.php');

require_once('controllers/home.php');
require_once('controllers/users.php');
require_once('controllers/shares.php');

require_once('models/home.php');
require_once('models/share.php');
require_once('models/users.php');

//phpinfo();

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createcontroller();


if($controller){
    $controller->executeaction();
}

?>