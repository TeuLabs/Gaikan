<?php

namespace App\src\components;

class SCButton
{
    public static function render(string $icon, string $label): string
    {
        return ('
            <button class="sc-button">
                <i class="sc-button__icon material-icons">' . $icon . '</i>
                <span class="sc-button__label">' . $label . '</span>
            </button>
        ');
    }
}
