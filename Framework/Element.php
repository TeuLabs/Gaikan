<?php

namespace Gaikan;

use DOMElement;

class Element
{

    public static function parse(string $app)
    {
        // Clean this up at some point :)))
        $_app = trim($app);
        $start = strpos($_app, '<');
        $end = strpos($_app, ' ');
        $el = trim(substr($_app, ($start + 1), $end));
        $DOMElement = new DOMElement($el);
        $tag = $DOMElement->nodeName;
        // $attr = $DOMElement->attributes;

        // For testing only!!!
        echo "<pre>";
        echo var_dump($tag);
        echo "</pre>";
    }

}