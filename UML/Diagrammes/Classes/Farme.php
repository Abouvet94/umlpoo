<?php

/**
 * Description of Farme
 *
 * @file Farme.php
 * @author dev
 */
class Farme
{
    private $eatables = [];

    public function addEatable(Eatable $eatable)
    {
        $this->eatables[] = $eatable;
        // array_push($this->eatables, $eatable);
        return $this;
    }

    public function getEatables()
    {
        return $this->eatables;
    }

    public function eatAll()
    {
        echo "Bonne Appetit !!! <br>";
        foreach ($this->eatables as $eatable) {
            $eatable->eat();
            echo '<br>';
        }
    }
}


