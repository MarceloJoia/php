<?php

Use SON\Model\Client;

$guzzle = new \Guzzle/Guzzle();
$guzzle->reset();

$client = new Client();
$client->name = "Autoload PSR-0 está funcionando";

