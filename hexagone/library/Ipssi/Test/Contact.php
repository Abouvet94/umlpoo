<?php

namespace Ipssi\Test;

/**
 * Description of Contact
 *
 * @author dev
 */
class Contact
{
    private $fullname;
    private $phone;

    public function getFullname()
    {
        return $this->fullname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setFullname($fullname)
    {
        $this->fullname = (string) $fullname;
        return $this;
    }

    public function setPhone($phone)
    {
        $this->phone = (string) $phone;
        return $this;
    }
}
