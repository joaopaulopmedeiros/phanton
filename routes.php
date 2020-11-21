<?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->post('posts', 'PagesController@posts');