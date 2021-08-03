<?php

namespace Gaikan;

class Util
{
    function useFile(String $filePath): String {
        return __DIR__ . $filePath;
    }
}