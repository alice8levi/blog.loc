<?php

require_once (dirname(__DIR__).'/config/config.php');

require_once CORE . '/functions.php';

require CORE . '/classes/DB.php';
$db_config = require CONFIG . '/db.php';
// $db = new DB($db_config);


// $posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC")->fetchAll();
// dd($posts);

// dd($db);

/* $db2 = new Db($db_config);
dump($db);
dd($db2); */
$db = (DB::getInstance())->getConnection($db_config);

require_once CORE . '/router.php';

