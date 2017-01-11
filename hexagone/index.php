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


$products = array(
    'Chocolat' => array(
        'Paille',
    ),
    'Cafe' => array(
        'Creme',
        'Paille',
    ),    
);

?>

<form action="" method="POST">
    <?php foreach ($products as $name => $options) : ?>
        <h3><?php echo $name ?></h3>
        <input type="hidden" name="<?php $name ?>">

        <?php foreach ($options as $option) : ?>
        <input type="checkbox" name="<?php echo $name ?>[]"> <?php echo $option ?>
        <?php endforeach; ?>

    <?php endforeach; ?>

    <input type="submit" value="Commander">
</form>







