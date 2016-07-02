<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Iterateur
 *
 * @author sam
 */
class Iterateur {
     
    protected $index;
    protected $contenu = array();
    protected $rechercher;    
    
    function premier(){
      $this->index = -1;
      $this->suivant();  
    }
    
    function suivant(){
      $this->index++;
      if( ($this->index <count($this->contenu)
              &&(!$this->contenu[$this->index]->trouver($this->rechercher)) )){
          $this->suivant();
      }
    }
    
    function item(){
        if( $this->index < count($this->contenu) ){
            return $this->contenu[$this->index] ;
        }else{
            return null;
        }
    }
    
    function setRechercher($rechercher,$contenu){
        $this->rechercher = $rechercher;
        $this->contenu    =$contenu;
    }
}
