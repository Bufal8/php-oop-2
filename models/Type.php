<?php

class Type {
    private $type;
    

    public function __construct($type) {
        $this -> setType($type);

    }

    public function getType() {
        return $this -> type;
    }
    public function setType($type) {
        $this -> type = $type;
    }

   
}

$ciotola = new Type ("Ciotola");
$cibo = new Type ("Cibo");
$cuccia = new Type ("Cuccia");
$giocattolo = new Type ("Giocattolo");

var_dump($ciotola);

echo "<br>-------------------</br>";

var_dump($cibo);

echo "<br>-------------------</br>";

var_dump($cuccia);

echo "<br>-------------------</br>";

var_dump($giocattolo);