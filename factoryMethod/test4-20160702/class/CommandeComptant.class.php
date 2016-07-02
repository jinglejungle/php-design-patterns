<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommandeComptant
 *
 * @author sam
 */
class CommandeComptant extends Commande{
    //put your code here
    
    function __construct($montant) {
        parent::__construct($montant);
    }
    
    function valide(){
        return true;
    }
    
    function paye(){
        echo "prix comptant ".$this->montant;
    }
}
