<?php

require_once 'dev.php'; // debug
require_once 'router/router.php';
// порядок require играет роль
require_once 'view/view.php';
require_once 'db/db.php';
require_once 'models/model.php';
require_once 'models/mainModel.php';
require_once 'controllers/controller.php';
require_once 'controllers/accountController.php';
require_once 'controllers/mainController.php';

use router\Router;

session_start();

$router = new Router();
$router->run();
