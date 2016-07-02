<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catalogue
 *
 * @author sam
 */
class Catalogue {
    protected $contenu;
    
    function __construct() {
        $this->contenu = array();
    }
    
    function ajouter($element ){
        $this->contenu[] = $element ;  
    }
    
    function rechercher($rechercher){
       $iterateur = new Iterateur();
       $iterateur->setRechercheContenu($rechercher,$this->contenu);
       return $iterateur;     
    }
}
