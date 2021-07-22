<?php
/*
 *
 *  Copyright (c) 2021 GrowStocks
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 *
 */

namespace Components;

require_once('../Framework/Component.php');
use Framework\Component;

class ScButton extends Component {

    public static function render(
        String $type,
        String $icon,
        String $label,
        Bool $is_disabled = false
    ) {

        $_icon_html = '<i class="material-icons sc-button__icon">'.$icon.'</i>';
        $_label_html = '<span class="sc-button__label">'.$label.'</span>';

        if ($type == 'text') {
            echo '
                <button class="sc-button" '. Component::render_if('disabled', $is_disabled, 'disabled') .'>
                    '. Component::render_if('exists', $icon, $_icon_html) .'
                    '. Component::render_if('exists', $label, $_label_html) .'
                </button>
            ';
        }

        if ($type == 'outlined') {
            echo '
                <button class="sc-button sc-button--outlined" '. Component::render_if('disabled', $is_disabled, 'disabled') .'>
                    '. Component::render_if('exists', $icon, $_icon_html) .'
                    '. Component::render_if('exists', $label, $_label_html) .'
                </button>
            ';
        }

        if ($type == 'filled') {
            echo '
                <button class="sc-button sc-button--filled" '. Component::render_if('disabled', $is_disabled, 'disabled') .'>
                    '. Component::render_if('exists', $icon, $_icon_html) .'
                    '. Component::render_if('exists', $label, $_label_html) .'
                </button>
            ';
        }

    }

}
