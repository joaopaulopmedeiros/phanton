<?php

$router->get('', 'PagesController@home');
$router->get('demo', 'PagesController@demo');
$router->post('posts', 'PostsController@store');