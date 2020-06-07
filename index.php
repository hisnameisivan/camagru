<?php

require_once 'dev.php';            // all errors, debug
require_once 'router/router.php';        // class router
// порядок require играет роль
require_once 'view/view.php';
require_once 'db/db.php';
require_once 'models/Model.php';
require_once 'models/MainModel.php';
require_once 'controllers/Controller.php';
require_once 'controllers/AccountController.php';
require_once 'controllers/MainController.php';

use router\Router;
// use controllers\AccountController;

// echo "start\n";

session_start();

$router = new Router;
$router->run();

// $login = new AccountController;
// $login->loginAction();
