<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>

<body>
    <h1>Index</h1>
    <nav>
        <ul>
            <li>
                <a href="/">index</a>
            </li>
            <li>
                <a href="/about">about</a>
            </li>
        </ul>
    </nav>
    <form method="POST" action="/posts" class="w-25">
        <label for="title">Add a post</label>
        <input type="text" name="title">
        <button type="submit">Click</button>
    </form>
    <ul>
        <?php foreach($posts as $post) : ?>
            <li><?= $post->title?></li>
        <?php endforeach; ?>    
        
    </ul>
</body>

</html>