<?php
include 'includes/header.php';

//Autoload with composer
require 'vendor/autoload.php';

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
