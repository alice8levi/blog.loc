<?php
/**
 * @var Db $db
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //dd($_POST);
    $fillable = ['title', 'content', 'excerpt'];//ожидаемые поля
    $data = loadReqData($fillable); //соберет только те, которые есть в fillable
    // validation
    $errors = [];


    if (empty($data['title'])) {
        $errors['title'] = 'Title is required';
    }
    if (empty($data['content'])) {
        $errors['content'] = 'Content is required';
    }
    if (empty($data['excerpt'])) {
        $errors['excerpt'] = 'Excerpt is required';
    }
    if (empty($errors)) {
        if ($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)) {
            echo 'Post created';
        } else {
            echo 'DB Error';
        }
    }
}
$title = "Blog/New post";
require_once VIEWS . '/create-post.tmpl.php';