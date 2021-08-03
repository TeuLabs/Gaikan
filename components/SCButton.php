<?php

namespace app\components;

use Gaikan\Component;

class SCButton extends Component
{

    public function render(): void
    {
        if ($this->has_prop('icon') == false) {
            echo ('
            <button class="sc-button sc-button--outlined">
                <span class="sc-button__label">'. $this->props['label'] .'</span>
            </button>
            <br>
            ');
        } else {
            echo ('
            <button class="sc-button sc-button--outlined">
                <i class="sc-button__icon material-icons-outlined">'. $this->props['icon'] .'</i>
                <span class="sc-button__label">'. $this->props['label'] .'</span>
            </button>
            <br>
            ');
        }
    }

}
