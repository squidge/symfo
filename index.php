<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mercury\Core;

$loader = require 'vendor/autoload.php';
$loader->register();

$request = Request::createFromGlobals();

$app = new Core();

$app->map('/', function () {
    return new Response('This is the home page');
});

$app->map('/about', function () {
    return new Response('This is the about page');
});

$response = $app->handle($request);

$response->send();