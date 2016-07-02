<?php

abstract class Commande {
    protected $montant;
    
    function __construct($montant){
        $this->montant = $montant;
    }
    
    function valide(){}
    
    function montant(){}
}
