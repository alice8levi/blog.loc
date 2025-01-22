<?php


define("PATH", 'http://blog.loc');
define("ROOT", dirname(__DIR__));

define("APP", ROOT . '/app');
define("CONTROLLERS", APP . '/controllers');
define("VIEWS", APP . '/views');

define("CORE", ROOT . '/core');

define("PUBLIC", ROOT . '/public');



require CORE . '/functions.php';


$uri = trim(($_SERVER['REQUEST_URI']), '/');

if ($uri === '') {
    require CONTROLLERS . '/index.php';
} elseif ($uri == 'contacts.php') {
    require CONTROLLERS . '/contacts.php';
 } 
  else {
        abort();
}
 //elseif ($uri == 'post') {
//     dd("SHOW POST");
// } else {
//    
// }

