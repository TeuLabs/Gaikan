<?php
require_once __DIR__ . './../vendor/autoload.php';

use Gaikan\Element;
use app\src\components\SCButton;


Element::render('<SCButton icon="$icon" label="Like The Thing" />');

// $icon = 'favorite';
// echo call_user_func(__NAMESPACE__ . 'SCButton::render', $label = 'icon', $icon = 'label');
// echo SCButton('label', 'Icon');
