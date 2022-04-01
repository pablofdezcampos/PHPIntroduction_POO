<?php
include 'includes/header.php';

//This, without composer autoload
function autoload($class)
{
    $parts = explode('\\', $class);
    require __DIR__ . '/class/namespaces/' . $parts[1] . '.php';
}

spl_autoload_register('autoload');

class Car
{
    public function __construct()
    {
        echo "From class Car without namespaces";
    }
}

$car = new Car();
$car2 = new App\Car();

include 'includes/footer.php';
