<?php
declare(strict_types=1);

function loadPosts(): array {
    $file = __DIR__ . '/../data/posts.json';

    if (!file_exists($file)) {
        return [];
    }

    $json = file_get_contents($file);
    if ($json === false) {
        return [];
    }

    $posts = json_decode($json, true);
    return is_array($posts) ? $posts : [];
}

function savePosts(array $posts): void {
    $file = __DIR__ . '/../data/posts.json';
    file_put_contents($file, json_encode($posts, JSON_PRETTY_PRINT));
}

function generateSlug(string $title): string {
    $slug = strtolower(trim($title));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}
