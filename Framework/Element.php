<?php

namespace Gaikan;

use DOMDocument;
use DOMElement;
use Exception;

class Element
{

    protected static array $propCache = [];

    public string $elementName;

    public ElementAttribute $attributes;

    protected string $template =
        <<<'EOF'
        <{{ elementName }} {{ attributes }} {{ passableAttributes }}>
            {{ slots }}
            {{ defaultSlot }}
        </{{ elementName }}>
        EOF;

    protected string $passablePropTemplate = "#{{ prop }}#";

    public static function parse(string $component)
    {

        $component = trim($component);

        $elementKey = '<';
        $elementStart = strpos($component, $elementKey);
        $elementEnd = strpos($component, " ");

        $element = trim(substr($component, ($elementStart + 1), $elementEnd));
        $elementDom = new DOMElement($element);
        $elementTag = $elementDom->nodeName;

        $attributes = self::getAttrWithValue($elementTag, $component);

        echo "<pre>";
        echo print_r([$elementTag, [$attributes]]);
        echo "</pre>";
    }


    private static function getAttrWithValue(string $componentName, $component): array
    {
        $attributes = [];

        $dom = new DOMDocument();
        $dom->loadHTML($component);
        $element = $dom->getElementsByTagName($componentName)->item(0);

        if ($element->hasAttributes()) {
            foreach ($element->attributes as $attribute) {
                $attribute = $attribute->nodeName;
                $value = $attribute->nodeValue;
                array_push($attributes, [$attribute => $value]);
            }
        }

        return $attributes;
    }

}