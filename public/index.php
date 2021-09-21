<?php
require_once __DIR__ . './../vendor/autoload.php';

use Gaikan\Element;
// use app\src\components\SCButton;

$icon = 'favorite';

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

Element::render('<SCButton icon="$icon" label="Like The Thing" />');
echo call_user_func(__NAMESPACE__ . 'SCButton::render', $label = 'icon', $icon = 'label');
// echo SCButton('label', 'Icon');
