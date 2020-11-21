<?php

use Phanton\Core\App;

App::bind('config', require_once 'config.php');

App::bind('database',  new QueryBuilder(

    Connection::make($config = App::get('config')['database'])

));

require_once "helpers/functions.php";