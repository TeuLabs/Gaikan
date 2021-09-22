<?php

namespace Gaikan;

use Exception;
use SimpleXMLElement;
use SimpleXMLIterator;

class Element
{
    public string $tagName;
    public array $attributes;
    public array|object $children;

    public static string $componentFolder = '\App\src\components\\';

    /**
     * @param $tagName
     * @param $attributes
     * @param $children
     */
    public function __construct($tagName, $attributes, $children)
    {
        $this->tagName = $tagName;
        $this->attributes = $attributes;
        $this->children = $children;
    }

    /**
     * Renders final component
     *
     * @param string $parentComponent
     * @return mixed
     * @throws Exception
     */
    public static function render(string $parentComponent): mixed
    {
        $parsedComponent = self::parse($parentComponent);
        $class = self::$componentFolder . $parsedComponent->tagName;
        // return var_dump($parsedComponent);
        if (!class_exists($class)) {
            throw new \Error("The class $class does not exist or is not in the right folder. Please create a component with that class.");
        } else {
            return call_user_func_array([$class, 'render'], $parsedComponent->attributes);
        }
    }

    /**
     * Parses component for its information and puts it in an array.
     *
     * @param string $component
     * @return array|Element
     * @throws Exception
     */
    private static function parse(string $component): array|Element
    {
        $element = new SimpleXMLElement($component);
        $tagName = $element->getName();
        $attributes = $element->attributes();
        $children = [];

        if (!preg_match('~^\p{Lu}~u', $tagName)) {
            throw new \Error("The component name $tagName is expected to be starting with a capital letter.");
        } else {
            $handledAttr = self::handleProps($attributes);

            $attrDump = [];

            for ($i = 0; $i <= (count($handledAttr) - 1); $i++) {
                $attrDump[$handledAttr[$i][0]] = $handledAttr[$i][1];
            }

            return new Element($tagName, $attrDump, $children);
        }
    }

    /**
     * Handles all the props in a component. This function is responsible for sanitizing the raw SimpleXMLElement object data.
     *
     * @param array|object $attributes
     * @return array
     */
    protected static function handleProps(array|object $attributes): array
    {
        $attributeBag = [];

        foreach ($attributes as $attr => $val) {
            array_push($attributeBag, [$attr, (string)$val]);
        }

        return $attributeBag;
    }

}
