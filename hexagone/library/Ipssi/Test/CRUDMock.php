<?php

namespace Ipssi\Test;

/**
 * Description of CrudMock
 *
 * C = Create
 * R = Read
 * U = Update
 * D = Delete
 * 
 * @author dev
 */
class CRUDMock
{
    private static $counter = 0;
    private $table = array();

    public static function getCounter()
    {
        return self::$counter;
    }

    public function insert(Contact $c)
    {
        self::$counter++;

        $this->table[] = $c;
        return $this;
    }

    public function find($id)
    {
        self::$counter++;

        foreach ($this->table as $index => $contact) {
            if ($id === $index) {
                return $contact;
            }
        }
        return null;
    }

    public function update(Contact $c) {}
    public function delete(Contact $c) {}
}


