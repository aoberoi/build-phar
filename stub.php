<?php

Phar::mapPhar('mycars.phar');

spl_autoload_register(function($name) {
    $path = '.' . DIRECTORY_SEPARATOR . 'src'. DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
    if (file_exists($path)) {
        require_once($path);
    }
});

__HALT_COMPILER();
