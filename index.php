<?php

$database = require_once "core/bootstrap.php";

require_once "core/Request.php";

$URI = Request::uri();

$router = Router::load("routes.php");

require $router->direct($URI);