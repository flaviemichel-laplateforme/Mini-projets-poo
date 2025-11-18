<?php

// TODO 1 : Créer les traits (compétences)
trait Nageable
{
    public function nager()
    {
        echo $this->nom . " nage comme un poisson !<br>";
        return $this;
    }
}

trait Volant
{
    public function voler()
    {
        echo $this->nom . " vole dans les airs !<br>";
        return $this;
    }
}

trait Invisible
{
    public function seRendreInvisible()
    {
        echo $this->nom . " devient invisible !<br>";
        return $this;
    }
}

// TODO 2 : Créer la classe Guerrier
class Guerrier
{
    use Nageable;

    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function attaquer()
    {
        echo " ⚔️ " . $this->nom . " attaque avec son épée !<br>";
        return $this;
    }
}

// TODO 3 : Créer la classe Magicien
class Magicien
{
    use Nageable, Volant, Invisible;

    public $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function lancerSort()
    {
        echo " 🔮 " .  $this->nom . " lance un sort !<br>";
        return $this;
    }
}

// TODO 4 : Créer et tester des personnages
$guerrier = new Guerrier("Conan");
$magicien = new Magicien("Gandalf");

$guerrier->attaquer();
$guerrier->attaquer()->nager();

$magicien->lancerSort()->voler()->nager()->seRendreInvisible();
