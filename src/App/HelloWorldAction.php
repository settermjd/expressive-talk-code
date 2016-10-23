<?php

namespace App;

class HelloWorldAction
{
    public function __invoke($request, $response, $next)
    {
        $response->getBody()->write('Hello, world!');
        return $response;
    }
}