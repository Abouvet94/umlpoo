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

require 'Ipssi/Loader/ClassLoader.php';
\Ipssi\Loader\ClassLoader::load();

//$contact = new \Ipssi\Test\Contact();
//$mock = new \Ipssi\Test\CRUDMock();
//$mock2 = new \Ipssi\Test\CRUDMock();
//
//$mock->insert($contact);
//$mock->find(0);
//
//$mock2->insert($contact);
//$mock2->find(0);
//
//echo \Ipssi\Test\CRUDMock::getCounter();

//var_dump(\Ipssi\Session\Session::isStarted());

$session = new \Ipssi\Session\Session('toto');
$session->set('ecole', 'ipssi');

$session->ecole = 'ip-formation';

//echo $session->ecole;
//echo $session->get('ecole');

