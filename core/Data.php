<?php

namespace Gaikan;

class Data
{
    public static function get(string $url): bool|string
    {
        return file_get_contents($url);
    }

    public static function sanitize(mixed $data) {
        return json_decode($data);
    }
}