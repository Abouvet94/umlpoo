<?php

/**
 * Description of TV
 *
 * @author dev
 */
class TV
{
    private $volume = 0;

    public function increaseVolume()
    {
        $this->volume++;
    }

    public function decreaseVolume()
    {
        $this->volume--;
    }
    
    public function getVolume()
    {
        return $this->volume;
    }
}





