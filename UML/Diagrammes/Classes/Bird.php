<?php

/**
 * Description of Bird
 *
 * @file Bird.php
 * @author dev
 */
abstract class Bird extends Animal implements Eatable
{
    public function eat()
    {
        echo 'je mange comme un birdy';
    }
}
