<?php

/**
 * Description of Human
 *
 * @file Human.php
 * @author dev
 */
abstract class Human implements Eatable
{
    private $height = 0;
    private $weight = 0;
    private $hairColor = "";

    public function getHeight()
    {
        return $this->height;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getHairColor()
    {
        return $this->hairColor;
    }

    public function setHeight($height)
    {
        $this->height = (int) $height;
        return $this;
    }

    public function setWeight($weight)
    {
        $this->weight = (int) $weight;
        return $this;
    }

    public function setHairColor($hairColor)
    {
        $this->hairColor = (string) $hairColor;
        return $this;
    }

    public function eat()
    {
        echo "Je mange comme un " . __CLASS__;
    }
}
