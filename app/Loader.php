<?php

namespace Intranet;

spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    if ($parts[0] == 'Intranet') {
        array_shift($parts);
    }
    $class = implode(DS, $parts);
    $parts[0] = strtolower($parts[0]);

    if (file_exists(APPLICATION_PATH . '/' . $class . '.php')) {
        require_once $class . '.php';
    }
});
