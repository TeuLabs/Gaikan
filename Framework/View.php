<?php

namespace app\Framework;

class View
{
    public function render($view): array|bool|string
    {

        $raw_layout = $this->layout();
        $raw_view = $this->view($view);

        return str_replace('{{ $content }}', $raw_view, $raw_layout);

    }

    protected function layout(): array|bool|string
    {

        ob_start();
        include_once Gaikan::$ROOT_DIR.'/pages/layout/app.gaikan.php';
        return ob_get_clean();

    }

    protected function view($view): array|bool|string
    {

        ob_start();
        include_once Gaikan::$ROOT_DIR.'/pages/'.$view.'.gaikan.php';;
        return ob_get_clean();

    }

}