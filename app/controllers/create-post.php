<?php
/**
 * @var DB $db
 */

require_once(CORE.'/classes/Validator.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //dd($_POST);
    $fillable = ['title', 'content', 'excerpt'];//ожидаемые поля
    $data = loadReqData($fillable); //соберет только те, которые есть в fillable
    // validation
    $errors = [];
    $rules = [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 190,
        ],
        'excerpt' => [
            'required' => true,
            'min' => 10,
            'max' => 190,
        ],
        'content' => [
            'required' => true,
            'min' => 100,
        ],
    ];
    $validator = new Validator();

    $validation = $validator->validate($data, $rules);
    //dump($validation->errors);
    // if ($validation->hasErrors()) {
    //     print_arr($validation->getErrors());
    // } else {
    //     echo 'SUCCESS';
    // }
    // die;
    if (!$validation->hasErrors()) {
        if ($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)) {
            $_SESSION['success'] = 'OK';
        } else {
            $_SESSION['error'] = 'DB Error';
        }
      //  redirect();
    }
    // if (empty($data['title'])) {
    //     $errors['title'] = 'Title is required';
    // }
    // if (empty($data['content'])) {
    //     $errors['content'] = 'Content is required';
    // }
    // if (empty($data['excerpt'])) {
    //     $errors['excerpt'] = 'Excerpt is required';
    // }
    // if (empty($errors)) {
    //     if ($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)) {
    //         echo 'Post created';
    //     } else {
    //         echo 'DB Error';
    //     }
    // }
}
$title = "Blog/New post";
require_once VIEWS . '/create-post.tmpl.php';