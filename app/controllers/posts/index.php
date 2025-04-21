<?php
global $db;

$title = 'Blog Home';
$header = "Recent Posts" ;


$per_page = 5;
$total = $db->query("SELECT COUNT(*) FROM posts")->getColumn();
$pages_cnt = ceil($total / $per_page);
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) {
    $page = 1;
}
if ($page > $pages_cnt) {
    $page = $pages_cnt;
}
$start = ($page - 1) * $per_page;

//выборка на странице
$posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT $start, $per_page")->findAll();

$most_popular_posts = $db->query("SELECT * FROM posts ORDER BY post_id DESC LIMIT 5")->findAll();

require_once POSTS_VIEWS . '/index.tmpl.php';