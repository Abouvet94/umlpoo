<?php

/**
 * Description of Feline
 *
 * @file Feline.php
 * @author dev
 */
abstract class Feline extends Animal implements Eatable
{
    public function eat()
    {
        echo 'je mange comme un felin';
    }
}
