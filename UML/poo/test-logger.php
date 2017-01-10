<?php

require 'Logger.php';

$logger = new Logger('./error.log');

try {
    throw new Exception('Login et ou mot de passe incorrect', 500);
} catch (Exception $e) {
    $logger->write($e);
}

echo '<pre>';
$rows = $logger->read();

print_r($rows);
