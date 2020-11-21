<?php

App::bind('config', require_once 'config.php');

App::bind('database',  new QueryBuilder(

    Connection::make($config = App::get('config')['database'])

));
