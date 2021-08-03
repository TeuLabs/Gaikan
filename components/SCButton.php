<?php

namespace app\components;

use Gaikan\Component;

class SCButton extends Component
{

    public function render(): void
    {
        echo ('
        <button class="sc-button sc-button--outlined">
            <span class="sc-button__label">'. $this->props['label'] .'</span>
        </button>
        ');
    }

}
