<?php

class Catalogue {
    protected $contenu  ;
    
    
    function __construct() {
        $this->contenu = array() ;
    }
    
    function ajouter($vehicule){
        $this->contenu[] = $vehicule;  
    }
    
    function rechercher($recherche){
        $iterateur = new Iterateur($this->contenu);
        $iterateur->setDescriptionRechercher($recherche);
        return $iterateur;     
    }
}
