<?php

namespace Gaikan;

use Exception;
use SimpleXMLElement;

class Element
{
    private static string $componentFolder = '\app\src\components\\';

    /**
     * @throws Exception
     */
    public static function render(string $component)
    {
        $parsed = self::parse($component);
        $file = '../src/components/' . $parsed[0] . '.php';
        // return var_dump(self::parse($component));
        return $file;
    }

    /**
     * @throws Exception
     */
    private static function parse(string $component)
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

    protected static function handleProps(array|object $attributes): array
    {
        $attributeBag = [];

        foreach ($attributes as $attr => $val) {
            array_push($attributeBag, [$attr, (string)$val]);
        }

        return $attributeBag;
    }

}
