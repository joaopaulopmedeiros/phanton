<?php

require_once "vendor/autoload.php";

$database = require_once "core/bootstrap.php";

$router = Router::load("routes.php");

$router->direct(Request::uri(), Request::method());