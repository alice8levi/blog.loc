<?php
global $db;
$id = (int)$_GET['id'] ?? 0;
$post = $db->query("SELECT * FROM posts WHERE post_id = ? LIMIT 1", [$id])->findOrAbort();

require_once POSTS_VIEWS . '/show.tmpl.php';