<?php

namespace Ipssi\Session;

class Session implements \ArrayAccess
{
    /**
     * Cette propriété définie le nom de la session.
     * 
     * @var string 
     */
    private $name;

    /**
     * isStarted permet de vérifier si la session
     * a déjà ou pas été démarrée.
     * 
     * @static
     * @var bool 
     */
    private static $isStarted = false;

    /**
     * Construction de l'objet Session.
     * 
     * Démarre la session avec la possibilité de
     * donner un nom en argument au constructeur.
     * 
     * @param  string $name
     * @return void
     */
    public function __construct($name = null)
    {
        if ($name !== null) {
            $this->setName($name);
            \session_name($this->getName());
        }

        if (!self::$isStarted) {
            \session_start();
            self::$isStarted = true;
        }
    }

    public function __isset($name)
    {
        return $this->has($name);
    }
    
    public function __unset($name)
    {
        $this->remove($name);
    }

    public function __get($name)
    {
        return $this->get($name);
    }

    public function __set($name, $value)
    {
        //echo $name, ' ', $value;
        //$_SESSION[$name] = $value;
        $this->set($name, $value);
    }

    public static function isStarted()
    {
        return self::$isStarted;
    }

    public function regenerateID()
    {
        return \session_regenerate_id();
    }

    public function has($key)
    {
        return \array_key_exists($key, $_SESSION);
    }

    public function get($key, $default = null)
    {
        if ($this->has($key)) {
            return $_SESSION[$key];
        }
        return $default;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;
    }
    
    public function remove($key)
    {
        unset($_SESSION[$key]);
        return $this;
    }

    public function close()
    {
        \session_unset();
        \session_destroy();
    }

    public function getID()
    {
        return \session_id();
    }

    public function getName()
    {
        return $this->name;
    }

    protected function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    public function offsetExists($offset)
    {
        return $this->has($offset);
    }

    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

    public function offsetSet($offset, $value)
    {
        $this->set($offset, $value);
    }

    public function offsetUnset($offset)
    {
        $this->remove($offset);
    }
}