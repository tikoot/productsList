<?php
spl_autoload_register('autoLoader');

function autoLoader($className)
{
    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
var_dump($url);

if(strpos($url,'inc') !== false){
    $path = '../classes/';
}else{
    $path = 'classes/';
}
   
    $ext = '.class.php';
    require_once $path . strtolower($className) . $ext;
}