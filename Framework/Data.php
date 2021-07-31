<?php

namespace app\Framework;

class Data
{

    public static function fetch($data) {
        $raw = file_get_contents($data);
        return json_decode($raw, true);
    }

}