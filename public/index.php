<?php

//chdir(dirname(__DIR__));
define('APP_PATH', __DIR__.'/../');

include APP_PATH . 'lib/SplClassLoader.php';

//Registro das bibliotecas
$loader = new SplClassLoader('Guzzle','lib/vendor/guzzle/src');//caminho
$loader->register();

$loader = new SplClassLoader('SON','src');
$loader->register();

include APP_PATH . 'src/index.php';
