<?php
include 'includes/header.php';

function autoload($class)
{
    require __DIR__ . '/class/' . $class . '.php';
}

spl_autoload_register('autoload');

$details = new Details();
$clients = new Clients();


include 'includes/footer.php';
