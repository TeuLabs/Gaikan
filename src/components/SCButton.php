<?php

namespace App\src\components;

use Gaikan\Data;

function SCButton($icon, $type = 'outlined', $link = null): string
{
    $url = 'https://randomuser.me/api/';
    $data = Data::sanitize(Data::get($url));
    $label = $data->results[0]->name->last;

    if (!$link) {
        return ('
                <button class="sc-button sc-button--' . $type . '">
                    <i class="sc-button__icon material-icons">' . $icon . '</i>
                    <span class="sc-button__label">' . $label . '</span>
                </button>
            ');
    } else {
        return ('
                <a href="' . $link . '">
                    <button class="sc-button sc-button--' . $type . '">
                        <i class="sc-button__icon material-icons">' . $icon . '</i>
                        <span class="sc-button__label">' . $label . '</span>
                    </button>
                </a>
            ');
    }
}
