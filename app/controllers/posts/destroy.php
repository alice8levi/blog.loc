HELLO
<? 

global $db;
// echo 'file get...<br>';
// dump(file_get_contents('php://input'));//забрать данные из запроса
$api_data = json_decode(file_get_contents('php://input'), true);
// echo 'api get...<br>';
// dump($api_data);
$data = $api_data ?? $_POST;
// echo '$data get...<br>';
// dump($data);
$id = (int)$data['id'] ?? 0;
// echo 'id get...<br>';
// dump($id);

$db->query("DELETE FROM posts WHERE post_id = ?", [$id]);
if ($db->rowCount()) {
    $res['answer'] = $_SESSION['success'] = 'Post deleted';
} else {
    $res['answer'] = $_SESSION['error'] = 'Deletion error';
}

if ($api_data) {
    echo json_encode($res);
    die;
}
redirect('/');