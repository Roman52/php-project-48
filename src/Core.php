<?php

namespace GenDiff\Core;

function readFile(string $path): string
{
   if (file_exists($path)) {
       return file_get_contents($path);
   }

   throw new \Exception("Can't file the file: {$path}");
}