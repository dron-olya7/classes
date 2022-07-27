<?php

define("ROOT", dirname(__DIR__));
spl_autoload_register(function ($className){
    $file = ROOT .'/abstract/' . str_replace('\\', '/', $className) . '.php';

    if (is_file($file)) {
        require_once $file;
    }
});