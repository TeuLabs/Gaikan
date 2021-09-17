<?php

namespace app\src\components;

use Gaikan\Element;

class SCButton extends Element
{

    public static function render($icon, $label): string
    {
        return ('
            <button class="sc-button">
                <i class="sc-button__icon material-icons">' . $icon . '</i>
                <span class="sc-button__label">' . $label . '</span>
            </button>
        ');
    }

}
