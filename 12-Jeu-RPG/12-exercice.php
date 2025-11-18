<?php

trait Attaquant
{
    public function attaquer($cible)
    {

        $degats = $this->attaque - $cible->defense;
        echo "⚔️ " . $this->nom . " attaque" . $this->cible . " et inflige $degats !";

        $cible->recevoirDegats($degats);
    }
}

// TODO 2 : Créer la classe ABSTRAITE Personnage
abstract class Personnage
{
    use Attaquant;

    private static $totalPersonnage = 0;

    protected $nom;
    protected $vie;
    protected $attaque;

    private $estVivant = true;

    public function __construct($nom, $vie, $attaque)
    {
        self::$totalPersonnage++;

        $this->nom = $nom;
        $this->vie = $vie;
        $this->attaque = $attaque;
        echo "✨" . $this->nom . " entre dans l'arène !<br>" .  "Vie : " . $this->vie . "Attaque: " . $this->attaque . "<br>";
    }

    public function recevoirDegats($degats)
    {
        // - Méthode recevoirDegats($degats) qui :
        //   * Réduit $vie
        //   * Si vie <= 0 : met $estVivant à false et affiche "💀 [nom] est KO !"
        //   * Sinon : affiche "💔 [nom] a X PV restants"
        $this->vie -= $degats;

        if ($this->vie <= 0) {
            $this->estVivant = false;
            echo "💀 " . $this->nom . " est KO !<br>";
        } else {
            echo "💔 " . $this->nom . " a " . $this->vie . " PV restants<br>";
        }
    }

    public function getEstVivant()
    {
        return $this->estVivant;
    }

    public static function getTotalPersonnage()
    {
        return self::$totalPersonnage;
    }

    abstract public function crier();
}
