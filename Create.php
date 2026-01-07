<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Post</title>
</head>
<body>

<h1>Create New Post</h1>

<form method="post" action="save.php">
    <p>
        <label>
            Title<br>
            <input type="text" name="title" required>
        </label>
    </p>

    <p>
        <label>
            Content<br>
            <textarea name="content" rows="8" required></textarea>
        </label>
    </p>

    <button type="submit">Save Post</button>
</form>

<p><a href="index.php">← Back to Blog</a></p>

</body>
</html>

