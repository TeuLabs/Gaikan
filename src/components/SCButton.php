<?php

namespace App\src\components;

class SCButton
{
    public static function render($icon, $label, $type = 'outlined', $link = null): string
    {
        if (!$link) {
            return ('
                <button class="sc-button sc-button--' . $type . '">
                    <i class="sc-button__icon material-icons">' . $icon . '</i>
                    <span class="sc-button__label">' . $label . '</span>
                </button>
            ');
        } else {
            return ('
                <a href="'. $link .'">
                    <button class="sc-button sc-button--'. $type .'">
                        <i class="sc-button__icon material-icons">' . $icon . '</i>
                        <span class="sc-button__label">' . $label . '</span>
                    </button>
                </a>
            ');
        }
    }
}
