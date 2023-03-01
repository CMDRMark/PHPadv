<?php
spl_autoload_register(function ($class) {
    $separator = DIRECTORY_SEPARATOR;

    $className = str_replace('_', $separator, $class);
    $className = str_replace('\\', $separator, $className);
    $filePath = __DIR__ . $separator . $className . '.php';

    if (file_exists($filePath)) {
        require_once($filePath);
    }
});
