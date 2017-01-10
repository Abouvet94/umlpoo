<?php

try {
    throw new Exception("Un erreur est survenue", 8630);
} catch(Exception $e) {
    echo $e->getMessage() . '<br>';
    echo $e->getCode() . '<br>';
    echo $e->getFile() . '<br>';
    echo $e->getLine() . '<br>';
    
    $log->write($e);
}

echo "hello";