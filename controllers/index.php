<?php

require_once "models/Post.php";

$posts = App::get('database')->selectAll('posts', "Post");

require_once "views/index.php";