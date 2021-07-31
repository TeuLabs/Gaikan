<?php

require_once __DIR__ . './../vendor/autoload.php';

use app\Framework\Gaikan;

$app = new Gaikan(dirname(__DIR__));

$app->route->get('/', 'home');

$app->route->get('/users', function() {
    return 'Hello There User!';
});

$app->run();
