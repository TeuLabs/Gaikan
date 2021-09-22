<?php

namespace App\src\components;

class SCCard
{
    public static function render(string $title, string $subtitle): string
    {
        return ('
            <div>
                <h1>'. $title .'</h1>
                <p>'. $subtitle .'</p>
            </div>
        ');
    }
}