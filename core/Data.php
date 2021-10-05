<?php

namespace Gaikan;

use React\EventLoop;
use React\Promise;

class Data
{
    public static function get(string $url) {
        return json_decode(file_get_contents($url));
    }
}