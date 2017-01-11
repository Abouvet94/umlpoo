<?php

namespace Ipssi\Starbuck;

class Cafe implements PriceHandler
{
    private $name;
    private $price = 5;

    public function getPrice()
    {
        return $this->price;
    }
}
