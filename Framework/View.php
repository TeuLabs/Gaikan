<?php

namespace Gaikan;

class View
{
    public function render($view): array|bool|string
    {

        $raw_layout = $this->layout();
        $raw_view = $this->view($view);

        return str_replace("@inject('content')", $raw_view, $raw_layout);

    }

    public function findTemplate($page) {

        $open = strpos("@template()", "(");
        $close = strpos("@template()", ")");

    }

    protected function layout(): array|bool|string
    {

        ob_start();
        include_once Application::$ROOT_DIR.'/src/pages/layout/app.gaikan.php';
        return ob_get_clean();

    }

    protected function view($view): array|bool|string
    {

        ob_start();
        include_once Application::$ROOT_DIR.'/src/pages/'.$view.'.gaikan.php';;
        return ob_get_clean();

    }

}