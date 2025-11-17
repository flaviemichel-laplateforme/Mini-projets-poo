<?php

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer la classe CompteBancaire
// ─────────────────────────────────────────────────────────────────────────
//
// Crée une classe 'CompteBancaire' avec :
// - Propriété public $titulaire
// - Propriété public $solde

class CompteBancaire
{
    public $titulaire;
    public $solde;

    public function __construct($titulaire, $soldeInitial = 0)
    {
        $this->titulaire = $titulaire;
        $this->solde = $soldeInitial;
    }

    public function deposer($montant)
    {
        $this->solde += $montant;

        echo "Dépôt de " . $montant . "€ <br>";
        echo "Solde de " . $this->titulaire . ": " . $this->solde . "€ <br>";
    }
}

// TODO 4 : Créer et tester des comptes

$Compte1 = new CompteBancaire("Jean", 1000);
echo $Compte1->solde . "<br>";
echo $Compte1->deposer(200);

$Compte2 = new CompteBancaire("Marie", 500);
echo $Compte2->solde . "<br>";
echo $Compte2->deposer(200);
