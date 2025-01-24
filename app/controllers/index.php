<?php

$title = 'Blog Home';
$header = "Recent Posts" ;


$posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC")->findAll();
$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();

require_once VIEWS . '/index.tmpl.php';