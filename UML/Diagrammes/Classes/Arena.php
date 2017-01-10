<?php

/**
 * Description of Arena
 *
 * @author dev
 */
class Arena
{
    private $name;
    private $capacity = 0;
    private $animations = [];
    public function getName()
    {
        return $this->name;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function getAnimations()
    {
        return $this->animations;
    }

    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = (int) $capacity;
        return $this;
    }

    public function addAnimations(Animation $animations)
    {
        $this->animations = $animations;
        return $this;
    }    
}
