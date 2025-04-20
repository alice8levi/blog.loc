HELLO
<? 

global $db;
dump(file_get_contents('php://input'));//забрать данные из запроса
$api_data = json_decode(file_get_contents('php://input'));
dump($api_data);
$data = $api_data ?? $_POST;
$id = $data['id'] ?? 0;
dump($id);

$db->query("DELETE FROM posts WHERE id = ?", [$id]);
if ($db->rowCount()) {
    $res['answer'] = $_SESSION['success'] = 'Post deleted';
} else {
    $res['answer'] = $_SESSION['error'] = 'Deletion error';
}

if ($api_data) {
    echo json_encode($res);
    die;
}