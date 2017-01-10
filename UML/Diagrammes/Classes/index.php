<?php

ini_set('display_errors', true);

// /home/dev/Worspace/Web/UML/Digrammes/Classes/index.php

require 'Eatable.php';
require 'Animal.php';
require 'Feline.php';
require 'Bird.php';
require 'Chicken.php';
require 'Eagle.php';
require 'Tiger.php';

$tiger = new Tiger;
$tiger->setName('Sharkan');
echo $tiger->getName();

$tiger = new Tiger;
echo $tiger->setName('Sharkan')->getName();







