<?php

/**
 * Description of Eagle
 *
 * @file Eagle.php
 * @author dev
 */
class Eagle extends Bird implements Flyer
{
    public function fly()
    {
        echo "Je vole comme un " . __CLASS__;
    }
}
