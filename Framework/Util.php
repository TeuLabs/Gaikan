<?php

namespace Framework;

function useFile(String $filePath): String {
    return __DIR__ . $filePath;
}