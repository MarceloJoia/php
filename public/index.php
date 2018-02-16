<?php

define('APP_PATH', __DIR__ . '/../');

include APP_PATH . 'lib/Ps4AutoloaderClass.php';

$loader = new Psr4AutoloaderClass();

$loader->addNamespace('SON', 'src');
$loader->register();

include APP_PATH.'src/index.php';
