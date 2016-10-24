<?php

// dependencies.global.php
use Zend\ServiceManager\Factory\InvokableFactory;
use \Zend\Expressive\Container\ApplicationFactory;
use \Zend\Expressive\Application;
use \App\HelloWorldAction;

return [
    'dependencies' => [
        'factories' => [
            Application::class => ApplicationFactory::class,
            HelloWorldAction::class => InvokableFactory::class
        ],
    ]
];