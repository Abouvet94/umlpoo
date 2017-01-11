<?php

namespace Ipssi\Loader;

/**
 * Description of ClassLoader
 *
 * @author dev
 */
class ClassLoader
{
    public static function load()
    {
        spl_autoload_register(function ($classname) {
            $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
            require $classname . '.php';
        });
    }
}
