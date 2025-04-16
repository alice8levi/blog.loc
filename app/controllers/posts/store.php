<?
global $db;

require_once(CORE.'/classes/Validator.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //dd($_POST);
    $fillable = ['title', 'content', 'excerpt'];//ожидаемые поля
    $data = loadReqData($fillable); //соберет только те, которые есть в fillable
    // validation  
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
            'min' => 10,
        ],
        'email' => [
            'email' => true,
        ],
        'password' => [
            'required' => true,
            'min' => 6,
        ],
        'password_confirm' => [
            'match' => 'password',
        ],
    ];
    $validator = new Validator();

    $validation = $validator->validate([
        'title' => 'Adffdd fdfdfdsf fdfd',
        'excerpt' => 'yjjujhgvvvvvvvvvvvvfd',
        'content' => 'Adffdd fdfdfdsf fdfdAdffdd fdfdfdsf fdfd',
        'email' => 'mail@mail.com',
        'password' => '123456',
        'password_confirm' => '123456',
    ], $rules);

    if (!$validation->hasErrors()) {
        if ($db->query("INSERT INTO posts (`title`, `content`, `excerpt`) VALUES (:title, :content, :excerpt)", $data)) {
            $_SESSION['success'] = 'OK';
        } else {
            $_SESSION['error'] = 'DB Error';
        }    
    redirect('/');
    } else {
         require POSTS_VIEWS . '/create.tmpl.php';
    }

}