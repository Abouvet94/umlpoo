<?php

// hexagone/index.php

/// hexagone/library/Ipssi
/// hexagone/library/Ipssi/Test/Hello.php

define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);
define('LIBRARY_PATH', ROOT_PATH . 'library');

set_include_path(
    LIBRARY_PATH . PATH_SEPARATOR .
    get_include_path()
);

spl_autoload_register(function ($classname) {
    $classname = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
    require $classname . '.php';
});

$hello = new \Ipssi\Test\Hello();
