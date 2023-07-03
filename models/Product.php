<?php

class Product {

    private $name;
    private $image;
    private $price;
    private $categoryIcon;
    private $type;

    public function __construct($name, $image, $price, $categoryIcon, $type) {

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