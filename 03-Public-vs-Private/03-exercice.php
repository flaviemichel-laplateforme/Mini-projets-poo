<?php

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer la classe Portefeuille
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'Portefeuille' avec :
// - Propriété PRIVATE $proprietaire
// - Propriété PRIVATE $argentDisponible
//
// Attention : PRIVATE, pas public !

class Portefeuille
{
    private $proprietaire;
    private $argentDisponible;

    // TODO 2 : Ajouter le constructeur
    public function __construct($proprietaire, $argentInitial)
    {
        $this->proprietaire = $proprietaire;
        $this->argentDisponible = $argentInitial;

        echo "Portefeuille crée pour " .  $this->proprietaire . " avec " .  $this->argentDisponible . " €.<br>";
    }

    // TODO 3 : Ajouter un GETTER
    public function getArgent()
    {
        return $this->argentDisponible;
    }

    // TODO 4 : Ajouter la méthode ajouterArgent()
    public function ajouterArgent($montant)
    {
        if ($montant > 0) {
            $this->argentDisponible += $montant;
            echo "✅ Ajout de $montant € <br>";
            echo "Votre solde actuel est de" . $this->argentDisponible . " €.<br>";
        } else {
            echo ("❌ Montant invalide <br>");
        }
    }

    // TODO 5 : Ajouter la méthode retirerArgent()
    public function retirerArgent($montant)
    {
        if (($montant > 0) && ($montant <= $this->argentDisponible)) {
            $this->argentDisponible -= $montant;
            echo "✅ Retrait de $montant € <br>";
            echo "Votre solde actuel est de" . $this->argentDisponible . " €.<br>";
        } else {
            echo ("❌ Fonds insuffisants ! <br>");
        }
    }
}

// TODO 6 : Créer et tester un portefeuille

$monPortefeuille = new Portefeuille("Flavie", 100);
$monPortefeuille->getArgent();
$monPortefeuille->ajouterArgent(50);
$monPortefeuille->retirerArgent(30);
$monPortefeuille->ajouterArgent(-20);
$monPortefeuille->retirerArgent(300);
echo "Solde final : " . $monPortefeuille->getArgent() . " €.<br>";
