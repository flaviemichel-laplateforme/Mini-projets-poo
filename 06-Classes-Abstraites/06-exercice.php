<?php
// TODO 1 : Créer la classe ABSTRAITE Forme
abstract class Forme
{
    protected $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    abstract public function calculerAire();

    public function afficher()
    {
        echo $this->nom . " - Aire : " . $this->calculerAire() . "<br>";
    }
}

// TODO 3 : Créer la classe Rectangle
class Rectangle extends Forme
{
    private $largeur;
    private $hauteur;

    public function __construct($nom, $largeur, $hauteur)
    {
        parent::__construct($nom);
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
    }

    public function calculerAire()
    {
        return $this->largeur * $this->hauteur;
    }
}

// TODO 4 : Créer et tester des formes
class Cercle extends Forme
{
    private $rayon;

    public function __construct($nom, $rayon)
    {
        parent::__construct($nom);
        $this->rayon = $rayon;
    }

    public function calculerAire()
    {
        return 3.14 * $this->rayon * $this->rayon;
    }
}

$cercle = new Cercle("Cercle", 5);
echo $cercle->afficher();

$rectangle = new Rectangle("Rectangle", 20, 70);
echo $rectangle->afficher();

$forme = new Forme("Test");
