<?php

namespace Gaikan;

use DOMDocument;
use DOMElement;
use DOMText;
use DOMNode;

class DumpElement
{
    public static function build(string $nodeName, mixed $attributes, mixed ...$args): array
    {
        $children = [];
        count($args) ?? array_push($children, $args);
        return [$nodeName, $attributes, $children];
    }

    public static function render($component): mixed
    {
        $dom = new DOMDocument();

        if (str_split($component)) return $dom->createTextNode($component);

        $node = $dom->createElement($component['node_name']);
        $attr = $component['attributes'] ?? [];

        foreach (array_keys($attr) as $key) {
            $node->setAttribute($key, $attr[$key]);
        }

        foreach ($component['children'] ?? [] as $child) {
            $node->appendChild($child);
        }

        return $node;
        // return [$component['node_name'], $component['attributes'], $component['children']];
    }
}