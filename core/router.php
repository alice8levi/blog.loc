<?php

require_once CONFIG . '/routes.php';

// parse_url парсит урл на части. нужна для выделения гет запроса
$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/');
//dump($_SERVER['QUERY_STRING']) посмотреть запросы


if (array_key_exists($uri, $routes)&&file_exists(CONTROLLERS . "/{$routes[$uri]}")) {
    require CONTROLLERS . "/{$routes[$uri]}";
} else {
    abort();
}

