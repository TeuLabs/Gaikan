<?php

namespace Gaikan;

use Exception;
use SimpleXMLElement;

class Element
{
    private static string $componentFolder = '\app\src\components\\';

    /**
     * Renders final component
     * @param string $component
     * @throws Exception
     * @return mixed
     */
    public static function render(string $component): mixed
    {
        $parsed = self::parse($component);
        $file = '../src/components/' . $parsed[0] . '.php';
        // return var_dump(self::parse($component));
        return $file;
    }

    /**
     * Parses component for its information and puts it in an array.
     * @param string $component
     * @throws Exception
     * @return array
     */
    private static function parse(string $component): array
    {
        $element = new SimpleXMLElement($component);
        $tagName = $element->getName();
        $attributes = $element->attributes();

        $handledAttr = self::handleProps($attributes);

        $dump = [];

        for ($i = 0; $i <= (count($handledAttr) - 1); $i++) {
            $dump[$i] = $handledAttr[$i][0] . ' = ' . $handledAttr[$i][1];
        }

        return [$tagName, $dump];
    }

    /**
     * Handles all the props in a component. This function is responsible for
     * sanitizing the raw SimpleXMLElement object data.
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
