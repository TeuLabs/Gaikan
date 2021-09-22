<?php

namespace App\src\components;

class Typography
{
    public static function render($content, $type = 'body'): string
    {
        $types = [
            'body' => 'p',
            'header' => 'h2',
            'subtitle' => 'h4'
        ];

        if (!array_key_exists($type, $types)) {
            throw new \Error("Type $type is not valid! Please use another type.");
        } else {
            if ($type == 'body') {
                return("<p>$content</p>");
            } else if ($type == 'header') {
                return("<h2>$content</h2>");
            } else if ($type == 'subtitle') {
                return("<h4>$content</h4>");
            } else {
                return '';
            }
        }
    }
}