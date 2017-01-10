<?php

// UML/poo/namespace/index.php

require 'function.php';

$uri = ' /ma/resource/ ';
$uri = \Ipssi\trim($uri);

echo \Ipssi\PROMO;

echo \Ecole\Ipssi\PROMO;

new \Ipssi\Request();

echo $uri;

use \Ecole\Ipssi\Formation\Test as FormaTest;

echo FormaTest\trim('toto;');