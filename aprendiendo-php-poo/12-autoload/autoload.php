<?php


function app_autoload($class){
    //$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once 'clases/'.$class.'.php';
}

spl_autoload_register('app_autoload');