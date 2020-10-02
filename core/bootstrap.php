<?php

$app = [];

$app['config'] = require_once "config.php";

require_once "core/database/Connection.php";
require_once "core/database/QueryBuilder.php";
require_once "core/Request.php";
require_once "core/Router.php";

return new QueryBuilder(

    Connection::make($app['config']['database'])

);
