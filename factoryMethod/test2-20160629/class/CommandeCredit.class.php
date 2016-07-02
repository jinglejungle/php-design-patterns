<?php

class CommandeCredit extends Commande{
    function __construct($montant) {
     parent::__construct($montant);
 }
 
    function valide() {
        return  ( ($this->montant>1000)&& ($this->montant<5000))  ;
    }
    function montant() {
        echo "paiement credit de ".$this->montant."&euro;<br>";
    }
}
