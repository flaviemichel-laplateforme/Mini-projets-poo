<?php
// TODO 2 : Ajouter les méthodes

class Voiture
{

    public $marque;
    public $couleur;
    public $vitesseMax;

    public function demarrer()
    {
        echo "Vroooooom ! La " . $this->marque . " démarre ! ";
    }

    public function klaxonner()
    {
        echo "POUET POUET ! " .  $this->couleur;
    }
}

// Crée 2 voitures :
//
// Voiture 1 : $ferrari
// - marque: "Ferrari"
// - couleur: "Rouge"
// - vitesseMax: 320
// TODO 3 : Créer des objets

$ferrari = new Voiture();
$ferrari->marque = "Ferrari";
$ferrari->couleur = "Rouge";
$ferrari->vitesseMax = 320;

$twingo = new Voiture();
$twingo->marque = "Renault Twingo";
$twingo->couleur = "Jaune";
$twingo->vitesseMax = 150;

// TODO 4 : Tester les voitures
// ─────────────────────────────────────────────────────────────────────────
//
// Pour chaque voiture :
// 1. Fais-la démarrer
// 2. Fais-la klaxonner
// 3. Affiche sa vitesse max
//
// Exemple : $ferrari->demarrer();

echo $ferrari->demarrer() . "<br>";
echo $ferrari->klaxonner() . "<br>";
echo "La vitesse maximum est de " . $ferrari->vitesseMax . " Kmh" . "<br>";

echo "<br>";

echo $twingo->demarrer() . "<br>";
echo $twingo->klaxonner() . "<br>";
echo "La vitesse maximum est de " . $twingo->vitesseMax . " Kmh" . "<br>";
