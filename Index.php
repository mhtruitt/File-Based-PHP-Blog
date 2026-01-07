<?php

function loadPosts() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->query('SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        // Handle error, for now return empty array
        return [];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My PHP Blog</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header>
    <h1>My Blog</h1>
    <p>A simple PHP blog application</p>
