<?php

class HelloWorld {

    private $nom = "TOURE";
    private $prenom = "O";

    public function __construct() {
        $this->nom =  "A";
    }


}



$Hello = new HelloWorld();

echo $Hello->nom;
echo $Hello->prenom;