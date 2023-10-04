<?php

class Product {
    public $id;
    public $name;
    public $price;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
        
    }

    public function showDetails() {
        echo "Product Details:" . "<br>";
        echo "- ID: " . $this->id . "<br>";
        echo "- Name: " . $this->name . "<br>";
        echo "- Price: " . $this->getFormattedPrice() . "<br>";
        
    }
}

    //Test the product class

    $product1 = new Product(1, 'T-shirt', 19.99);
    $product1->showDetails();

