<?php

namespace app\components;

use Gaikan\Component;
use app\components\SCButton;

class Home extends Component
{

    public function render(): void
    {
        (new SCButton(['label' => 'Label Property']))->render();
    }

}