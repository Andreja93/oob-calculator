<?php 

spl_autoload_register('myAutoLoader');

function myAutoLoader($className) {
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if (strpos($url, 'back') !==false) {
        $path = '../classes/';
    } else {
        $path = 'classes/';
    }
    


    $extension = '.php';

    require_once $path.$className.$extension;
}