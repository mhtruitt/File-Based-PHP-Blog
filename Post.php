<?php
require_once __DIR__ . '/includes/functions.php';

$slug = $_GET['slug'] ?? '';
$posts = loadPosts();

$post = null;

foreach ($posts as $p) {
    if ($p['slug'] === $slug) {
        $post = $p;
        break;
    }
}

if (!$post) {
    die('Post not found.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($post['title']) ?></title>
</head>
<body>

<h1><?= htmlspecialchars($post['title']) ?></h1>
<small><?= htmlspecialchars($post['created_at']) ?></small>

<p><?= $post['content'] ?></p>

<p><a href="index.php">← Back to Blog</a></p>

</body>
</html>
