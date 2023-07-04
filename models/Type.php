<?php

class Type {
    private $type;

    private $categoryIcon;

    public function __construct($type, $categoryIcon) {
        $this -> setType($type);

        $this -> setCategoryIcon($categoryIcon);
    }

    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }

    public function getCategoryIcon() {
        return $this -> categoryIcon;
    }
    public function setCategoryIcon($categoryIcon) {
        $this -> categoryIcon = $categoryIcon;
    }
}