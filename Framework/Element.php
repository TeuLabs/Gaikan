<?php

namespace Gaikan;

use DOMDocument;
use DOMElement;
use Exception;
use SimpleXMLElement;

class Element
{

    public static function render(string $component)
    {
        return self::parse($component);
    }

    /**
     * @throws Exception
     */
    private static function parse(string $component)
    {

        $element = new SimpleXMLElement($component);
        $tagName = $element->getName();
        $attributes = $element->attributes();

        $attributeBag = [];

        echo $tagName . '<br/>';

        foreach ($attributes as $a => $v) {
            array_push($attributeBag, [$a => $v]);
        }

        echo print_r(json_encode($attributeBag));

        return call_user_func($tagName . '::render');

    }

}