<?php

// test-template.php

ini_set('display_errors', true);

require 'Template.php';

try {
    $t = new Template('./views/home.phtml');
    $content = $t->render(array("name" => "toto"));

    $layout = new Template('./views/layout.phtml');
    echo $layout->render(array('content' => $content));

} catch(Exception $e) {
    echo $e->getMessage();
}
