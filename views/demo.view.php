<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <h1>Demo</h1>
    <form action="/posts" method="POST">
        <label for="title">Make a post</label>
        <input type="text" name="title">
        <button type="submit">Click</button>
    </form>    
    <?php if($posts) :?>
    <ul>
        <?php foreach($posts as $post) : ?>
            <li><?= $post->title?></li>
        <?php endforeach; ?>        
    </ul>
    <?php endif ?>
</body>
</html>