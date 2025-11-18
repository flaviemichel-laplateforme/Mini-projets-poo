<?php

// TODO 1 : Créer la classe Utilisateur avec propriété statique
class Utilisateur
{
    private static $compteur = 0;

    private $nom;
    private $id;

    public function __construct($nom)
    {
        self::$compteur++;
        $this->id = self::$compteur;
        $this->nom = $nom;
        echo "✅ Utilisateur #" . $this->id . " créé : " . $this->nom . "<br>";
    }

    // TODO 2 : Ajouter une méthode statique
    public static function getNombreUtilisateurs()
    {
        return self::$compteur;
    }

    // TODO 3 : Ajouter une méthode normale  méthode afficher()
    public function afficher()
    {
        echo "User #" . $this->id . " : " . $this->nom . "<br>";
    }
}

// TODO 4 : Créer et tester des utilisateurs
echo Utilisateur::getNombreUtilisateurs();
echo "<br>";

$user1 = new Utilisateur("Jean");
$user2 = new Utilisateur("Marie");
$user3 = new Utilisateur("Paul");

echo Utilisateur::getNombreUtilisateurs();
echo "<br>";
$user1->afficher();
$user2->afficher();
$user3->afficher();
