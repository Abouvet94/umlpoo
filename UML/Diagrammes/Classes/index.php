<?php

ini_set('display_errors', true);

// /home/dev/Worspace/Web/UML/Digrammes/Classes/index.php

//require 'Eatable.php';
//require 'Flyer.php';
//require 'Animal.php';
//require 'Human.php';
//require 'Feline.php';
//require 'Bird.php';
//require 'Chicken.php';
//require 'Eagle.php';
//require 'Tiger.php';
//require 'Man.php';
//require 'Woman.php';
//require 'Farme.php';
//require 'Animation.php';
//require 'Arena.php';
//require 'FlightAnimation.php';

function loadClass($classname) {
    require $classname . '.php';
}

spl_autoload_register('loadClass');


$tiger = new Tiger;
$tiger->setName('Sharkan')->getName();

$eagle = new Eagle();
$eagle->setName('EagleBird');

$man = new Man();
$woman = new Woman();

$farme = new Farme();
$farme->addEatable($tiger)
      ->addEatable($eagle)
      ->addEatable($man)
      ->addEatable($woman);

$farme->eatAll();

$flightAnime = new FlightAnimation();
$flightAnime->add($eagle);

$arena = new Arena();
$arena->setName('Spartacus')
      ->setCapacity(1000)
      ->addAnimations($flightAnime);

$arena->show();