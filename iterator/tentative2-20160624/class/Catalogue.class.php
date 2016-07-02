<?php


class Catalogue {
   protected $contenu;
   
   function __construct() {
       $this->contenu = array();
   }
   
   function ajouter($element){
       $this->contenu[] = $element;   
   }
   
   function rechercher($rechercher){
       $iterateur = new iterateur($this->contenu);
       $iterateur->setRechercher($rechercher);
       return $iterateur ; 
   }
}
