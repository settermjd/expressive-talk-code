<?php

use Zend\Expressive\AppFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$container = include 'config/container.php';

$app = $container->get(\Zend\Expressive\Application::class);

$app->run();
