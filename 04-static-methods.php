<?php
include 'includes/header.php';

class Person
{
    public static $dni = "45345654D";

    public function __construct(public string $name, public int $age, string $newDni)
    {
        if ($newDni) {
            self::$dni = $newDni;
        }
    }

    public static function getDni()
    {
        return self::$dni;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public static function getPerson()
    {
        echo "Getting the value of the person...";
    }
}

$person = new Person("Pablo", 21, '');

echo "<pre>";
var_dump($person);
echo "</pre>";

$person->setName("Fernando");
echo $person->getName();

//Calling to static method
echo Person::getPerson();
echo Person::getDni();

$person2 = new Person("Carlos", 43, '23423234E');


echo "<pre>";
var_dump($person2);
echo "</pre>";

echo $person2->getDni();

include 'includes/footer.php';
