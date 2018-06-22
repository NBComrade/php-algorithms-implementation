<?php
$path = __DIR__ . '/../../src/';

$objects = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($path),
    RecursiveIteratorIterator::SELF_FIRST
);

foreach ($objects as $filePath => $object) {
    if ($object->getExtension() === 'php') {
        require_once $filePath;
    }
}
