<?php

namespace App\src\components;

class SCCard
{
    public static function render($title, $subtitle, $children = null): string
    {
        return ('
            <div>
                <h1>'. $title .'</h1>
                <p>'. $subtitle .'</p>
                '. $children .'
            </div>
        ');
    }
}