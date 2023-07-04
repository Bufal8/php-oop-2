<?php

class Category {
    private $className;
    
    public function __construct($className){
        $this -> setClassName($className);
    }

    public function getClassName() {
        return $this -> className;
    }
    public function setClassName($className) {
        $this -> className = $className;
    }
}

$cane = new Category("Cane");
var_dump($cane);