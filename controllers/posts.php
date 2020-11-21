<?php 

App::get('database')->insert('posts', [
    'title' => $_POST['title']
]);

header('Location: /');