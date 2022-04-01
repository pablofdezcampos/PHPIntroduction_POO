<?php include 'includes/header.php';

interface Animal
{
    public function getSound(): void;
    public function getSleep(): void;
}

class Dog implements Animal
{
    public function __construct(public string $name)
    {
    }

    public function getSound(): void
    {
        echo "The animal with name " . $this->name . " do wua wuau";
    }

    public function getSleep(): void
    {
        echo "The " . $this->name . " is Zzzz";
    }
}

$dog = new Dog("Dog");
echo $dog->getSound();

include 'includes/footer.php';
