<?php

// TODO 1 : Créer la classe PARENT Animal
class Animal
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function manger()
    {
        echo $this->nom . " mange ";
    }

    public function dormir()
    {
        echo $this->nom . " dort <br>";
    }
}

// TODO 2 : Créer la classe ENFANT Chien
class Chien extends Animal
{
    public function aboyer()
    {
        echo $this->nom . " WOOF, WOOF !!<br>";
    }
}

// TODO 3 : Créer la classe ENFANT Chat
class Chat extends Animal
{
    public function miauler()
    {
        echo $this->nom . " MIAOU !!<br>";
    }
}

// TODO 4 : Créer la classe ENFANT Oiseau
class Oiseau extends Animal
{
    public function voler()
    {
        echo $this->nom . " vole dans le ciel !<br>";
    }
}

// TODO 5 : Créer et tester des animaux

$chien = new Chien("Rex");
$chat = new Chat("Minou");
$oiseau = new Oiseau("Tweety");

$chien->manger();
$chat->manger();
$oiseau->manger();

$chien->dormir();
$chat->dormir();
$oiseau->dormir();

$chat->miauler();
$chien->aboyer();

$oiseau->manger();
$oiseau->voler();
