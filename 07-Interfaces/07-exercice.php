<?php
// TODO 1 : Créer l'interface PaymentInterface
interface PaymentInterface
{
    public function payer($montant);
    public function rembourser($montant);
}

// TODO 2 : Créer la classe CarteBancaire
class CarteBancaire implements PaymentInterface
{
    private $numero;

    public function __construct($numero)
    {
        $this->numero = $numero;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function payer($montant)
    {
        echo "💳 Paiement de" . $montant . " € par carte ****" . substr($this->numero, -4) . "<br>";
    }

    public function rembourser($montant)
    {
        echo "💳 Remboursement de" . $montant . " € sur la carte<br>";
    }
}

// TODO 3 : Créer les classes PayPal et Crypto
class Paypal implements PaymentInterface
{
    private $email;

    public function __construct($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function payer($montant)
    {
        echo "🅿️  Paiement PayPal de " . $montant  . " € via " . $this->email . "<br>";
    }

    public function rembourser($montant)
    {
        echo "🅿️  Remboursement PayPal de " . $montant . " €<br>";
    }
}

class Crypto implements PaymentInterface
{
    private $wallet;

    public function __construct($wallet)
    {
        $this->wallet = $wallet;
    }

    public function getWallet()
    {
        return $this->wallet;
    }

    public function payer($montant)
    {
        echo "₿ Paiement crypto de" . $montant . " € depuis wallet" . substr($this->wallet, 0, 8) . "<br>";
    }

    public function rembourser($montant)
    {
        echo "₿ Remboursement Crypto de " . $montant . " €<br>";
    }
}

// TODO 4 : Créer une fonction qui accepte N'IMPORTE QUEL paiement
function traiterPaiement(PaymentInterface $methode, $montant)
{
    echo "🛒 COMMANDE : " . $montant . " €<br>";
    $methode->payer($montant);
}

traiterPaiement(new CarteBancaire("1234567812345678"), 50);
traiterPaiement(new Paypal("jean@email.com"), 75);
// Un wallet crypto "1A2B3C4D5E6F7G8H9I"
traiterPaiement(new Crypto("1A2B3C4D5E6F7G8H9I"), 487);
