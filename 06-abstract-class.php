<?php include 'includes/header.php';

//Abstract Classes -> those classes can´t be instancied, only inheritance.

abstract class Animal
{
    public function __construct(protected string $name, protected int $legs)
    {
    }

    public function getInfo(): string
    {
        return "The animal name is " . $this->name . " and the number of lengths is " . $this->legs;
    }
}

//Inheritance
class Dog extends Animal
{
    public function __construct(protected string $name, protected int $legs, private string $color)
    {
    }

    public function getInfo(): string
    {
        return "The animal name is " . $this->name . " and the number of lengths is " . $this->legs . " and the color is " . $this->color;
    }
}

class Cat extends Animal
{
}

$dog = new Dog("Dog", 4, "Black");
$cat = new Cat("Cat", 4);

echo $dog->getInfo();
echo "<hr>";
echo $cat->getInfo();

include 'includes/footer.php';
