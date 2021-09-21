<?php

namespace App\src\components;

use Gaikan\Element;

class App
{
    public static function render(): string
    {
        return ('
            <main class=`"content-wrap">
                <SCButton icon="favorite" label="Button" />
            </main>
        ');
    }
}