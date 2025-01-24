<?php


define("PATH", 'https://blog.loc');
define("ROOT", dirname(__DIR__));

define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');

define("CORE", ROOT . '/core');

define("CONFIG", ROOT . '/config');

define("PUBLIC", ROOT . '/public');



require_once CORE . '/functions.php';
require_once CONFIG . '/routes.php';
require_once CORE . '/router.php';

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
// dump(trim($_SERVER['REQUEST_URI'], '/'));
// dump($uri);

// dump($_GET); 
// dump($_SERVER['QUERY_STRING']); // добавить флаги в hta без пробела


if ($uri === '') {
    require CONTROLLERS . '/index.php';
} else if ($uri == 'contacts') {
    require CONTROLLERS . '/contacts.php';
}
else if 
($uri == 'post') {
    dump('SOME POST');
}
  else {
        abort();
}

