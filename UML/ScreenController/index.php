<?php

ini_set('display_errors', true);

require 'TV.php';
require 'Telecommand.php';

$tv = new TV();

$telecommand = new Telecommand();
$telecommand->connect($tv);

$telecommand->addVolume();
$telecommand->addVolume();
$telecommand->addVolume();
$telecommand->addVolume();

echo "volume: " . $tv->getVolume();
