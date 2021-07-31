<?php

namespace app\Framework;

class Gaikan {

    public Route $route;
    public Request $request;
    public static string $ROOT_DIR;

    public function __construct($rootPath) {

        self::$ROOT_DIR = $rootPath;
        $this->request = new Request;
        $this->route = new Route($this->request);

    }

    public function run() {

        echo $this->route->resolve();

    }

}