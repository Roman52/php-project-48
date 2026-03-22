<?php

namespace GenDiff\Runner;

use function GenDiff\Core\readFile;

function run(string $path1, string $path2, $format)
{
    $data1 = readFile($path1);
    $data2 = readFile($path2);

    var_dump($data1);
    var_dump($data2);
}