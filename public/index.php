<?php

use Zend\Expressive\AppFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$app = AppFactory::create();
$app->get('/', function ($request, $response, $next) {
    $response->getBody()->write('Hello, world!');
    return $response;
});

// Setup routing and dispatching middleware
$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();

$app->run();
