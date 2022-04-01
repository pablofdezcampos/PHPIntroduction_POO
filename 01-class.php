<?php include 'includes/header.php';

//Class
class Product
{
    public $name;
    public $price;
    public $available;

    public function __construct(string $name, int $price, bool $available)
    {
        $this->name = $name;
        $this->price = $price;
        $this->available = $available;
    }
}

$product = new Product('Tablet', 390, true);

//Access to the atributtes
$product->name = 'PC';

var_dump($product);

include 'includes/footer.php';
