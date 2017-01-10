<?php

/**
 * Description of Animation
 *
 * @file Animation.php
 * @author dev
 */
abstract class Animation
{
    private $name;
    private $price = 0;

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = (float) $price;
        return $this;
    }

    abstract public function animate();
}
