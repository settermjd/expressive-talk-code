<?php

use Zend\Expressive\AppFactory;
use Zend\ServiceManager\ServiceManager;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$container = new ServiceManager();

$container->setInvokableClass(
    \App\HelloWorldAction::class
);

$app = AppFactory::create();
$app->get('/', \App\HelloWorldAction::class);

// Setup routing and dispatching middleware
$app->pipeRoutingMiddleware();
$app->pipeDispatchMiddleware();

$app->run();
