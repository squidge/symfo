<?php

use Symfony\Component\HttpFoundation\Request;
use Mercury\Core;

$loader = require 'vendor/autoload.php';
$loader->register();

$request = Request::createFromGlobals();

// Our framework is now handling itself the request
$app = new Core();

$response = $app->handle($request);
$response->send();