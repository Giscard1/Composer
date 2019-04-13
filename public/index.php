<?php

require "../vendor/autoload.php";

$myHello = new \App\Wcs\Hello();
$myHello->talk();

$overHello = new \HelloWorld\SayHello();
echo $overHello::world();