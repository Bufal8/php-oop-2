<?php

require_once("./Category.php");

class Product extends Category {
    private $name;
    private $price;
    private $image;

    public function __construct($className, $categoryIcon, $name, $image, $price) {
        
        parent :: __construct($className, $categoryIcon);
        
        $this -> setName($name);
        $this -> setImage($image);
        $this -> setPrice($price);
    }

    public function getName() {
        return $this -> name;
    }
    public function setName($name) {
        $this -> name = $name;
    }

    public function getImage() {
        return $this -> image;
    }
    public function setImage($image) {
        $this -> image = $image;
    }
    
    public function getPrice() {
        return $this -> price;
    }
    public function setPrice($price) {
        $this -> price = $price;
    }
}

$ciotola = new Product ("Cane", "bau", "Ciotolator7000","immagine Ciotolator7000", 10);

var_dump($ciotola);
