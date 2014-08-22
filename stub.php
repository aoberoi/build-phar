<?php

Phar::mapPhar('mycars.phar');

function __autoload($name) {
    require_once('./src/' . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php');
}

__HALT_COMPILER();
