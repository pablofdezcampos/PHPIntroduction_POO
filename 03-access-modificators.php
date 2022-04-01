<?php
include 'includes/header.php';

class Person
{

    //Public -> you can access and modify from everywhere.
    //Protected -> you can only access and modify in the class.
    //Private -> only members of the same class can access.

    public function __construct(protected string $name, public int $age)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

$person = new Person("Pablo", 21);

echo "<pre>";
var_dump($person);
echo "</pre>";

$person->setName("Fernando");
echo $person->getName();

include 'includes/footer.php';
