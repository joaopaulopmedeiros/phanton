<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phanton</title>
    <link rel="stylesheet" href="public/styles.css">
    <style>
        ul {
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div id="app">
        <h1>Demo</h1>
        <form action="/posts" method="POST">
            <label for="title">Make a post</label>
            <input type="text" name="title">
            <button type="submit">Click</button>
        </form>
        <?php if ($posts) : ?>
            <ul>
                <?php foreach ($posts as $post) : ?>
                    <li><?= $post->title ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif ?>
    </div>
</body>

</html>