<?php


abstract class Client {
    protected $commande = array();
    
    abstract protected  function creerCommande($montant);
    
     function nouvelleCommande($montant){
      $commande = $this->creerCommande($montant);
       
      if($commande->valide()){
          $commande->montant();
          $this->commande[] = $commande;
      }
    }
}
