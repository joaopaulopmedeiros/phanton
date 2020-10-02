<?php

$database = require_once "core/bootstrap.php";

$router = new Router;

require_once "routes.php";

$URI = trim($_SERVER["REQUEST_URI"], "/");

require $router->direct($URI);