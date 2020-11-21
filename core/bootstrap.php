<?php

$app = [];

$app['config'] = require_once "config.php";

return new QueryBuilder(

    Connection::make($app['config']['database'])

);
