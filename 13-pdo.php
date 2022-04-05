<?php include 'includes/header.php';

//Connect DataBase with PDO
$db = new PDO('mysql:host=localhost; dbname=rentalhouse_crud', 'root', 'root');

$query = "SELECT title, description FROM propierties";

//Consult database without Prepare Statement
$properties = $db->query($query)->fetch();

echo "<pre>";
var_dump($properties);
echo "</pre>";

//Prepare Statement
$stmt = $db->prepare($query);

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
var_dump($result);
echo "</pre>";

foreach ($result as $propierty) :
    echo $propierty['title'];
    echo "<br>";
    echo $propierty['description'];
    echo "<br>";
endforeach;

include 'includes/footer.php';
