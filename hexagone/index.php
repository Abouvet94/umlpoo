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

//$lemonde = new Ipssi\FeedNews\LeMonde();
//$lefigaro = new Ipssi\FeedNews\LeFigaro();
//
//foreach ($lemonde->getAll() as $article) {
//    echo $article['title'].'<br>';
//}
//
//foreach ($lefigaro->findAll() as $article) {
//    echo $article['title'].'<br>';
//}

$lefigaro = new Ipssi\GoodNews\LeFigaro();

foreach ($lefigaro as $article) {
    echo $article['title'].'<br>';
}

$lefigaro->rewind();

while($lefigaro->valid()) {
    $article = $lefigaro->current();
    echo $article['title'] . '<br>';
    $lefigaro->next();
}
