<?php
require_once __DIR__ . '/includes/functions.php';

$title = trim($_POST['title'] ?? '');
$content = trim($_POST['content'] ?? '');

if ($title === '' || $content === '') {
    die('Title and content are required.');
}

$posts = loadPosts();

$newPost = [
    'id' => uniqid(),
    'title' => htmlspecialchars($title, ENT_QUOTES, 'UTF-8'),
    'slug' => generateSlug($title),
    'content' => nl2br(htmlspecialchars($content, ENT_QUOTES, 'UTF-8')),
    'created_at' => date('Y-m-d H:i')
];

$posts[] = $newPost;
savePosts($posts);

header('Location: index.php');
exit;
