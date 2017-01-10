<?php

/**
 * Description of Animal
 * 
 * @file Animale.php
 * @author dev
 */
abstract class Animal
{
    private $name = "";
    private $color = "";
    private $weight = 0;

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setColor($color)
    {
        $this->color = (string) $color;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setWeight($weight)
    {
        $this->weight = (int) $weight;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
