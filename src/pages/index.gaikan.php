<?php

use Gaikan\Element;

// Element::parse('<SCButton icon="favorite" label="Like The Thing" />');

$str = '<SCButton icon="favorite" label="Like The Thing" />';

$dom = new DOMDocument();
$dom->loadHTML($str);

echo $dom->nodeName;

/*$p = $dom->getElementsByTagName('SCButton')->item(0);
if ($p->hasAttributes()) {
    foreach ($p->attributes as $attr) {
        $name = $attr->nodeName;
        $value = $attr->nodeValue;
        echo "Attribute '$name' :: '$value'<br />";
    }
}*/