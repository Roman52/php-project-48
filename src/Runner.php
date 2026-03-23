<?php

namespace GenDiff\Runner;

use function GenDiff\Core\readFile;
use function GenDiff\Builder\build;

function run(string $path1, string $path2, $format): array
{
    $data1 = get_object_vars(json_decode(readFile($path1)));
    $data2 = get_object_vars(json_decode(readFile($path2)));

    return build($data1, $data2);
}