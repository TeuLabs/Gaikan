<?php

namespace Gaikan;
use Gaikan\View;

class Route extends View
{

    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {

        $this->request = $request;

    }

    public function get($route, $response)
    {

        $this->routes['get'][$route] = $response;

    }

    public function resolve()
    {

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $response = $this->routes[$method][$path] ?? false;

        if ($response === false) {
            return "Not Found!";
        }

        if (is_string($response)) {

            return View::render($response);

        }

        return call_user_func($response);

    }

}