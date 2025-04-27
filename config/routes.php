<?php
// карта маршрутов

//Posts
// 5
$router->get('', 'posts/index.php');
$router->get('posts', 'posts/show.php');
$router->get('posts/create', 'posts/create.php');
$router->post('posts', 'posts/store.php');

$router->get('posts/edit', 'posts/edit.php');
$router->put('posts', 'posts/update.php');
$router->patch('posts', 'posts/rates.php');

$router->delete('posts', 'posts/destroy.php');

// Pages
$router->get('contacts', 'contacts.php');