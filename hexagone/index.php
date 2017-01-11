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

$decorator = null;
$total = 0;

foreach ($_POST as $name => $options) {
    $classname = '\\Ipssi\\Starbuck\\' . $name;
    $product = new $classname();

    foreach ($options as $option) {
        $decoratorClass = '\\Ipssi\\Starbuck\\' . $option;
        $decorator = new $decoratorClass($product);
        $price = $decorator->getPrice();
        $total += $price;
        echo $price .'<br>';
    }
}

echo '<img width="200" src="http://www.lacitedesangevins.com/wp-content/uploads/2016/01/starbucks_hz.png">';
echo '<br><br>';
echo 'Un café acheter un fauteuil pour la journée !<br>';
echo 'total : ' . $total . '<br>';

?>

<form action="" method="POST">
    <?php foreach ($products as $name => $options) : ?>
        <h3><?php echo $name ?></h3>
        <input type="hidden" name="<?php $name ?>">

        <?php foreach ($options as $option) : ?>
        <input type="checkbox" name="<?php echo $name ?>[]" value="<?php echo $option ?>"> <?php echo $option ?><br>
        <?php endforeach; ?>

    <?php endforeach; ?>

    <input type="submit" value="Commander">
</form>







