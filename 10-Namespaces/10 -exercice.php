<?php

// ─────────────────────────────────────────────────────────────────────────
// TODO 1 : Créer une classe User dans un namespace
// ─────────────────────────────────────────────────────────────────────────
namespace App\Models;

class User
{
    private $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function afficher()
    {
        echo "👤 Modèle User : " . $this->nom . " .<br>";
    }
}

// ─────────────────────────────────────────────────────────────────────────
// TODO 2 : Créer une classe UserController dans un autre namespace
// ─────────────────────────────────────────────────────────────────────────
namespace App\Controllers;

class UserController
{
    public function index()
    {
        echo "📋 Liste des utilisateurs";
    }
}

// ─────────────────────────────────────────────────────────────────────────
// TODO 3 : Utiliser les classes avec leur chemin complet
// ─────────────────────────────────────────────────────────────────────────
namespace {



    $user = new \App\Models\User("Jean");

    $controller = new \App\Controllers\UserController();


    echo "<br>";
    $user->afficher();
    echo "<br>";
    $controller->index();
    echo "<br>";
}

// TODO 4 : Utiliser 'use' pour simplifier
//
// use MonApp\Models\User;
// use MonApp\Controllers\UserController;
//
// Puis crée les objets simplement :
// $user2 = new User("Marie");
// $controller2 = new UserController();

use App\Models\User;
use App\Controllers\UserController;

$user2 = new User("Marie");
$controller2 = new UserController();
