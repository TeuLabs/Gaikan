<?php

namespace Gaikan;

use Exception;
use SimpleXMLElement;
use DOMElement;

class Element
{
    public static string $componentFolder = '\App\src\components\\';
    public static string $pageFolder = '\App\src\page\\';

    /**
     * @param string $tagName
     * @param array $attributes
     * @param array|object|string|null $children
     */
    public function __construct(
        public string $tagName,
        public array $attributes,
        public array|object|string|null $children
    ){}

    /**
     * Renders final component
     *
     * @param string $component
     * @return mixed
     * @throws Exception
     */
    public static function render(string $component): mixed
    {
        $handledElement = self::handleElement($component);
        $classOrFunction = self::$componentFolder . $handledElement->tagName;
        return var_dump($handledElement);
        /*if (!class_exists($classOrFunction)) {
            if (!function_exists($classOrFunction)) {
                throw new \Error("The class/function $classOrFunction does not exist or is not in the right folder. Please create a component with that class/function.");
            } else {
                return call_user_func_array($classOrFunction, $handledElement->attributes);
            }
        } else {
            return call_user_func_array([$classOrFunction, 'render'], $handledElement->attributes);
        }*/
    }

    /**
     * Parses component for its information and puts it in an array.
     *
     * @param string $component
     * @return array|Element
     * @throws Exception
     */
    private static function handleElement(string $component): array|Element
    {
        $element = new SimpleXMLElement($component);
        $tagName = $element->getName();
        $attr = $element->attributes();
        $ch = $element->children();

        $handledAttr = self::handleProps($attr);

        $attributes = [];
        $children = self::handleChildren($ch);

        for ($i = 0; $i <= (count($handledAttr) - 1); $i++) {
            $attributes[$handledAttr[$i][0]] = $handledAttr[$i][1];
        }

        return new Element($tagName, $attributes, $children);
    }

    /**
     * Handles all the props in a component. This function is responsible for sanitizing the raw SimpleXMLElement object data.
     *
     * @param array|object $attributes
     * @return array
     */
    private static function handleProps(array|object $attributes): array
    {
        $attributeBag = [];

        foreach ($attributes as $attr => $val) {
            array_push($attributeBag, [$attr, (string)$val]);
        }

        return $attributeBag;
    }

    private static function handleChildren(array|object $children): array
    {
        $childrenBag = [];

        if (is_string($children)) return [$children];

        foreach ($children as $childTagName => $childObject) {
            $childAttr = self::handleProps($childObject->attributes());
            $childChild = (array)$childObject;
            array_push($childrenBag, new Element($childTagName, $childAttr, $childChild[0]));
        }

        return $childrenBag;
    }

    /**
     * Verifies if the element is a valid HTML element or a custom component, if it is a custom component it will output true, otherwise output false.
     *
     * @param array|object $componentData
     * @return bool
     */
    private static function isCustomComponent(array|object $componentData): bool
    {
        $tagName = $componentData->tagName;
        return false;
    }

}
