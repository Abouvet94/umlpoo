<?php

/**
 * Description of Telecommand
 *
 * @author dev
 */
class Telecommand
{
    private $tv;

    public function connect(TV $tv)
    {
        $this->tv = $tv;
    }

    public function addVolume()
    {
        $this->tv->increaseVolume();
    }

    public function reduceVolume()
    {
        $this->tv->decreaseVolume();
    }
}
