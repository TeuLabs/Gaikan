<?php

require_once __DIR__ . './../vendor/autoload.php';

use Gaikan\Application;

$app = new Application(dirname(__DIR__));

$app->route->get('/', 'home');

$app->route->get('/users', function() {
    return 'Hello There User!';
});

$app->run();
