<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommandeCredit
 *
 * @author sam
 */
class CommandeCredit extends Commande{
     function __construct($montant){
         parent::__construct($montant);
     }
     
     function paye(){
         echo "montant credit ".$this->montant;
     }
     function valide(){
         return (($this->montant> 1000)&&($this->montant<5000));
     }
}
