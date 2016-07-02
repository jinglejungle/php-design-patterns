<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author sam
 */
abstract class Client {
    protected $commandes = array();
    
    function nouvelleCommande($montant){
        $commande = $this->creerCommande($montant);
        
        if($commande->valide()){
           $commande->paye();
           $this->commandes[]= $commande;    
        }
    }
    abstract function creerCommande($montant);
}
