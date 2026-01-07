<?php
declare(strict_types=1);

// HARD FAIL if functions.php is missing
require_once __DIR__ . '/includes/functions.php';

// HARD FAIL if function is missing
if (!function_exists('loadPosts')) {
    die('Critical error: loadPosts() is not defined.');
}

$posts = loadPosts();

usort($posts, function ($a, $b) {
    return strtotime($b['created_at']) - strtotime($a['created_at']);
});
?>
