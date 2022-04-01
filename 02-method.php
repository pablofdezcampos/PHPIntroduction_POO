<?php
include 'includes/header.php';

//PHP 8 Atributtes Declaration

class Car
{
    public function __construct(public string $name, public int $cv, public int $max_speed)
    {
    }

    //Method
    public function showCar()
    {
        echo "The car bran is: " . $this->name . " and the max speed is: " . $this->max_speed;
    }
}

$car = new Car('Ferrari', 700, 320);

echo "<pre>";
var_dump($car);
echo "</pre>";

$car->showCar();


include 'includes/footer.php';
