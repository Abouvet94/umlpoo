<?php

/**
 * Description of FlightAnimation
 *
 * @file FlightAnimation.php
 * @author dev
 */
class FlightAnimation extends Animation
{
    private $flyers = [];

    public function add(Flyer $flyer)
    {
        $this->flyers[] = $flyer;
        return $this;
    }

    public function animate()
    {
        echo "I believe I can fly...<br>";

        foreach ($this->flyers as $flyer) {
            $flyer->fly();
            echo '<br>';
        }
    }
}



