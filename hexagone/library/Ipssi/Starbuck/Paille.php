<?php

namespace Ipssi\Starbuck;

class Paille implements PriceHandler
{
    private $price = 0.5;
    private $object;

    public function __construct(PriceHandler $object)
    {
        $this->object = $object;
    }

    public function getPrice()
    {
        return $this->object->getPrice() + $this->price;
    }
}
