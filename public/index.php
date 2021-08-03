<?php

require_once __DIR__ . './../vendor/autoload.php';

use Gaikan\Application;

$app = new Application(dirname(__DIR__));

$app->route->get('/', 'index');

$app->run();
