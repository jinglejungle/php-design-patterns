<?php


class CommandeComptant extends Commande{
    function __construct($montant){
        parent::__construct($montant);
    }
    
    function montant() {
        echo "paiement comptant de ".$this->montant."&euro;<br>";
  
    }
    
    function valide() {
        return true;
    }
}
