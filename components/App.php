<?php

namespace app\components;

use app\components\Home;

class App
{
    public function render(): void
    {
        (new Home)->render();
    }
}