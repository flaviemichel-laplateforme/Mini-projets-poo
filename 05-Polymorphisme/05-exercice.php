<?php

// TODO 1 : Créer la classe parent Instrument
class Instrument
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function jouer()
    {
        echo $this->nom . "joue de la musique.<br>";
    }
}

// TODO 2 : Créer la classe Guitare (redéfinir jouer)
class Guitare extends Instrument
{
    public function jouer()
    {
        echo " $this->nom  : GLING GLING <br>";
    }
}

// TODO 3 : Créer les classes Piano et Batterie
class Piano extends Instrument
{
    public function jouer()
    {
        echo "$this->nom   : PLONK, PLONK <br>";
    }
}

class Batterie extends Instrument
{
    public function jouer()
    {
        echo " $this->nom   : BOOM, BOOM <br>";
    }
}

// TODO 4 : Créer un orchestre et tester

$orchestre = [
    new Guitare("Fender"),
    new Piano("Yamaha"),
    new Batterie("Pearl")
];

foreach ($orchestre as $instrument) {
    $instrument->jouer();
}
