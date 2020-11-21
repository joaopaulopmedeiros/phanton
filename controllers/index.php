<?php

require_once "models/Post.php";

$posts = $database->selectAll('posts', "Post");

require_once "views/index.php";