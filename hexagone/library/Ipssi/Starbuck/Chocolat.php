<?php

namespace Ipssi\Starbuck;

class Chocolat implements PriceHandler
{
    private $price = 4;

    public function getPrice()
    {
        return $this->price;
    }
}
