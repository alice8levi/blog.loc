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



// $data = range(1, 101); //например 100 эл-ов

// $per_page = 10; //кол-во элементов на стр
// $total = count($data); // всего эл-ов
// $pages_cnt = ceil($total / $per_page); //всего нужно страниц

// $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// if ($page < 1) {
//     $page = 1;
// }
// if ($page > $pages_cnt) {
//     $page = $pages_cnt;
// }

// $start = ($page - 1) * $per_page; // id первого элемента на стр

// // dump($data);

// // dump(["per_page $per_page", "total $total", "pages_cnt $pages_cnt", "page $page", "start $start"]);

// //выборка элементов
// dump(array_slice($data, $start, $per_page));

// //нумерация
// for ($i = 1; $i <= $pages_cnt; $i++) {
//     echo "<a href='?page={$i}'>{$i}</a> ";
// }


