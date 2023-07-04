<?php

class Category {
    private $className;
    private $categoryIcon;
    
    public function __construct($className, $categoryIcon){
        $this -> setClassName($className);
        $this -> setCategoryIcon($categoryIcon);
    }

    public function getClassName() {
        return $this -> className;
    }
    public function setClassName($className) {
        $this -> className = $className;
    }

    public function getCategoryIcon() {
        return $this -> categoryIcon;
    }
    public function setCategoryIcon($categoryIcon) {
        $this -> categoryIcon = $categoryIcon;
    }
}

$cane = new Category("Cane", "bau");
$gatto = new Category("Gatto", "miao");
