<?php


define("PATH", 'http://blog.loc');
define("ROOT", dirname(__DIR__));

define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');

define("CORE", ROOT . '/core');

define("PUBLIC", ROOT . '/public');



require CORE . '/functions.php';
require CONTROLLERS . '/index.php';
