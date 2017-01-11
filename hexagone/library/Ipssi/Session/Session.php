<?php

namespace Ipssi\Session;

class Session
{
    private $name;
    private static $isStarted = false;

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

    public static function isStarted()
    {
        return self::$isStarted;
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
}