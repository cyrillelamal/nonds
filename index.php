#!/usr/bin/php
<?php

const PATTERN = '/\.DS_Store$/i';

$dir = $argv[1] ?? ".";

if (!is_dir($dir)) {
    echo "Not a directory\n";
    exit(1);
} else {
    $dir = realpath($dir);
}

function walk(string $dir) // recursive
{
    $files = scandir($dir);

    foreach ($files as $file) {
        if (preg_match(PATTERN, $file)) {
            unlink($dir . DIRECTORY_SEPARATOR . $file);
            continue;
        }
        if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
            if ($file === '.' || $file === '..') {
                continue;
            } else {
                walk($dir . DIRECTORY_SEPARATOR . $file);
            }
        }
    }
}

walk($dir);

exit(0);
