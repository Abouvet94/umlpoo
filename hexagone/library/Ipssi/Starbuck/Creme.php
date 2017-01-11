<?php

namespace Ipssi\Starbuck;

class Creme implements PriceHandler
{
    private $objetADecorer;
    private $price = 1;

    public function __construct(PriceHandler $object)
    {
        $this->objetADecorer = $object;
    }

    public function getPrice()
    {
        return $this->objetADecorer->getPrice() + $this->price;
    }
}
