<?php
session_start();


require_once (dirname(__DIR__).'/config/config.php');

require_once CORE . '/functions.php';

require CORE . '/classes/DB.php';
$db_config = require CONFIG . '/db.php';
$db = (DB::getInstance())->getConnection($db_config);


//3
require CORE . '/classes/Router.php';
$router = new Router();
require CONFIG . '/routes.php'; // теперь здесь будут лежать маршруты через $router->...

$router->match();


// require_once CORE . '/router.php';

