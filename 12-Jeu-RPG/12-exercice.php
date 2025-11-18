<?php

trait Attaquant
{
    public function attaquer($cible)
    {

        $degats = $this->attaque;
        echo "⚔️ " . $this->nom . " attaque " . $cible->getNom() . " et inflige " . $degats . " dégâts !<br>";
        $cible->recevoirDegats($degats);
    }
}

// TODO 2 : Créer la classe ABSTRAITE Personnage
abstract class Personnage
{

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
    public function getNom()
    {
        return $this->nom;
    }
    public function getVie()
    {
        return $this->vie;
    }
    public function getAttaque()
    {
        return $this->attaque;
    }
    abstract public function crier();
}

// TODO 3 : Créer la classe Guerrier
class Guerrier extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, $vie = 100, $attaque = 20);
    }
    public function crier()
    {
        echo "🗡️ " . $this->nom . " : Pour la gloire !<br>";
    }
}

class Mage extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, $vie = 70, $attaque = 35);
    }
    public function crier()
    {
        echo "✨" . $this->nom . " lance BOULE DE FEU ! 💥<br>";
    }
}

class Archer extends Personnage
{
    use Attaquant;

    public function __construct($nom)
    {
        parent::__construct($nom, $vie = 80, $attaque = 25);
    }
    public function crier()
    {
        echo "🏹 " . $this->nom .  " TIR MORTEL !<br>";
    }
}

// TODO 6 : Créer la classe Arene (le jeu)
class Arene
{
    public function combat($perso1, $perso2)
    {
        echo "<br>⚔️ COMBAT : " . $perso1->getNom() . " VS " . $perso2->getNom() . "<br><br>";

        $perso1->crier();
        $perso2->crier();
        echo "<br>";

        $tour = 1;
        while ($perso1->getEstVivant() && $perso2->getEstVivant()) {
            echo "--- Tour " . $tour . " ---<br>";

            $perso1->attaquer($perso2);

            if (!$perso2->getEstVivant()) {
                break;
            }

            $perso2->attaquer($perso1);

            echo "<br>";
            $tour++;
        }

        $gagnant = $perso1->getEstVivant() ? $perso1 : $perso2;
        echo "<br>🏆 VICTOIRE DE " . $gagnant->getNom() . " !<br>";

        return $gagnant;
    }
}

// TODO 7 : LE GRAND TOURNOI !
// ─────────────────────────────────────────────────────────────────────────

echo "<h2>🏰 LE GRAND TOURNOI 🏰</h2>";
echo "<br>";

// 1. Crée 3 personnages
$conan = new Guerrier("Conan");
$gandalf = new Mage("Gandalf");
$legolas = new Archer("Legolas");

echo "<br>";

// 2. Crée une Arene
$arene = new Arene();

// 3. Fais combattre
echo "<h3>🎯 DEMI-FINALE</h3>";
$gagnant1 = $arene->combat($conan, $gandalf);

echo "<br>--- Le mage utilise son sort spécial ! ---<br>";
if ($gandalf->getEstVivant()) {
    $gandalf->lancerSort($conan);
}

echo "<br><h3>🎯 FINALE</h3>";
$champion = $arene->combat($gagnant1, $legolas);

echo "<br>";

// 4. Affiche les statistiques
echo "<h3>📊 STATISTIQUES DU TOURNOI</h3>";
echo "Total de personnages créés : " . Personnage::getTotalPersonnage() . "<br>";
echo "🏆 LE CHAMPION FINAL : " . $champion->getNom() . " !<br>";
