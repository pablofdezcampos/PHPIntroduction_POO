<?php include 'includes/header.php';

//Connect Database
$db = new mysqli('localhost', 'root', 'root', 'rentalhouse_crud');

//Query Creation
$query = "SELECT title, price from propierties";

//Prepare Statement
$stmt = $db->prepare($query);

//Execute
$stmt->execute();

//Create variable
$stmt->bind_result($title, $price);

//Asign results
$stmt->fetch();

var_dump($price);

while ($stmt->fetch()) :
    var_dump($title);
endwhile;
