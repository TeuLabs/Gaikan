<?php

namespace Gaikan;

use DOMDocument;
use DOMElement;
use Exception;
use SimpleXMLElement;

class Element
{

    protected static array $propCache = [];

    public string $elementName;

    protected string $template =
        <<<'EOF'
        <{{ elementName }} {{ attributes }} {{ passableAttributes }}>
            {{ slots }}
            {{ defaultSlot }}
        </{{ elementName }}>
        EOF;

    protected string $passablePropTemplate = "#{{ prop }}#";

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

        // return call_user_func(__NAMESPACE__ . '\\' . $tagName . '::render', $attributeBag);

    }

}